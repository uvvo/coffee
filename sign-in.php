<!DOCTYPE html>  

<style>     
Body {  
  font-family: Calibri, Helvetica, sans-serif;
  background-image: url("images/gags2.jpg");
  background-color: black;
  background-position: center ;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: 1500px 1000px ;





}  
  
  </style> 
<form action="action_page.php">
  <div class="container">
     <center> <h3 style="color:black ;   font-family: Lucida Handwriting; font-size:60px">La Cafetiere~</h3> </center> 

    <center><h1>Sign Up</h1></center>
    <center><p>Please fill in this form to create an account.</p></center>

    <center><label for="email"><b>Email</b></label> </center>
    <center><input type="text" placeholder="Enter Email" name="email" required></center>

    <center><label for="psw"><b>Password</b></label></center>
    <center><input type="password" placeholder="Enter Password" name="psw" required></center>

    <center><label for="psw-repeat"><b>Repeat Password</b></label></center>
    <center><input type="password" placeholder="Repeat Password" name="psw-repeat" required></center>

    <center><label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label></center>

    <div class="clearfix">
      <center><a href="log1.php" href="#" type="button" class="cancelbtn">Cancel</a></center>
      <center><button type="submit" class="signupbtn">Sign Up</button></center>
    </div>
  </div>
</form>