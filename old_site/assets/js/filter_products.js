
sub_category_array = [];
filter_list_array = [];

$( document ).ready(function() {
	console.log( "filter product" );
});


function checkSubProduct(image, product_name, sub_category_id , index ){
	console.log(sub_category_id);
	let count = index;
	var sub_category_val = $("#subCategory"+index).is(":checked");
	console.log("sub_category_val val = " , sub_category_val);

	if(sub_category_val){
		sub_category_array.push(sub_category_id);

		console.log("ADD sub_category_array =  ", sub_category_array);
		filter_list_array.push({"sub_category_id" : sub_category_id , "count" : count , "product_name" : product_name , "image" : image});
		
	}else if(!sub_category_val){

		for (var i = 0; i < sub_category_array.length; i++) {
			if (sub_category_id === sub_category_array[i]) {
				sub_category_array.splice(i,1);
			}
		}

		console.log("REMOVE sub_category_array =  ", sub_category_array);	

		for (var i = 0; i < filter_list_array.length; i++) {

			if (sub_category_id === filter_list_array[i]["sub_category_id"]) { 
				filter_list_array.splice(i,1);
			}else{
					
			}
		}
	}

	console.log("filter_list_array == ", filter_list_array);

	if (filter_list_array.length != 0) {
		$("#defaultAllProductList").hide();
		$("#filterProductList").show();
	}else if (filter_list_array.length == 0){
		$("#filterProductList").hide();
		$("#defaultAllProductList").show();
	}


	$(".image-list").remove();

	for (var i = 0; i < filter_list_array.length; i++) {
			
		for (var j = 0; j< filter_list_array[i]["count"]; j++) {

			console.log("count = ", filter_list_array[i]["count"]);
			var filter_product = "<div class='col-lg-4 col-md-4 col-12 image-list'><div class='single_product'><div class='product_thumb'><a class='primary_img' href='product.php'><img src='assets/img/product/products-listings/"+filter_list_array[i]["image"]+"' alt=''></a><a class='secondary_img' href='product.php'><img src='assets/img/product/products-listings/"+filter_list_array[i]["image"]+"' alt=''></a><div class='product_action'><div class='hover_action'><a  href='#'><i class='fa fa-plus'></i></a><div class='action_button'><ul><li><a title='add to cart' onclick='addToCartClick('6.png','product_name_1','23','2','200')' ><i class='fa fa-shopping-basket' aria-hidden='true'></i></a></li><li><a href='wishlist.php' title='Add to Wishlist'><i class='fa fa-heart-o' aria-hidden='true'></i></a></li></ul></div></div></div></div><div class='product_content grid_content'><h3><a href='product.php'>"+filter_list_array[i]["product_name"]+"</a></h3></div></div></div>";

			$("#filterProductList").append(filter_product);

		}	
	}

	var data = {
		"category_id" : "category_id",
		"sub_category" : sub_category_array
	}
	
}


// filter product by weight slider
$("#weightFilter").click(function(){

	let weight = $("#weight").val();
	console.log("weight = " , weight);

	var str = weight.split(" ");
	var filter_weight = parseInt(str[0]);
	console.log("filter_weight = ", filter_weight);
	$(".image-list").remove();
	for (var i = 0; i < filter_weight; i++) {
	
		var filter_product = "<div class='col-lg-4 col-md-4 col-12 image-list'><div class='single_product'><div class='product_thumb'><a class='primary_img' href='product.php'><img src='assets/img/product/products-listings/3.png' alt=''></a><a class='secondary_img' href='product.php'><img src='assets/img/product/products-listings/3.png' alt=''></a><div class='product_action'><div class='hover_action'><a  href='#'><i class='fa fa-plus'></i></a><div class='action_button'><ul><li><a title='add to cart' onclick='addToCartClick('6.png','product_name_1','23','2','200')' ><i class='fa fa-shopping-basket' aria-hidden='true'></i></a></li><li><a href='wishlist.php' title='Add to Wishlist'><i class='fa fa-heart-o' aria-hidden='true'></i></a></li></ul></div></div></div></div><div class='product_content grid_content'><h3><a href='product.php'>Baby Ring</a></h3></div></div></div>";

		$("#filterProductList").append(filter_product);
	}

});

// filter sort by weight
function myFunction(){
	console.log("hofdd = ", $("#sortByWeight").val());
}



