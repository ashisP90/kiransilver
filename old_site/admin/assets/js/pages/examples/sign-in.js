$(function () {
		$('#sign_in').validate({
				highlight: function (input) {
						console.log(input);
						window.location.href = "file:///home/neha/Documents/neha-personal/work/Kiran_jwellers/pages/home-page/instagram.html";

						$(input).parents('.form-line').addClass('error');
				},
				unhighlight: function (input) {
						$(input).parents('.form-line').removeClass('error');
				},
				errorPlacement: function (error, element) {
						$(element).parents('.input-group').append(error);
				}
		});
});

function goToDashoard (){
		console.log("hello");
}