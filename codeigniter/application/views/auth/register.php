<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">

        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Register</h5>
                </div>
            <div class="card-body">

        <form action="<?php echo base_url('register')?>" method="POST">
    
         <div class="row">
                   <div class="col-md-6">
          
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" value="<?php echo set_value('first_name');?>" class="form-control">
                              <small><?php echo form_error('first_name'); ?></small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" value="<?php echo set_value('last_name');?>"class="form-control">
                             <small><?php echo form_error('last_name'); ?></small>
                        </div>
                    </div>

                     <!-- <div class="col-md-6">

                        <div class="form-group">
                            <label for="">Phn number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div> -->

                     <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Email id</label>
                            <input type="email" name="email" value="<?php echo set_value('email');?>"class="form-control">
                            <small><?php echo form_error('email'); ?></small>

                        </div>
                    </div>

                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" value="<?php echo set_value('password');?>" class="form-control">
                             <small><?php echo form_error('password'); ?></small>
                        </div>
                    </div>

                     <div class="col-md-12">

                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirm_password" value="<?php echo set_value('confirm_password');?>"class="form-control">
                            <small><?php echo form_error('confirm_password'); ?></small>

                        </div>
                    </div>

                     <div class="col-md-12">

                          <div class="form-group">
                            <button type="submit" class="btn btn-primary" >Register now</button>
                         </div>
                    </div>


                 </div>

                 </form>
                
                </div>
            </div>
        </div>
        </div>
    </div>

    
</div>


