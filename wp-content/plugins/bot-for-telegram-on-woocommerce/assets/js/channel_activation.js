Vue.component('bftow_channel_activation', {
	data: function () {
		return {
			public_channel_id: nuxy_channel_activation_data.public_channel,
			private_channel_id: nuxy_channel_activation_data.chat_id,
		}
	},
	methods: {
		get_private_channel() {
			var _this = this;
			Vue.nextTick(function() {
				var $ = jQuery;
				var messageWrap = $('.wt-message');
				$.ajax({
					type: "POST",
					url: nuxy_channel_activation_data.ajax_url,
					dataType: 'json',
					context: this,
					data: 'action=bftow_pro_action_get_channel_id&public_channel=' + _this.public_channel_id + '&security=' + nuxy_channel_activation_data.ajax_nonce,
					success: function (data) {
						messageWrap.removeClass('success error');
						messageWrap.text(data.message);
						messageWrap.addClass(data.status);
						if(typeof data.chat_id !== 'undefined'){
							_this.private_channel_id = data.chat_id;
						}
					}
				});
			})
		},
	},
});