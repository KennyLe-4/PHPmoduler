<?php
/*In this lesson, we’ve learned some basic tools to validate HTML forms on the back-end using PHP. We learned how to send meaningful feedback to our users when their inputs are invalid. But what should we do if the user has submitted a valid form?

So far, we’ve been sending the users back to the same form whether there were errors in their submission or not. We’ve indicated the form was successfully submitted by conditionally displaying a message, but this isn’t always a great user experience. Think of what happens when you log in to your email. Usually, once a form has been submitted successfully, the user is rerouted to an entirely different page.

We can use the PHP header() function to perform redirects. We call the header() function on a string that begins with "Location: ", followed by the URL we want to redirect the user to. For example: "Location: https://www.best-puppy-pix.com/". After invoking the header() function we’ll want to use the language construct exit to terminate the current script.

    To work properly, the header() function needs to be run before anything is output by the script—this includes HTML. So we’ll include it in our PHP script before our file outputs any HTML:*/
$validation_error = "";
$username = "";
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $username = $_POST["username"];
   $password  = $_POST["password"];
   if (isset($users[$username]) && $users[$username] === $password){
// Add your code here:
header ("Location: success.html");
exit;

     
     
   } else {
     $validation_error = "* Incorrect username or password.";
   }
 }

?>
  
<h3>Welcome back!</h3>
<form method="post" action="">
Username:<input type="text" name="username" value="<?php echo $username;?>">
<br>
Password:<input type="text" name="password" value="">
<br>
<span class="error"><?= $validation_error;?></span>
<br>
<input type="submit" value="Log in">
</form>
  
  