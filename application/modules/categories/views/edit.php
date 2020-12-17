<div class="container">
    <!-- start: PAGE HEADER -->
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li>
                    <i class="clip-home-3"></i>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li class="active">
                    Classes
                </li>
                <li class="search-box">

                </li>
            </ol>
            <div class="page-header">
                <h1>Class Management</h1>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i>
                    Add Class
                    <div class="panel-tools">

                    </div>
                </div>

                <div class="panel-body">
                    <form action="<?php echo base_url('admin/classes/edit/'.$user->id);?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Class Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Class Name" class="form-control" id="class_name" name="class_name" value="<?= set_value('class_name', $user->class_name); ?>">
                                    <?= form_error('class_name'); ?>
                                </div>
                            

                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <button class="btn btn-yellow btn-block" type="submit">
                                            Update Class <i class="fa fa-arrow-circle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                       