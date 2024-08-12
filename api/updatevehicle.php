<?php
	include(__DIR__ . "/config.php");
	
	if(isset($_POST['update'])){
		$id=$_POST['car_id'];
		

		$query="SELECT * FROM cars WHERE id=$id";

		$result=mysqli_query($conn,$query);
		$row=mysqli_num_rows($result);
		
		$rowdata = mysqli_fetch_assoc($result);
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
<!-- <div class="h-150 d-inline-block" style="width: 200px; height:50px; background-color: rgba(0,0,255,.1)">Height 100%</div> -->
	<div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 bg-light">
            <div class="h-150 h1 fw-bold fs-12 row-sm-6 row-lg-6   text-center" style='height:50px;' >
        <div class="  col-sm-12 col-lg-12 bg-primary">
                Update vehicle details
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-lg-12 col-sm-12 bg-light">
        <form action="co.php" method="POST">
                
                <div class="mb-3">
                    <label class="form-label" for="inputName">Email</label>
                    <input type="name" class="form-control" id="inputName" placeholder="Email" name="car_id" value="<?php echo $rowdata['id']; ?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputName">Email</label>
                    <input type="name" class="form-control" id="inputName" placeholder="Email" name="carname" value="<?php echo $rowdata['car_name']; ?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputPrice">											Password</label>
                    <input type="text" class="form-control" id="inputPrice" placeholder="Password" name="price"  value="<?php echo $rowdata['price']; ?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputDate">											Password</label>
                    <input type="date" class="form-control" id="inputDate" placeholder="Password" name="date"  value="<?php echo $rowdata['manufacturing_date']; ?>"/>
                </div>
            
                    <button type="submit" class="btn btn-primary" name="submit">update</button>
    </form>
    </div>
            </div>
        </div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"></script>
	</body>
</html>