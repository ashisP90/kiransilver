

$("#newOrder").click(function(){
	console.log($(this).val());


	showAutoCloseTimerMessage();

});

function showAutoCloseTimerMessage() {
    swal({
        title: "Your Order Successfully Completed",
        text: "",
         type: "success",
        timer: 1000,
        showConfirmButton: false
    });

    setTimeout(function(){
		window.location.href = "file:///home/neha/Documents/neha-personal/work/Kiran_jwellers/pages/booked-order/new_order.html";
	}, 1200);

   
}