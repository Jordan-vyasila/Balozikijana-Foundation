<div class="w3-col l12 s12">
	<?php

		   echo form_open('home/login');
		   //echo validation_errors();
		   if (isset($success))
		   echo '<p>'.$success.'</p>';
	    ?>
	<h3>Fill below fields to complete Login your account</h3><br>
	<div class="w3-center">
	<label class="w3-margin">Enter phone number</label><br>
	<input type="text" id="phone" name="phone" class="">
	<span class="w3-small w3-text-pink"><b><?php echo form_error('phone'); ?></b></span><br>
     <p></p>
	<label class="w3-margin">Enter password</label><br>
	<input type="password" id="pass1" name="pass1" class="">
	<span class="w3-small w3-text-pink"><b><?php echo form_error('pass1'); ?></b></span><br>
    </div>
</div>
<div class="w3-col l12 s12">
	<div class="w3-center w3-margin">
		<input type="submit" name="login" value="Login" class="w3-button w3-green" />
    </div>
		<?php 
		echo form_close(); 
		?><br>
</div>
<p>If you have not registered an account <a href="<?php echo base_url(); ?>home/regis" class="w3-text-white">register here.</a></p>
