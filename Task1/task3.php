<?php
$correct = false;
$mistake = false;
$mistake2 = false;
$mistake3 = false;
$mistake4 = false;
$pass = "123";



if(isset($_POST["change"]))
{   
    if($_POST["new"] ==  $_POST["confirm"] && $_POST["new"] != $_POST["old"] && $_POST["old"] == $pass)
    {
        $correct = true;
    }
    
    if($_POST["old"] != $pass)
    {
        $mistake4 = true;
    }
    
    if($_POST["new"] !=  $_POST["confirm"])
    {
        if($mistake4)
        $mistake4 = false;

        $mistake = true;
    }
    
    if($_POST["new"] ==""|| $_POST["confirm"] == "" || $_POST["old"] == "")
    {
        if($mistake)
            $mistake = false;
        if($mistake4)
        $mistake4 = false;

        $mistake2 = true;
    }
    
    if($_POST["new"] ==  $_POST["old"])
    {
        if($correct)
        $correct = false;
    
        $mistake3 = true;
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container col-md-6">
        <h3 class="text-center my-4"> Change Password</h3>
        <form  method = "POST">
            <div class="form-group">
                <input type="password" name="old" placeholder="Old Pasword" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="new" placeholder="New Password" class="form-control my-3">
            </div>
            <div class="form-group">
                <input type="password" name="confirm" placeholder="Confirm New Password" class="form-control my-3">
            </div>
            <div class="d-grid">
                <button name="change" class=" btn btn-info mt-4"> Change </button>
            </div>
        </form>
    </div>


    <?php if($correct):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Password Changed Succefuly!!</h3>
        </div>
    <?php endif;?>
    <?php if($mistake):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Passwords don't match!!<br>Please try again</h3>
        </div>
    <?php endif;?>
    <?php if($mistake2):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">All Inputs Required!!</h3>
        </div>
    <?php endif;?>
    <?php if($mistake3):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">You entered the same Password!!</h3>
        </div>
    <?php endif;?>
    <?php if($mistake4):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Incorrect Current Password!!</h3>
        </div>
    <?php endif;?>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>


</html>
