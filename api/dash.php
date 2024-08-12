<?php
    include(__DIR__ . "/config.php");
if(isset($_POST['redirect'])){
	header("location: /addvehicle");
	exit();
}

if(isset($_POST['delect'])){
	header("location: /deletevehicle");
	exit();
}
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
<div class="  justify-content-center vh-100 py-5 " style="background-color:#F3E5AB;">
    <div >
        <div class="container ">
            <div class="row bg-secondary" >
                <div class="col-9 "> car details </div>
                <div class="col-3">
                    <form method="POST">
                        <button class="btn f bg-primary" type="submit" name="redirect">Add Vechile</button>
                    </form>
               
                </div>
            </div>
            <div class="row bg-light text-center" >
                <div class="col">
                    car-model
                </div>
                <div class="col">
                    price
                </div>
                <div class="col">
                    date 
                </div>
                <div class="col-2">
                   
                </div>
            </div>
            <?php
                $sql="SELECT * FROM cars";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_num_rows($result);
                $i=0;
                if ($row > 0) {
                    while ($rowdata = mysqli_fetch_assoc($result)) {
                        $rowClass = ($rowdata['id'] % 2 == 0) ? '#7393B3' : '#848884 ';
                        ?>
                        <div class='row  text-white text-center' style="background-color:<?php echo $rowClass; ?>">
                            <div class='col' name="name">
                                <?php echo $rowdata["car_name"]; ?>
                            </div>
                            <div class='col' name="price">
                                <?php echo $rowdata["price"]; ?>
                            </div>
                            <div class='col'>
                                <?php echo $rowdata["manufacturing_date"]; ?>
                            </div>
                            <div class='col-2'>
                           
                            <div class="dropdown">
  <button class="btn " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                            </svg>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#">
    <form action=" /api/updatevehicle.php" method="POST">
    <input type="hidden" name="car_id" value="<?php echo $rowdata['id']; ?>"/>
         <button class="btn" type="submit" name="update">update</button>
    </form>
    </a></li>
    <li><a class="dropdown-item" href="#">
    <form action="/api/co.php" method="POST">
    <input type="hidden" name="car_id" value="<?php echo $rowdata['id']; ?>"/>
         <button class="btn" type="submit" name="delete">delete</button>
    </form>
    </a></li>
  </ul>
</div>
                            </div>
                        </div>
                     
                        <?php
                    }
                }
                ?>
            <div class="row bg-secondary">
                <div class="col bg-white">scroll down for more cars </div>
            </div>
            
        </div>
    </div>
  
            </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"></script>
</body>
</html>