<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Login Page</title>
  <style type="text/css">
    div.container {
      border: 10px solid #B3B6B7;
      padding: 10px;
      width: 400px;
      margin:30px auto;
      text-align:center;  
    }
    label {
      text-align: left;
    }
    .login { 
      background:#76D7C4;
      text-align: center;
      margin: auto;
    }
    .login div {
      border:2px solid #76D7C4;
      padding:3px;
    }
    .register { 
      background:#76D7C4; 
    }
    .register div {
      border:2px solid #76D7C4;
      padding:3px;
    }
    input[type=text], input[type=number] {
      padding: 6px 15px;
      margin: 8px 0;
      border: 1px solid #ccc;
    }
    button {
      background-color: #FDFEFE;
      color: #17202A;
      font-family: Helvetica;
      padding: 6px 15px;
      margin: 8px 0;
      width: 50%;
    }
  </style>
</head>

<body>
  <div class='container' align="center">

    <form class="register" method="post" action="db.php">


      <div>
        <label><b>First Name</b></label><br>
        <input type="text" name="reg_fname" placeholder="Enter First name" required>
      </div>

        <div>
        <label><b>Last Name</b></label>
        <br> 
        <input type="text" name="reg_lname" placeholder="Enter Last name" required>
      </div>
              
        <div>
        <label><b>Email</b></label><br>
        <input type="Email" name="reg_email" placeholder="Enter Email" required>
      </div>
      <div>


        <div>
        <label><b>Password</b></label><br>
        <input type="text" name="reg_pass" placeholder="Enter Password" required>
      </div>
      <div>
        <label><b>Phone</b></label><br>
        <input type="tel" name="reg_phone" placeholder="Enter Phone Number" required>
      </div>
      

        <div>
        <label><b>Birthday</b></label><br>
        <input type="date" name="reg_bday" placeholder="Enter Birthday" required>
      </div>
      

      <div>

<br>


<div>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</div>

<br>

       

    
      <div>

        <input type="submit" value= "Sign up" />
      </div>
  </form>


</div>
</body>

</html>
