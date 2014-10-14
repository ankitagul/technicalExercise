<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Edit Volunteer</title>
 </head>
 <body>
   <h1>Edit Details for the Volunteer</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifyvolunteer/edit'); ?>
     <label for="firstname">First Name:</label>
     <input type="text" size="50" id="firstname" name="firstname" value="<?php echo $volunteerData->firstname;?>"/>
     <br/>
	 <label for="lastname">Last Name:</label>
     <input type="text" size="50" id="lastname" name="lastname" value="<?php echo $volunteerData->lastname;?>"/>
     <br/>
     <label for="position">Position:</label>
     <input type="text" size="50" id="position" name="position" value="<?php echo $volunteerData->position;?>"/>
     <br/>
	 <label for="organization">Organization:</label>
     <input type="text" size="50" id="organization" name="organization" value="<?php echo $volunteerData->organization;?>"/>
     <br/>
	 <label for="email">Email:</label>
     <input type="text" size="50" id="email" name="email" value="<?php echo $volunteerData->email;?>"/>
     <br/>
	 <label for="phone">Phone:</label>
     <input type="text" size="12" id="phone" name="phone" value="<?php echo $volunteerData->phone;?>"/>
     <br/>
	 <label for="street">Street:</label>
     <input type="text" size="20" id="street" name="street" value="<?php echo $volunteerData->street;?>"/>
     <br/>
	 <label for="city">City:</label>
     <input type="text" size="20" id="city" name="city" value="<?php echo $volunteerData->city;?>"/>
     <br/>
	 <label for="province">Province:</label>
     <input type="text" size="20" id="province" name="province" value="<?php echo $volunteerData->province;?>"/>
     <br/>
	 <label for="country">Country:</label>
     <input type="text" size="15" id="country" name="country" value="<?php echo $volunteerData->country;?>"/>
     <br/>
     <input type="submit" value="Edit this Volunteer"/>
   </form>
 </body>
</html>