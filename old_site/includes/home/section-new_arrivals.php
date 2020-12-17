<?php
$productArgs = [
    'limit' => 16
];
$products = getProducts($productArgs);
?>
<section class="product_section womens_product" id="pro12">
    <div class="container">
        <div class="row">   
            <div class="col-12">
                <div class="section_title">
                    <h2>New Arrivals</h2>
                    <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                </div>
            </div> 
        </div>
        <?php if ($products && count($products)): ?>
            <div class="product_area"> 
                <div class="row">
                    <div class="col-12">
                        <div class="product_tab_button">
                            <!--<ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#clothing" role="tab" aria-controls="clothing" aria-selected="true">Women’s</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#handbag" role="tab" aria-controls="handbag" aria-selected="false">Men’s</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#shoes" role="tab" aria-controls="shoes" aria-selected="false">Kid's</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#accessories" role="tab" aria-controls="accessories" aria-selected="false">Shoes</a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="clothing" role="tabpanel">
                        <div class="product_container">
                            <div class="row product_column4">
                                <?php foreach ($products as $product): ?>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product.php?id=<?php echo $product->id; ?>"><img src="admin/uploads/<?php echo $product->product_image; ?>" alt=""></a>
                                                <a class="secondary_img" href="product.php?id=<?php echo $product->id; ?>"><img src="admin/uploads/<?php echo $product->product_image; ?>" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                        <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>
                                                                <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>
                                                <div class="product_sale"><span>-7%</span></div>
                                                -->
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product.php?id=<?php echo $product->id; ?>"><?php echo $product->pname; ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>