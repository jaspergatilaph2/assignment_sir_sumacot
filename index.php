<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#009678">
  <title>Coffee Shop</title>
  <link rel="stylesheet" href="/src/style.css">
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="images/coffee512.png">
</head>
<body>
  <h1>Welcome to my coffee shop</h1>
<h2>Login Form</h2>

<form action="" method="">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required autocomplete="username">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="current-password" required autocomplete="current-password">
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<script src="src/index.js"></script>
</body>
</html>