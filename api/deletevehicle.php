<?php
   
    if(isset($_POST['delete']))
    {
        $id=$_POST['car_id'];
        
    }
    echo $id;
    // if(isset($_POST['yes']))
    // {
    //     header("location: co.php");
        
    // }
    // if(isset($_POST['no']))
    // {
    //     header("location: dash.php");
        
    // }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid text-light justify-content-center fw-bold">
        <div class="text-center">Assignment for Quadiro Technologies</div>
        
        
    </div>
</nav>
    <div class="container">
        <p>Are you sure you want to delete</p>
        <form action="co.php" method="POST">
        <input  type="hidden" name="car_id" value="<?php echo $id ?>"/>
        <button class="btn" type="submit" name="yes">yes</button>
        </form>
        <form action="co.php" method="POST">
        <input  type="hidden" name="car_id" value="<?php echo $id ?>"/>
        <button class="btn" type="submit" name="yes">no</button>
        </form>
        <!-- <button class="btn" type="submit" name="no">no</button> -->
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"></script>
</body>
</html>