<?php

/*** set the content type header ***/
/*** Without this header, it wont work ***/
  header("Content-type: text/css");


  $font_family = '"Arial, Helvetica", sans-serif';
  $font_size = '0.7em';
  $border = '1px solid';
?>

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}

.container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
}

.container .content {
    text-align: center;
}

.container .content h3 {
    font-size: 30px;
    color: #333;
}

.container .content h3 span {
    background: crimson;
    color: #fff;
    border-radius: 10px;
    padding: 5px 10px;
}

.container .content h1 {
    font-size: 50px;
    color: #333;
}

.container .content .btn {
    display: inline-block;
    padding: 10px 30px;
    font-size: 20px;
    background: #333;
    color: #fff;
    margin: 10px 5px;
}

.container .content .btn:hover {
    background: crimson;
}

.form-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background: #eee;
}

.form-container form {
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    background: #fff;
    text-align: center;
    width: 500px;
}

.form-container form h3 {
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #333;
}

.form-container form input {
    width: 100%;
    padding: 10px 15px;
    font-size: 20px;
    margin: 8px 0;
    background: #eee;
    border-radius: 5px;
}

.form-container form .form-btn {
    background: #fbd0d9;
    color: crimson;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}

.form-container form .form-btn:hover {
    background: crimson;
    color: #fff;
}

.form-container form p {
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}

.form-container form p a {
    color: crimson;
    margin-left: 10px;
}

.form-container form .error-msg {
    margin: 10px 0;
    display: block;
    background: crimson;
    color: #fff;
    border-radius: 5px;
    font-size: 20px;
    padding: 7px;
}

body {
    background: #f4f6f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.adm-container {
    max-width: 400px;
    width: 100%;
    padding: 20px;
}

.card {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card h2 {
    margin-bottom: 20px;
    color: #333;
}

.buttons {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.btn {
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 8px;
    background-color: #2d89ef;
    color: white;
    font-weight: bold;
    transition: background 0.3s ease;
}

.btn:hover {
    background-color: #1b66c9;
}

.btn.logout {
    background-color: #e74c3c;
}

.btn.logout:hover {
    background-color: #c0392b;
}