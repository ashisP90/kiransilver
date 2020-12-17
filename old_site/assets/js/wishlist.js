var wishlist = [], wishlist_details = [];

$(document).ready(function () {
    console.log("ready!");
    getWishlistDetailList();
});

// GET wishlist DETAILS LIST
function getWishlistDetailList() {
    // wishlist_details = [];
    wishlist_details = JSON.parse(sessionStorage.getItem('add_to_wishlist_array'));
    console.log("wishlist_details ====== ", wishlist_details);

    for (var i = 0; i < wishlist_details.length; i++) {
        let  product_id = wishlist_details[i]["product_id"];
        let qty = wishlist_details[i]["qty"];
        let price = wishlist_details[i]["price"];
        console.log("qty = ", qty);

        $("#wishlistTableBody").append("<tr><td class='product_remove' style='cursor:pointer' onclick='removeToWishlist(" + product_id + ")' ><a href='#'>X</a></td><td class='product_thumb'><a href='#'><img src='assets/img/s-product/product.jpg' alt=''></a></td><td class='product_name'><a href='#'>Handbag fringilla</a></td><td class='product_quantity'>In Stock</td><td class='product_total'><a href='#'>Add To CART</a></td></tr>");
    }
}

function changeQty() {

}

// REMOVE wishlist (give product id in argument)
function removeToWishlist(product_id) {
    console.log("product_id = ", product_id);

    wishlist = wishlist_details;

    console.log(" before wishlist_details == ", wishlist);

    for (var i = 0; i < wishlist.length; i++) {
        if (wishlist[i]["product_id"] === product_id) {
            wishlist.splice(i, 1);
        } else {

        }
    }
    console.log("after remove wishlist array = ", wishlist);
    sessionStorage.setItem("add_to_wishlist_array", JSON.stringify(wishlist));
    getWishlistDetailList();
    location.reload();
}

// ADD ti wishlist
function addToWishlistClick(image, product, price, qty, weight) {

    console.log("hello");
    // wishlist= [];

    wishlist.push({
        "product_id": 1,
        "image": image,
        "product": product,
        "price": price,
        "qty": qty,
        "weight": weight
    });
    console.log("wishlist array = ", wishlist);
    sessionStorage.setItem("add_to_wishlist_array", JSON.stringify(wishlist));
}