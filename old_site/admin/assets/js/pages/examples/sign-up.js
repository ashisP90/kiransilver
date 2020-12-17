$(function () {
	$('#sign_up').validate({
		rules: {
			'terms': {
				required: true
			},
			'confirm': {
				equalTo: '[name="password"]'
			}
		},
		highlight: function (input) {
			console.log(input);
			
			window.location.href = "file:///home/neha/Documents/neha-personal/work/Kiran_jwellers/pages/examples/sign-in.html";

			$(input).parents('.form-line').addClass('error');
		},
		unhighlight: function (input) {
			$(input).parents('.form-line').removeClass('error');
		},
		errorPlacement: function (error, element) {
			$(element).parents('.input-group').append(error);
			$(element).parents('.form-group').append(error);
		}
	});
});