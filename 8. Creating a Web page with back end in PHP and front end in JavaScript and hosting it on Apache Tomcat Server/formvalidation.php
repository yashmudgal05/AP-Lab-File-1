<?php

if(isset($_POST['submit']))
{$usrnm=$_POST['username'];
$pss=$_POST['password'];
	if((strlen($usrnm)<=5) or (strlen($pss)<=8) )
  {
    echo "Username must be 5 characters long and Password must be 8 characters long";
  }
}
?>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" href="form.css">
<script type="text/javascript" src="form.js">
</script>
</head>
<body>
  <div class="bc">
    <table width="100%">
      <th class="bc"><h1>Registration Form</h1></th>
    </table>
      </div>
<form method="POST" action=" " name="regform" onsubmit="return validate()">
<fieldset>
<div class="abc">
  <table width="100%">
<th><label width="50%">Username:</label>
<input type="text" placeholder="Enter your username here" name="username" ></th>
<th><label>Password:</label>
<input type="password" placeholder="Enter your password here"  name="password" id="a1"></th>
  </table>
  <br>
</div>
</fieldset>
<hr>
<fieldset>
  <legend><b>Personal details<b></legend>
  <table width="100%">
<th><label>First Name:</label>
<input type="text"  placeholder="Type your first name here" id="a2"></th>
<th><label>Last Name:</label>
  <input type="text" placeholder="Type your last name here" >
  </th>
  </table>
  <label class="abcd">Gender</label>
  <input type="radio" name="ab" value="male">Male
  <input type="radio" name="ab"  value="female">Female
  <input type="radio" name="ab"  value="others">Others
  <br>
  </fieldset>
  <hr>
  <fieldset>
    <legend><b>Contact Info</b></legend>
    <table width="100%">
      <th><label>E-mail:</label>
        <input type="email" id="a3"  placeholder="Enter your e-mail here"></th>
      <th><label>Mobile No:</label>
      <input type="text" id="a4"  placeholder="Enter your mobile number"></th>
    </table>
     <br>
    <fieldset>
      <legend><b>Address</b></legend>
      <table width="100%">
      <th><label>Permanent Address:</label>
      <br>
<textarea name="name" rows="5" cols="40" id="a5"  placeholder="Type your permanent address here"></textarea></th>
      <th><label>Correspondence Address:</label>
      <br>
      <textarea name="name" rows="5" cols="40" placeholder="Type your correspondence address here"></textarea></th>
      </table>
      </fieldset>
</fieldset>
<table width="100%">
<th><input type="submit" value="Submit" name="submit"></th>
<th><input type="reset"  value="Clear"></th>
</table>
</form>
</body>
</html>