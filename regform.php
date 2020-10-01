
    		<div class="w3-col l12 s12">
	<h3>Fill below fields to complete registration</h3><br>
	   <?php
		   echo form_open('home/regis');
		   // echo validation_errors();
		    if (isset($success))
		    echo '<p>'.$success.'</p>';
	    ?>
	<div class="w3-half">
	<label class="w3-left w3-margin-left">Enter first name</label>
	<input type="text" id="fname" name="fname" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('fname'); ?></b></span>
    </div>
	

    
	<div class="w3-half w3-padding">
	<label class="w3-left">Enter last name</label>
	<input type="text" id="lname" name="lname" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('lname'); ?></b></span>
    </div>
</div>
<div class="w3-col l12 s12">
	<div class="w3-half">
	<label class="w3-left w3-margin-left">Enter birth date</label>
	<input type="date" id="bdate" name="bdate" max="2014-01-01" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('bdate'); ?></b></span>
    </div>
	

	
	<div class="w3-half w3-padding">
	<label class="w3-left">Enter your gender</label>
	<input type="radio" id="gender" name="gender" value="Male">Male
	<input type="radio" id="gender" name="gender" value="Female">Female
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('gender'); ?></b></span>
</div>
</div>
<div class="w3-col l12 s12">
	<div class="w3-half">
	<label class="w3-left w3-margin-left">Enter phone number</label>
	<input type="text" id="phone" name="phone" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('phone'); ?></b></span>
    </div>

    
	<div class="w3-half w3-padding">
	<label class="w3-left">Enter email address</label>
	<input type="email" id="email" name="email" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('email'); ?></b></span>
    </div>
</div>
<div class="w3-col l12 s12">
	<div class="w3-half">
	<label class="w3-left w3-margin-left">Enter origin place</label>
	<input type="text" id="oplace" name="oplace" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('oplace'); ?></b></span>
    </div>

	
	<div class="w3-half w3-padding">
	<label class="w3-left">Enter living place</label>
	<input type="text" id="lplace" name="lplace" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('lplace'); ?></b></span>
    </div>
</div>
<div class="w3-col l12 s12">
	<div class="w3-half">
	<label class="w3-left w3-margin-left">Enter password</label>
	<input type="password" id="pass1" name="pass1" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('pass1'); ?></b></span>
    </div>

    
	<div class="w3-half w3-padding">
	<label class="w3-left">Confirm password</label>
	<input type="password" id="pass2" name="pass2" class="w3-right w3-margin-right">
	<span class="w3-small w3-text-pink"><br><b><?php echo form_error('pass2'); ?></b></span>
    </div>
</div>
<div class="w3-col l12 s12">
	<div class="w3-center">
		<button type="submit" class="w3-button w3-green w3-round-large">Register</button>
    </div>
		<?php 
		echo form_close(); 
		?><br>
</div>
<p>If already you have an account <a href="<?php echo base_url(); ?>home/login" class="w3-text-white">Login here.</a></p>

    	
    	