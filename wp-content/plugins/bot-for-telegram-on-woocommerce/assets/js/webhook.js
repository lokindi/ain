Vue.component('bftow_webhook_activation', {
	data: function () {
		return {

		}
	},
	methods: {
		activate() {
			Vue.nextTick(function() {
				var $ = jQuery;
				$.ajax({
					type: "POST",
					url: nuxy_webhook_data.ajax_url,
					dataType: 'json',
					context: this,
					data: 'action=bftow_action_with_rest_url&btn_action=activate&security=' + nuxy_webhook_data.ajax_nonce,
					beforeSend: function () {
						$('#wt-info-line').addClass('loading');
					},
					success: function (data) {
						var msg = data.message;
						$('#wt-info-line').removeClass('loading').text(msg.description);
					}
				});
			})
		},
		deactivate() {
			Vue.nextTick(function() {
				var $ = jQuery;
				$.ajax({
					type: "POST",
					url: nuxy_webhook_data.ajax_url,
					dataType: 'json',
					context: this,
					data: 'action=bftow_action_with_rest_url&btn_action=deactivate&security=' + nuxy_webhook_data.ajax_nonce,
					beforeSend: function () {
						$('#wt-info-line').addClass('loading');
					},
					success: function (data) {
						var msg = data.message;

						$('#wt-info-line').removeClass('loading').text(msg.description);
					}
				});
			});
		}
	},
});