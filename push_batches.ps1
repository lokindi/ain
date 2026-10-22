[Console]::OutputEncoding = [Text.Encoding]::UTF8
git config core.quotepath false
$limit = 800MB
$files = git ls-files --others --modified --exclude-standard | Sort-Object -Unique
$batch = @()
$size = 0
$n = 1
$utf8 = New-Object Text.UTF8Encoding($false)

function Send-Batch($list, $n) {
    [IO.File]::WriteAllLines("$PWD\batch.tmp", [string[]]$list, $utf8)
    git add --pathspec-from-file=batch.tmp
    git commit -m "Batch $n"
    git push origin main
    if ($LASTEXITCODE -ne 0) {
        Write-Host "PUSH FAILED at batch $n - run the script again" -ForegroundColor Red
        exit 1
    }
}

foreach ($f in $files) {
    if (-not (Test-Path -LiteralPath $f)) { continue }
    $len = (Get-Item -LiteralPath $f).Length
    if ($len -gt 100MB) {
        Write-Host "SKIPPED (over 100MB): $f" -ForegroundColor Yellow
        continue
    }
    if ((($size + $len) -gt $limit) -and ($batch.Count -gt 0)) {
        Send-Batch $batch $n
        $n++
        $batch = @()
        $size = 0
    }
    $batch += $f
    $size += $len
}

if ($batch.Count -gt 0) { Send-Batch $batch $n }
Remove-Item batch.tmp -ErrorAction SilentlyContinue
Write-Host "DONE" -ForegroundColor Green