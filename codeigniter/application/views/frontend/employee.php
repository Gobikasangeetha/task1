
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Fetch the data from the database</h5>
                        <a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-right">Add Employee</a>
                    </div>
                    <div class="card-body">
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Email id</th>
                            <th>Edit</th>
                            <th>Delete</th>
                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($employee as $row ) : ?>
                            <tr>
                                 <td><?php echo $row ->id; ?></td>
                                <td><?php echo $row ->first_name; ?></td>
                                <td><?php echo $row ->last_name; ?></td>
                                <td><?php echo $row ->phone; ?></td>
                                <td><?php echo $row ->email; ?></td>
                                <td>
                                    <a href="<?php echo base_url('employee/edit/'.$row -> id) ?>" class="btn btn-success btm-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('employee/delete/'.$row -> id); ?>" class="btn btn-warning btm-sm">Delete</a>
                                </td>
                                                      
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    