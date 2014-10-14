<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Register User</title>
 </head>
 <body>
   <h1>Register</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifyregister'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
	 <label for="email">Email:</label>
     <input type="text" size="50" id="email" name="email"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
     <input type="submit" value="Register"/>
   </form>
 </body>
</html>