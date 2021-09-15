<?php

  session_start();
  // if(!isset($_SESSION['email'])){
  //   header("Location: ../index.php");
  // }
  // $email=$_SESSION['email'];
  

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Post</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("../image/wall.jpg") no-repeat center !important;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding-right: 100px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      color:black;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      
      <center>
      <form action="#">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Post here </h2>
          
        </div>
        <div class="info">
          <select name="location">
            <option value="course-type" selected>Location*</option>
            <option value="short-courses">Dhaka</option>
            <option value="featured-courses">Chittagong</option>
            <option value="undergraduate">Comilla</option>
            <option value="diploma">Rajshahi</option>
            <option value="certificate">Barishal</option>
            <option value="masters-degree">Khulna</option>
            <option value="postgraduate">Sylhet</option>
          </select>
          <select name="destination">
            <option value="course-type" selected>Destination*</option>
            <option value="short-courses">Dhaka</option>
            <option value="featured-courses">Chittagong</option>
            <option value="undergraduate">Comilla</option>
            <option value="diploma">Rajshahi</option>
            <option value="certificate">Barishal</option>
            <option value="masters-degree">Khulna</option>
            <option value="postgraduate">Sylhet</option>
          </select>
          <input type="tel" name="fare" placeholder="Fare">
          <input type="date" name="date" id="">

        </div>
        
        <button type="submit" href="#">Submit</button>
      </form>
      </center>

    </div>
  </body>
</html>