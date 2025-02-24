<?php
$show_data = false;
$mistake1 = false;
$mistake2 = false;

if(isset($_POST["register"])){
    
    $email = $_POST["email"];
    $show_data = true;
    if(!(strpos($email, "@")) || !(strpos($email, ".")) ){
        $mistake2 = true;
        $show_data = false;
    }
    if($_POST["name"] ==""|| $_POST["email"] == "" || $_POST["password"] == ""){
        $mistake1 = true;
        $show_data = false;
        if($mistake2)
            $mistake2 = false;
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
        <h3 class="text-center my-4"> Register</h3>
        <form  method = "POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control my-3">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control my-3">
            </div>
            <div class="d-grid">
                <button name="register" class=" btn btn-info mt-4"> Register</button>
            </div>
        </form>
    </div>


    <?php if($show_data):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Registration Successful</h3>
        </div>
    <?php endif;?>
    <?php if($mistake1):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">All Fields Required</h3>
        </div>
    <?php endif;?>
    <?php if($mistake2):?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Enter Valid Email</h3>
        </div>
    <?php endif;?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>


</html>
