<!-- body contents -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-view">
                            <div class="header">
                                <h4 class="title">List of security services</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="stats">
                                            <a href="#">All</a> |
                                            <a href="#">Pendings (0)</a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <form class="form-inline pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                          <div class="form-group">
                                            <label class="sr-only">Search</label>
                                            <input type="text" class="form-control" placeholder="Write here..." name="filter">
                                          </div>
                                            <button type="submit" name="search_hos" class="btn btn-default btn-fill">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>SL No</th>
                                        <th>Name of Hospital</th>
                                        <th>Category</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Service Time</th>
                                        <th>Locations</th>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        $i = 1;
                                        
                                        while($row = mysqli_fetch_assoc($records)){
                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['category'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['numbers'];?></td>
                                            <td><?php echo $row['service_time'];?></td>
                                            <td><?php echo $row['location'];?></td>
                                        </tr>
                                        
                                        <?php
                                        $i++;
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>