<div class="row">
	<div class="inner_nav_back">
    	<div class="width">
    		<nav class="navbar navbar-default inner_navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Funeral of <strong>Gina Jones</strong></a>
                </div>
            
               
              </div>
            </nav>
    	</div>
    </div>

	<div class="width">
    	<div class="inner_mid mar_tp_230">
        	<h3><strong>Forgot Password</strong></h3>
        	<p>Forget your password? No worries! Input your email below and we'll send you a new one.</p>
            
            <div class="clearfix"></div>            
            
            <?php echo form_open('user/forgot_password', array('class'=>'register_form', 'role'=> 'form')); ?>
                <div class="form-group">
					<?php $this->load->view('elements/flash_message');?>
                    <label>Email</label>
                	<input type="email" name="emailId" class="form-control" placeholder="email@emailaddress.com">
                    <?php echo form_error('emailId'); ?>
				</div>
                
                <button type="submit" class="btn forget_btn">Request Password Reset</button>
                
                <a class="cencle_btn" onclick = "goBack();">Cancel</a>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
function goBack() {
    window.history.back()
}
</script>