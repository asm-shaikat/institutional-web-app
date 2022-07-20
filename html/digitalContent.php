<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Digital Content</title>
    <style>
        .main>div{
            float: left;
        }
        .main-part{
            margin-left: 80px;
            margin-right: 290px;
            margin-top: 10px;            
        }
        .assist-part{
            
            background-color: greenyellow;
        }
        .part-1{
            display: flex;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .part-2{
            display: flex;
        }
    </style>
  </head>
  <body>
  <?php require "model.php" ?>
    <div class="main">
<div class="col-md-7 main-part">
        <div class="part-1">
        <a href="nine-ten.php" style="text-decoration: none;color:white">
        <div class="card" style="width: 18rem; margin-right: 8px; background-color: rgb(0, 204, 255);">
            <div class="card-body">
            <h5 class="card-title">Class 9-10</h5>
            <h6 class="card-subtitle mb-2 text-muted" >Click to collect books</h6>
            <p class="card-text">Text book || According to National Curriculum and Textbook Board</p>
            </div>
        </div>
        </a>
        <a href="eight.php" style="text-decoration: none; color:white">
        <div class="card" style="width: 18rem; background-color: rgb(0, 204, 255);">
            <div class="card-body">
            <h5 class="card-title">Class-8</h5>
            <h6 class="card-subtitle mb-2 text-muted" >Card subtitle</h6>
            <p class="card-text">Text book || According to National Curriculum and Textbook Board.</p>
            </div>
        </div>
        </a>
        </div>
        <div class="part-2">
        <a href="seven.php" style="text-decoration: none; color:white"">
        <div class="card" style="width: 18rem; margin-right: 8px; background-color: rgb(0, 204, 255);">
            <div class="card-body">
            <h5 class="card-title">Class-7</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Text book || According to National Curriculum and Textbook Board.</p>
            </div>
        </div>
        </a>
        <a href="six.php" style="text-decoration: none;color:white ">
        <div class="card" style="width: 18rem; background-color: rgb(0, 204, 255);">
            <div class="card-body">
            <h5 class="card-title">Class-6</h5>
            <h6 class="card-subtitle mb-2 text-muted" >Card subtitle</h6>
            <p class="card-text">Text book || According to National Curriculum and Textbook Board.</p>
            </div>
        </div>
        </a>
    </div>
</div>
    <div class="col-md-2 assist-part" style="margin-top: 50px;">
        <div class="list-group" >
            <h4 style="padding: 20px; font-family:sans-serif;">Related topic</h4>
            <a href="home.php" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action"><img src="https://img.icons8.com/material/24/000000/home--v5.png"/>  Home</button></a>
            <a href="six.php" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action"><img src="https://img.icons8.com/ios-filled/24/000000/book.png"/> Six</button></a>            
            <a href="seven.php" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action"><img src="https://img.icons8.com/ios-filled/24/000000/book.png"/> Seven</button></a>    
            <a href="eight.php" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action"><img src="https://img.icons8.com/ios-filled/24/000000/book.png"/> Eight</button></a>
            <a href="nine-ten.php" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action"><img src="https://img.icons8.com/ios-filled/24/000000/book.png"/> Nine-Ten</button></a>
        </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
