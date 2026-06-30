<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">

        <div class="col-md-5">

       

            <div class="card shadow">
                <div class="card-header">
                    <h5>Login Form</h5>
                </div>
            <div class="card-body">

        <form action="<?php echo base_url('login')?>" method="POST">
    
         <!-- <div class="row"> -->
                   <!-- <div class="col-md-6"> -->
          
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" name="email_address" value="<?php echo set_value('email_address');?>" class="form-control" placeholder="Enter a mail id">
                            <small><?php echo form_error('email_address'); ?></small>
                        </div>
                    

                    <!-- <div class="col-md-6"> -->
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" value="<?php echo set_value('password');?>"class="form-control"placeholder="Enter a password">
                             <small><?php echo form_error('password'); ?></small>
                        </div>
                  

                     <!-- <div class="col-md-6">

                        <div class="form-group">
                            <label for="">Phn number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div> -->

                     <!-- <div class="col-md-12"> -->
                        <!-- <div class="form-group">
                            <label for="">Email id</label>
                            <input type="email" name="email" value="<?php echo set_value('email');?>"class="form-control">
                            <small><?php echo form_error('email'); ?></small>

                        </div> -->
                   

                    <!-- <div class="col-md-12"> -->

                        <!-- <div class="form-group">
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
                    </div> -->

                     <!-- <div class="col-md-12"> -->
                          <hr>

                          <div class="form-group">
                            <button type="submit" class="btn btn-primary" >Login Now</button>
                         </div>
                   


                 

                 </form>
                
                </div>
            </div>
        </div>
        </div>
    </div>

    
</div>


