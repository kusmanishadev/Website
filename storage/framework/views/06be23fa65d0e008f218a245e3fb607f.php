<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
  <style>
 
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4;
}

.login-container {
  background-color: white;
  padding: 2em;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 100%;
  text-align: center;
}

.login-container h2 {
  margin-bottom: 1em;
  color: #4CAF50;
}

.login-container label {
  display: block;
  margin: 0.5em 0 0.2em;
  text-align: left;
}

.login-container input {
  width: 100%;
  padding: 0.8em;
  margin-bottom: 1em;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.login-container button {
  width: 100%;
  padding: 0.8em;
  background-color: #4CAF50;
  border: none;
  border-radius: 4px;
  color: white;
  font-size: 1em;
  cursor: pointer;
}

.login-container button:hover {
  background-color: #45a049;
}

.login-container p {
  margin-top: 1em;
  color: #555;
}

.login-container p a {
  color: #4CAF50;
  text-decoration: none;
}

.login-container p a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit">Login</button>
      <p>Don't have an account? <a href="signup.html">Sign up</a></p>
    </form>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_app\barbar\resources\views/login.blade.php ENDPATH**/ ?>