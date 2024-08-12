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
		<div class="row justify-content-center ">
		<div class="h1 text-center col-lg-4 col-sm-10 bg-primary fw-bold">
				Add new vehicle
			</div>
		</div>
		<div class="row justify-content-center ">
			
		<div class="col-lg-4 col-sm-10 bg-light">
		<div class="container">
		<form action="/co" method="POST">
            <div class="mb-3">
                <label class="form-label" for="inputName">car name</label>
                <input type="name" class="form-control" id="inputName" placeholder="name" name="carname" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputPrice">											Price</label>
                <input type="text" class="form-control" id="inputPrice" placeholder="Price" name="price"  />
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputDate">											Date of Manufacturing</label>
                <input type="date" class="form-control" id="inputDate" placeholder="23/4/2000" name="date"  />
            </div>
           
                <button type="submit" class="btn btn-primary" name="addcar">add</button>
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

