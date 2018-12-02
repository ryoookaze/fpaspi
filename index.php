<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <style>

    body {
      background-color: #EAEAEA;
      font-family ; "SF Pro Display";
    }

    .login {
      text-align:center;
    }

    input[type=text], input[type=password] {
      width: 30%;
      padding: 15px 25px;
      margin: auto;
      display: block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 10px;
      
    }

    .login-form {
      margin: 0 auto;
    }

    button{
      font-family: "SF Pro Display";
      background-color: black;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 10%;
      margin: auto;
      display: block;
      top: 30px;
    }

    </style>
  </head>
  <body>
    <p id="Title" style="font-size: 20px; margin-left: 20px;">SICLICK</p>
    <h2 id="Login" class="login">Admin Login</h2>

    <div class="login-form" id="login-form">
        <input type="text" name="Username" placeholder="Username" required >
        <input type="password" name="Password" placeholder="Password" required >
    </div>
    <button type="Submit" onClick="window.location.href='dashboard.php'">Login</button>

  </body>
</html>