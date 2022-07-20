<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Result</title>
  </head>
  <body>
    <?php require "model.php" ?>
    <form action="result.php" method="post" style="margin-top: 20px;">
        <div class="container col-md-4 form">
            <h3 class="container text-center btn-success">Search Result</h3>
            <select class="form-select" aria-label="Default select example" name="class">
                  <option selected>Open this select class</option>
                  <option value="TEN">TEN</option>
                  <option value="Eleven">Eleven</option>
                  <option value="Twelve">Twelve</option>
            </select>
        <input class="form-control form-control-lg" type="text" placeholder="Enter roll" aria-label=".form-control-lg example" name="id" required>
        <input class="btn btn-success login" type="submit" value="Click here">
    </div>
    </form><br>
  <table class="table table-success table-striped container">
  <tr>
      <td>Name</td>
      <td>ID</td>
      <td>Class</td>
      <td>Physics</td>
      <td>Chemistry</td>
      <td>Math</td>
      <td>Biology</td>
      <td>Ict</td>
      <td>Bangla</td>
      <td>English</td>
      

  </tr>
  <?php
  session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "connect.php";
        $id=$_POST['id'];
        $class=$_POST['class'];
        $sql="SELECT * FROM `result` WHERE  `id`='$id' AND `class`='$class' ";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['id'];?></td>
    <td><?php echo $data['class'];?></td>
    <td><?php echo $data['physics'];?></td>
    <td><?php echo $data['chemistry'];?></td>
    <td><?php echo $data['math'];?></td>
    <td><?php echo $data['biology'];?></td>
    <td><?php echo $data['ict'];?></td>
    <td><?php echo $data['bangla'];?></td>
    <td><?php echo $data['english'];?></td>
  </tr>	
  <?php
    }
  }
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
