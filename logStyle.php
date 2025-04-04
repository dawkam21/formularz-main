<?php

/*** set the content type header ***/
/*** Without this header, it wont work ***/
  header("Content-type: text/css");


  $font_family = 'Arial, Helvetica, sans-serif';
  $font_size = '0.7em';
  $border = '1px solid';
?>


* {
  font-family: "Poppins", sans-serif;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
  
body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 10px;
  font-size: 14px;
  background-image: url(img/background_img.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  background-size: cover;
}

#form {
  display: flex;
  padding: 30px;
  border-radius: 10px;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 1);
  flex-direction: column;
  background: transparent;
  color: white;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #fff;
}

.txt {
  display: flex;
  justify-content: center;
  border-bottom: 2px solid #fff;
  padding: 25px;
  align-items: center;
  margin: 0 150px;
}

.remember-forgot {
  display: flex;
  justify-content: center;
  padding: 10px;
}

.remember-forgot a {
  color: crimson;
}

.txtBtn {
  display: flex;
  justify-content: center;
  padding: 10px;
}

.register-link {
  display: flex;
  justify-content: center;
}

.register-link a {
  color: crimson;
}

main h1 {
  padding: 10px;
  font-size: 36px;
}

.btnTxt {
  width: 50%;
  height: 40px;
  border-radius: 40px;
  background: #fff;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 1em;
  font-weight: 600px;
  color: crimson;
  background: #fbd0d9;
}

.btnTxt:hover {
  color: #fff;
  background: crimson;
}

input[type="text"], input[type="password"] {
  width: 300px;
  height: 40px;
  margin: 0 10px;
  padding: 10px;
}

.admin-user {
  display: flex;
}

.admin-user a {
  color: white;
  text-decoration: underline;
}

.admin {
  margin: 40px;
}

.user {
  margin: 40px;
}

.change {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.change a {
  color: crimson;
}

.btnTxt a {
  color: crimson;
  text-decoration: none;
}