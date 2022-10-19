   <!--  <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content"> -->
              
            <?php echo @$_SESSION['insertMsg'];unset($_SESSION['insertMsg']); ?>
            <?php echo @$_SESSION['upMsg'];unset($_SESSION['upMsg']); ?>
            <?php echo @$_SESSION['delMsg'];unset($_SESSION['delMsg']); ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <div class="col-sm-8 col-9 text-right m-b-20 pull-right">
                                    <a href="index.php?page=blog" class="btn btn-primary btn-rounded float-right">   
                                        <i class="fa fa-plus"></i> 
                                        Add Blog
                                    </a>
                                </div>
                                <h4 class="card-title text-bold">Blog List</h4>

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Blog Name</th>
                                            <th>Profile</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       $i = 1;
                                       $DataBlog = "SELECT * FROM `blog` WHERE `status` = 'inactive' ";
                                       $QryBlog = mysqli_query($con,$DataBlog);
                                       while($RowBlog = mysqli_fetch_object($QryBlog))
                                       {
                                       ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $RowBlog->blogname; ?></td>
                                            <td>
                                                <img height=50 width=50 src="<?php echo "upload/blog/".$RowBlog->profile; ?>">
                                            </td>
                                            <td><?php echo $RowBlog->category; ?></td>
                                            <td><?php echo $RowBlog->description; ?></td>
                                            <td>
                                                <a href="index.php?page=blog_action&action=unblock&b_id=<?php echo $RowBlog->b_id; ?>">
                                                    <span class="custom-badge status-red"><?php echo ucfirst($RowBlog->status); ?>
                                                    </span>
                                                </a>
                                            </td>
                                            <td>
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(62px, 27px, 0px);">
                                                    <a class="dropdown-item" href="index.php?page=blog&b_id=<?php echo $RowBlog->b_id; ?>"><i class="fa fa-pencil m-r-5"></i> Edit </a>

                                                    <!-- <a class="dropdown-item" href="index.php?page=blog_action&action=delete&b_id=<?php echo $RowBlog->b_id; ?>" onclick="return confirm('Are you Sure Want To Delete..???')" ><i class="fa fa-trash-o m-r-5"></i> Delete </a>

                                                </div> -->

                                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#delete_blog<?php echo $RowBlog->b_id; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

                                                </div>

            <div id="delete_blog<?php echo $RowBlog->b_id; ?>" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                            <h3>Are You Sure Want To Delete This Blog?</h3>
                            <div class="m-t-20"> <a href="" class="btn btn-white" data-dismiss="modal">Close</a>
                            <a href="index.php?page=blog_action&action=delete&b_id=<?php echo $RowBlog->b_id; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

                                            </div>
                                            </td>
                                        </tr>
                                    <?php $i++; } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->