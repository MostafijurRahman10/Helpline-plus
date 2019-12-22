        <!-- body contents -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- Post form -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Quick Post</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Post Category</label>
                                            <select class="form-control" name="category" required="">
                                                <option value="" selected disabled>Choose one</option>
                                                <option value="Blood Request">Blood Request</option>
                                                <option value="Medical Emergency">Medical Emergency</option>
                                                <option value="Security Emergency">Security Emergency</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Post Description</label>
                                                <textarea rows="5" class="form-control" placeholder="Write your post description" name="pdetails"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="addPost">Post</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- At a Glance -->
                    <div class="col-md-6">
                        <div class="card card-glance">
                            <div class="header">
                                <h4 class="title">At a Glance</h4>
                            </div>

                            <div class="content">
                                <div class="row">
                                    <div class="table">
                                        
                                        <table class="table borderless">
                                            <tbody>
                                                
                                                <tr>
                                                    <td><i class="pe-7s-note2"></i></td>
                                                    <td><a href="#">30 Posts</a></td>
                                                </tr>

                                                <tr>
                                                    <td><i class="pe-7s-drop"></i></td>
                                                    <td><a href="#">5 Blood Requests</a></td>
                                                </tr>

                                                <tr>
                                                    <td><i class="pe-7s-bandaid"></i></td>
                                                    <td><a href="#">8 Medical Emergency</a></td>
                                                </tr>

                                                <tr>
                                                    <td><i class="pe-7s-shield"></i></td>
                                                    <td><a href="#">4 Security Emergency</a></td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row">
                    <!-- show post & comments -->
                    <?php
                    
                    while($row = mysqli_fetch_assoc($allPosts)){
                    
                    ?>
                        
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content table-comments">
                                <p class="category"><b><?php echo $row['category'];?></b> From <a href="#"><?php echo $db->getNameViaId($row['uid']);?></a></p>
                                <p class="category">Created in <b><?php echo $row['create_date'];?></b></p>
                                <div class="table-full-width">
                                    <hr/><pre class="post_content"><?php echo $row['post_details'];?></pre>
                                </div>
                            </div>

                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea rows="3" class="form-control" placeholder="Write your comments here"></textarea>
                                            </div>

                                             <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="clearfix"></div>
                               </form>
                            </div>

                            <div class="content table-comments">
                                <p class="category">Comments</p>
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/img/default-avatar.png" />
                                                </td>
                                                <td>From <a href="#">User</a><br/>Trying to manage as soon as possible</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" title="Edit" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <a href="#">All Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <?php
                    }
                    ?>
                    
                </div>
                
                
            </div>
        </div>

       