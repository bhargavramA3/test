<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
<div class="vh-100 " style="background-color: beige;">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid text-light justify-content-center fw-bold">
        <div class="text-center">Assignment for Quadiro Technologies</div>
        
        
    </div>
</nav>
    
        <div class="d-flex  justify-content-center pt-5 ">
      
      
        <div class="container">
           
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-12 bg-primary">
                        <div class="h3 d-flex justify-content-center p-3 fw-bold text-white">Welcome to Quadrio Technologies</div>
                    </div>
                </div>
                <div class="row justify-content-center  ">
                   
                    <div class="col-lg-4 col-sm-6 bg-light p-0">
                        <img src="car_img.jpg" class="img-fluid" style="height: 100%; object-fit: cover;"/>
                        
                        <div class=" col-sm-4 col-lg-3 position-absolute  top-50 text-center  " >
        <p class="text-white mb-0 fw-bold">"A car for every purse and purpose."</p>
        <small class="text-white">- Alfred P. Sloan</small>
    </div>
                    </div>
                    <div class=" col-lg-4 col-sm-6 bg-light py-3">
                        <div>
                        <form action="/loginProcess" method="POST">
                            <div class="mb-3">
                                <label class="form-label" for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputPassword">											Password</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password"/>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkRemember"/>
                                    <label class="form-check-label" for="checkRemember">Remember me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        </div>
                        
                    </div>
                 </div>
                
        </div>
     
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"></script>
</body>
</html>