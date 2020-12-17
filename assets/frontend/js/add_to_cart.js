var cart = [] , cart_details=[];
var total_quantity = 0 , total_weight = 0;

$( document ).ready(function() {
	console.log( "ready!" );
	getCartDetailList();
	
});

// GET CART DETAILS LIST
function getCartDetailList(){
	cart_details = [];
	cart_details = JSON.parse(sessionStorage.getItem('add_to_cart_array'));
	console.log("cart_details ====== ", cart_details);

	$("#totalQuantity").text('');
	$("#totalWeight").text('');

	for (var i = 0; i < cart_details.length; i++) {
		let  product_idd = cart_details[i]["product_id"];
		// let  product_id = i;
		console.log("product id ==== ", product_idd);
		let qty = cart_details[i]["qty"];
		let weight = cart_details[i]["weight"];
		let price = cart_details[i]["price"];
		let total_price = (price * qty);
		total_quantity = (total_quantity + parseInt(qty));
		total_weight = (total_weight + parseInt(weight));
		console.log("total_quantity = ", total_quantity);
		$("#totalQuantity").text(total_quantity);
		console.log("total_weight = ", total_weight);
		$("#totalWeight").text(total_weight);


		console.log("total_price = ", total_price);
		

		$("#cartTableBody").append("<tr><td class='product_remove' style='cursor:pointer' onclick='removeToCart("+i+")' ><a href='#'><i class='fa fa-trash-o'></i></a></td><td class='product_thumb'><a href='#''><img src='assets/img/product/product details/1.png' alt=''></a></td><td class='product_name'><a href='#'>Handbag fringilla</a></td><td class='product_quantity'><input min='1' max='100' class='qty-"+i+"' value='"+qty+"' onclick='changeQty()' type='number'></td><td class='product_quantity'><input min='1' max='100' value='"+weight+"' class='weight-"+i+"' type='number'></td></tr>");

		// quantity
		$(".qty-"+i).keyup(function(){
			let qty = $(this).val();
			total_price = (price * qty);
			total_quantity = (total_quantity + parseInt(qty));
			console.log("total_quantity = ", total_quantity);
			$("#totalQuantity").text(total_quantity);
		});

		$(".qty-"+i).change(function(){
			let qty = $(this).val();
			total_price = (price * qty);
			total_quantity = (total_quantity + parseInt(qty));
			console.log("total_quantity = ", total_quantity);
			$("#totalQuantity").text(total_quantity);
		});

		// weight
		$(".weight-"+i).keyup(function(){
			let weight = $(this).val();
			console.log("weight = ", weight);
			total_weight = (total_weight + parseInt(weight));
			console.log("total_weight = ", total_weight);
			$("#totalWeight").text(total_weight);
		});

		$(".weight-"+i).change(function(){
			let weight = $(this).val();
			console.log("weight = ", weight);
			total_weight = (total_weight + parseInt(weight));
			console.log("total_weight = ", total_weight);
			$("#totalWeight").text(total_weight);
		});
	}

}


function changeQty(){
	
}

	
// REMOVE CART (give product id in argument)
function removeToCart(product_id){
	console.log("product_id = ", product_id);

	cart = cart_details;

	console.log(" before cart_details == ", cart);

	for (var i = 0; i < cart.length; i++) {
		// if (cart[i]["product_id"] === product_id) { 
		if (i === product_id) { 
			cart.splice(i,1);
		}else{
				
		}
	}
	console.log("after remove cart array = ", cart);
	sessionStorage.setItem("add_to_cart_array", JSON.stringify(cart) );

	getCartDetailList();

	location.reload();
}

// ADD CART
function addToCartClick(add_via,product_id,image,product,price,qty,weight_val){
	console.log(add_via);
	var qty_cart , size , color , weight;
	var data = '';

	if (add_via == 'from_wishlist') {
		qty_cart = parseInt(qty);
	}else if (add_via == 'from_product_list') {
		qty_cart = parseInt($("#qtyCart").val());
		size = $("#size").val();
		color = $("#color").val();
		weight = parseInt($("#cartWeight").val());
	}

	console.log("qty_cart = ", qty_cart);

	data = {
		"product_id":product_id,
		"image":image,
		"product":product,
		"price":price,
		"qty":qty_cart,
		"weight":parseInt(weight),
		"size": size,
		"color" : color,
		"remark" : ""
	}
	
	cart_details = JSON.parse(sessionStorage.getItem('add_to_cart_array'));

	console.log("cart_details = ", cart_details);
	if (cart_details == null) {
        cart = [];

        cart.push(data);
    }else{
        cart = cart_details;
        for (var i = 0; i < cart.length; i++) {

        	console.log("cart_size = ", cart[i]["size"]);
        	console.log("cart_weight = ", cart[i]["weight"]);
        	console.log("cart_color = ", cart[i]["color"]);
        	console.log("cart_id = ", cart[i]["product_id"]);


        	console.log("data_size = ",data.size);
        	console.log("data_weight = ", data.weight);
        	console.log("data_color = ",data.color);
        	console.log("data_id = ",data.product_id);


        	if (cart[i]["product_id"] === data.product_id && cart[i]["size"] === data.size && cart[i]["color"] === data.color && cart[i]["weight"] === data.weight) {
        		console.log("SAME PRODUCT IddD == ", cart[i]);
        		let add_qty = (cart[i]["qty"] + qty_cart);
        		
        		cart.splice(i,1);

        		cart.push({
					"product_id":product_id,
					"image":image,
					"product":product,
					"price":price,
					"qty":add_qty,
					"weight":parseInt(weight),
					"size": size,
					"color" : color,
					"remark" : ""
				});
        		
        	}else{
        		console.log("DIFFERENT PRODUCT ID == ", cart[i]);
        		// console.log("data === ", data);
        		cart.push(data);
        	}
        }
    };

	console.log("After Add cart array = ", cart);

	// sessionStorage.setItem("add_to_cart_array", JSON.stringify(cart) );

	$('#addCartModal').modal('hide');
	

}