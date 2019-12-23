<!-- body contents -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $user_details['fname']?>" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $user_details['lname']?>" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" disabled placeholder="Email Address" name="email" value="<?php echo $user_details['email']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile Numbers</label>
                                                <input type="text" class="form-control" placeholder="Mobile Numbers" name="numbers" value="<?php echo $user_details['numbers']?>" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <input type="text" class="form-control" placeholder="Blood Group" name="blood_group" value="<?php echo $user_details['blood_group']?>" required="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Donation Date</label>
                                                <input type="text" class="form-control" placeholder="dd/mm/yy" name="donate_date" value="<?php echo $user_details['last_donate_date']?>" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>House no</label>
                                                <input type="text" class="form-control" placeholder="House no" name="house" value="<?php echo $user_details['house_no']?>" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Road no</label>
                                                <input type="text" class="form-control" placeholder="Road no" name="road" value="<?php echo $user_details['road_no']?>" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Area Name</label>
                                                <input type="text" class="form-control" placeholder="Area Name" name="area" value="<?php echo $user_details['area_name']?>" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $user_details['city']?>" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" name="country" value="<?php echo $user_details['country']?>" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control" placeholder="ZIP Code" name="zip" value="<?php echo $user_details['zip']?>" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="update_profile">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/user cover.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <img class="avatar border-gray" src="assets/img/faces/<?php echo $user_details['img_url']?>" alt="..."/>
                                    <h4 class="title"><?php echo $user_details['fname'] . " " . $user_details['lname']?><br/>
                                        <small><?php echo $user_details['email']?></small>
                                    </h4>
                                </div>
                                <p class="description text-center"><?php echo $user_details['blood_group']?> | <?php echo $user_details['numbers']?></p>
                            </div>
                            <hr>
                            <div class="text-center">
                                Brief profile info
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>