
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-image {
  /* The image used */
  background-image: url("Tea.jpg");
  
  /* Add the blur effect */
  /*filter: blur(5px);*/
  /*-webkit-filter: blur(5px);*/
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #654321;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "?";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "?";
}
.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}



div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
*{
box-sizing:border-box;
}
.topnav{
overflow:hidden;
background-color:#654321 ;
}
.topnav a{
float:center;
text-align:center;
text-decoration:none;
width: 30%;color: white;
  }
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.2); /* Black w/opacity/see-through */
  color: black;
  font-weight: bold;
  border: 1px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  width: 30%;
  padding: 15px;
  text-align: center;
  }
  .header {
  padding: 60px;
  text-align: center;
  background: #654321;
  color: white;
  font-size: 30px;
}

</style>
</head>
<body >
<div class="header">
  <h1>Hot Tea</h1>
  </div>

<div class="bg-image">

<div class="bg-text">
<div class="content">
<div class="container">
  <form action="DB.php" onsubmit="otp.php">
   

    <label for="acode">MOBILE NO</label>
    <input type="text" id="acode" name="acode" required>
  


    <div class="topnav">

<a href="la.php"><center>SEND OTP</center></a>
</div>
    

    <label for="psw">PASSWORD</label>
    <input type="password" id="pwd" name="pwd" >
    
    <input type="submit" value="LOGIN">

<div class="topnav">

 <a href="signup.php"><center>SIGN UP</center></a>
</div>
  </form>
</div>
</div>

</div>
</script>

</body>
</html>
