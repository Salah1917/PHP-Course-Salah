<?php
$login = false;
$mistake = false;
$name = "mohamed";
$pass = "123";

if(isset($_POST["login"]) && $_POST["name"] == $name && $_POST["password"] == $pass){
    $login = true;
}

if(isset($_POST["login"]) && !($_POST["name"] == $name && $_POST["password"] == $pass)){
    $mistake = true;
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
        <h3 class="text-center my-4"> Register Form</h3>
        <form  method = "POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control my-3">
            </div>
            <div class="d-grid">
                <button name="login" class=" btn btn-info mt-4"> Login </button>
            </div>
        </form>
    </div>


    <?php if($login):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Welcome to the Website</h3>
        </div>
    <?php endif;?>
    <?php if($mistake):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Incorrect credentials!!<br>Please try again</h3>
        </div>
    <?php endif;?>
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>


</html>
