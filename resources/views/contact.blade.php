<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css">
  <style>

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4;
}

.contact-container {
  background-color: white;
  padding: 2em;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  max-width: 500px;
  width: 100%;
  text-align: center;
  margin-bottom: auto;
}

.contact-container h2 {
  margin-bottom: 1em;
  color: #4CAF50;
}

.contact-container label {
  display: block;
  margin: 0.5em 0 0.2em;
  text-align: left;
}

.contact-container input,
.contact-container textarea {
  width: 100%;
  padding: 0.8em;
  margin-bottom: 1em;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.contact-container button {
  width: 100%;
  padding: 0.8em;
  background-color: #4CAF50;
  border: none;
  border-radius: 4px;
  color: white;
  font-size: 1em;
  cursor: pointer;
}

.contact-container button:hover {
  background-color: #45a049;
}

footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 1em 0;
  width: 100%;
  position: relative;
  bottom: 0;
}

footer p {
  margin: 0.5em 0;
}

footer a {
  color: #4CAF50;
  text-decoration: none;
}

footer a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>
  <div class="contact-container">

    <h2>Contact Us</h2>
    <form>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" required></textarea>
      
      <button type="submit">Send Message</button>
    </form>
  </div>
  <footer>
    <p>&copy; 2024 My Website. All Rights Reserved</p>
    <p>
      Follow us:
      <a href="#">Facebook</a> |
      <a href="#">Twitter</a> |
      <a href="#">Instagram</a>
    </p>
  </footer>
</body>
</html>
