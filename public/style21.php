<?php

/*** set the content type header ***/
/*** Without this header, it wont work ***/
  header("Content-type: text/css");


  $font_family = 'Arial, Helvetica, sans-serif';
  $font_size = '0.7em';
  $border = '1px solid';
?>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(to bottom right, #f0f4f8, #d9e2ec);
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  min-height: 100vh;
  padding: 40px 20px;
  border-radius: 10px;
  border: 1px solid #ccc;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

header {
  width: 100%;
  text-align: center;
  margin-bottom: 30px;
}

header h1 {
  font-size: 28px;
  color: #2c3e50;
}

.container {
  background-color: lightblue;
  padding: 40px 30px;
  max-width: 900px;
  width: 100%;
  border-radius: 16px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  max-height: 90vh;
  overflow-y: auto;
}

.form {
  width: 100%;
}

#forms {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
}

#forms textarea,
#forms .details:has(input[type="checkbox"]),
#forms .details:has(input[type="radio"]),
#forms .buttons {
  grid-column: 1 / -1;
}

.details {
  width: 100%;
  display: flex;
  flex-direction: column;
}

.form h1 a {
  text-decoration: none;
  color: #2c3e50;
  font-size: 22px;
  display: block;
  margin-bottom: 30px;
  text-align: center;
}

.details label {
  font-weight: bold;
  margin-bottom: 5px;
  color: #34495e;
  align-items: center;
}

.details i {
  margin-right: 6px;
  color: #3498db;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="date"],
input[type="number"],
textarea {
  padding: 10px 14px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

input:focus,
textarea:focus {
  border-color: #3498db;
  outline: none;  
}

textarea {
  resize: vertical;
  min-height: 80px;
}

input[type="radio"],
input[type="checkbox"] {
  margin-right: 10px;
  transform: scale(1.1);
}

.details1 {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

#forms .details1 {
  grid-column: 1 / -1;
  margin-bottom: 20px;
}

.buttons {
  padding: 12px;
  border: none;
  border-radius: 8px;
  background-color: #2ecc71;
  color: white;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s ease;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  width: 100%;
  margin-top: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.buttons:hover {
  background-color: #27ae60;
}

#wycz {
  background-color: #e74c3c;
}

#wycz:hover {
  background-color: #c0392b;
}

#terms {
  color: #2980b9;
  text-decoration: none;
}

#terms:hover {
  text-decoration: underline;
}

.logout {
  margin-top: 10px;
  text-align: center;
}

.logout a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #f39c12;
  border-radius: 8px;
  text-decoration: none;
  color: white;
  font-weight: bold;
}

.logout a:hover {
  background-color: #d35400;
}

@media (max-width: 600px) {
  .container {
    padding: 25px 20px;
  }

  header h1 {
    font-size: 22px;
  }

  .form h1 a {
    font-size: 20px;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  input[type="date"],
  input[type="number"],
  textarea {
    font-size: 15px;
  }
}

@media (max-width: 400px) {
  .container {
    padding: 20px 10px;
  }

  input,
  textarea {
    font-size: 15px;
    padding: 8px 10px;
  }
}

@media (max-width: 600px) {
  #forms {
    grid-template-columns: 1fr;
  }
}