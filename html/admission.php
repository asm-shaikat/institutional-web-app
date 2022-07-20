<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/admission.css">
    <link rel="stylesheet" href="./../bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../bootstrap-5.0.2/dist/js/bootstrap.min.js">
    <title>Regstration</title>
</head>
<body style="background-color: wheat;">
    <form action="PrSubmit.php" method="post">
    <div class="from">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
            <h2 class="head">Admission</h2>
        <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingInput" placeholder="First name" name="fname">
        <label for="floatingInput">First Name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Last name" name="lname">
        <label for="floatingInput">Last name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Address" name="address">
        <label for="floatingInput">Address</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Admit reason" name="admitReason">
        <label for="floatingInput">Father's name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Admit reason" name="admitReason">
        <label for="floatingInput">Mother's name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Admit reason" name="admitReason">
        <label for="floatingInput">In which class you want to study</label>
    </div>
    <div class="form-floating spc">
        <input type="number" class="form-control" id="floatingPassword" placeholder="Age" name="age">
        <label for="floatingInput">Age</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Mobile" name="mobile">
        <label for="floatingInput">Parents mobile number</label>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
</body>
</html>