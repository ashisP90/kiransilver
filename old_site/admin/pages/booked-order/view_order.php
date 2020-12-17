<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Kiran Jwellers</title>
        <?php include('../../includes/header-styles.php'); ?>
    </head>

    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>

        <?php include ('../../includes/header.php'); ?>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Social Media</h2>
                </div>
                <!-- Input -->
                <div class="row justify-content-around clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>ORDER DETAILS LIST (Oredr ID - Customer Name)</h2>	
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th width="10%">Sr No</th>
                                                <th width="20%">Product Name</th>
                                                <th width="10%">Procuct ID</th>
                                                <th width="10%">Size</th>
                                                <th width="10">Weight</th>
                                                <th width="10%">Colour</th>
                                                <th width="10%">Quantity</th>
                                                <th width="10%">Total Price</th>
                                                <th width="20%">Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>

                                                <td>Silver Kada</td>
                                                <td>K25</td>
                                                <td>45</td>
                                                <td>500gm</td>
                                                <th>Yellow</th>
                                                <td>2</td>
                                                <td>1000 &#8377;</td>
                                                <td> 	

                                                    <!-- <button class="btn btn-primary waves-effect" data-type="autoclose-timer">CLICK ME</button>			 -->
                                                    <div class="switch">
                                                        <label><input type="checkbox" id="newOrder" unchecked><span class="lever switch-col-red"></span>NOT COMPLETED</label>
                                                    </div>

                                                </td>
                                                <!-- <td class="justify-content-between text-center">
                                                        <button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button" data-toggle="modal" data-target="#editSocialMediaModal">Edit</button>
                                                        <button class="btn btn-sm btn-danger  btn-sm waves-effect" type="button">Delete</button>
                                                </td> -->	
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- #END# Input -->
            </div>
        </section>

        <!-- EDIT Social Media LINK -->
        <div class="modal fade" id="editSocialMediaModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Quick Link</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row clearfix">

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Title" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Link" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-4 col-lg-11 d-flex flex-row justify-content-between">
                                    <div class="form-group d-flex flex-column ">
                                        <label class="label-text">Upload Logo</label>
                                        <input 
                                            type="file"  
                                            accept=".png, .jpg, .jpeg"  
                                            enctype="multipart/form-data" 
                                            id="imageUploadFiles" 
                                            onchange="smallImageFiles(this);"

                                            >	
                                    </div>
                                    <!-- <img id="smallImage" src="#" alt="your image" /> -->
                                </div>			
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary waves-effect">Edit</button>
                        <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../../includes/footer-scripts.php'); ?>
    </body>
</html>
