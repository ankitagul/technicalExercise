<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Add a Volunteer</title>
 </head>
 <body>
   <h1>Enter Details for a Volunteer</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifyvolunteer'); ?>
     <label for="firstname">First Name:</label>
     <input type="text" size="50" id="firstname" name="firstname"/>
     <br/>
	 <label for="lastname">Last Name:</label>
     <input type="text" size="50" id="lastname" name="lastname"/>
     <br/>
     <label for="position">Position:</label>
     <input type="text" size="50" id="position" name="position"/>
     <br/>
	 <label for="organization">Organization:</label>
     <input type="text" size="50" id="organization" name="organization"/>
     <br/>
	 <label for="email">Email:</label>
     <input type="text" size="50" id="email" name="email"/>
     <br/>
	 <label for="phone">Phone:</label>
     <input type="text" size="12" id="phone" name="phone"/>
     <br/>
	 <label for="street">Street:</label>
     <input type="text" size="20" id="street" name="street"/>
     <br/>
	 <label for="city">City:</label>
     <input type="text" size="20" id="city" name="city"/>
     <br/>
	 <label for="province">Province:</label>
     <input type="text" size="20" id="province" name="province"/>
     <br/>
	 <label for="country">Country:</label>
     <input type="text" size="15" id="country" name="country"/>
     <br/>
     <input type="submit" value="Add this Volunteer"/>
   </form>
 </body>
</html>