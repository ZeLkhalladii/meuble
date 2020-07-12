<?php

session_start();

$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$id = $_GET['user_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montaga|Noto+Sans&display=swap");

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


body {
  font-size: 16px;
  background-color: #f7f7f5;
  font-family: "Noto Sans", sans-serif;
}

h1, h2, h3 {
  font-family: "Montaga", serif;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}

.card {
  border-radius: 4px;
  background-color: #fff;
  max-width: 68em;
  width: calc(100% - 4em);
  height: 40em;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 32px 24px 0 rgba(0, 0, 0, 0.064);
}
.card-cover, .card-content {
  width: 50%;
  height: 100%;
}
.card-cover {
  overflow: hidden;
  border-radius: 4px 0 0 4px;
}
.card-cover img {
  object-fit: cover;
  width: 100%;
  height: 100%;
}
.card-content {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  padding: 4em 1em;
}
.card__tag {
  font-size: 2.64em;
  text-transform: uppercase;
  letter-spacing: 2px;
  opacity: 0.64;
}
.card__title {
  font-size: 1em;
  line-height: 1.32;
  font-family: 'Poppins', sans-serif;
}
.card__subtitle {
  opacity: 0.64;
  line-height: 1;
}
.card__btn {
  display: inline-flex;
  align-items: center;
  border-radius: 2px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.875em;
  background-color: #f1f1f1;
  transition: background-color 0.32s ease 0s;
  border: 0;
  outline: none;
  padding: 1.5em 2.4em;
  color: #393939;
  margin-top: auto;
  cursor: pointer;
}
.card__btn span {
  width: 20px;
  height: 1px;
  background-color: #393939;
  margin-left: 0.5em;
  position: relative;
}
.card__btn span:before, .card__btn span:after {
  content: "";
  position: absolute;
  right: 0;
  top: 0;
  width: 40%;
  height: 1px;
  background-color: inherit;
}
.card__btn span:before {
  transform: rotate(45deg) translate(-1px, -3px);
}
.card__btn span:after {
  transform: rotate(-45deg) translate(-1px, 3px);
}
.card__btn:hover {
  background-color: #e9e9e9;
}
.card__label {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -2.5em;
  right: -2.5em;
  width: 5em;
  height: 5em;
  border-radius: 50%;
  background-color: #ff6476;
  color: #fff;
  font-size: 1em;
  transform: rotate(12deg);
}
@media screen and (max-width: 768px) {
  .card {
    flex-direction: column;
  }
  .card-cover, .card-content {
    width: 100%;
  }
  .card__label {
    right: 2em;
    top: 2em;
  }
  .card__btn {
    margin-top: 2em;
  }
}

.form-inline{
    margin: 8px;
        border: 1px solid green;
        border-radius: 6px;
        width: 78px;
        padding: 10px;
    
}
nav{
    background: white;
    display: flex;
    justify-content: space-between;
    padding: 5px;
}
    </style>
</head>
<body>

    <nav class="navbar">
        <a class="navbar-brand" href="#">
          <img src="https://www.uplabs.com/logos/uplabs/default--color.svg" width="70" height="50" alt="" loading="lazy">
        </a>
        <form class="form-inline my-2 my-lg-0" >
            <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</a>
            <a href="profil.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">profil</a>


        </form>
      </nav>

    
      <div class="container" style="margin: 30px;">
        <div class="card">
            <div class="card-cover"><img src="https://images.unsplash.com/photo-1468165196271-4e91eae54eb2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80" alt="cover" /></div>
            <div class="card-content">
            <div class="card__tag"><?php
                    $task = "SELECT  title FROM card WHERE card_id=$id LIMIT 1";
                    $name_task = mysqli_query($conn, $task);
                    while ($row = mysqli_fetch_array($name_task)) {
                    echo $row['title'];
                    }
                    ?>
                </div>
                <p class="card__title"><?php
                    $task = "SELECT  description FROM card WHERE card_id=$id LIMIT 1";
                    $name_task = mysqli_query($conn, $task);
                    while ($row = mysqli_fetch_array($name_task)) {
                    echo $row['description'];
                    }
                    ?>
                </p>
                <a href='' class="card__btn" type="button">back to home
                    <span></span>
                </a>
            </div>
        </div>
</div>
</body>
</html>