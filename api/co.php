<?php
    include(__DIR__ . "/api/config.php");
    if(isset($_POST['submit'])){
        echo "hello";
        $id=$_POST['car_id'];
		$mname=$_POST['carname'];
		$price=$_POST['price'];
		$date=$_POST['date'];
		echo $mname." ".$date;

        $query = "UPDATE cars SET car_name = ?, price = ?, manufacturing_date = ? WHERE id = ?";
    
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);
    
        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "sdsi", $mname, $price, $date, $id);
    
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Update successful";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
    
            // Close the statement
            mysqli_stmt_close($stmt);
            header("location: /api/dash");
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    

       
	}
    if(isset($_POST['addcar'])){
        echo "carworld";
        
		$name=$_POST['carname'];
		$price=$_POST['price'];
		$date=$_POST['date'];
		

        $query = "INSERT INTO cars (car_name, price, manufacturing_date) VALUES (?, ?, ?)";
    
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);
    
        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "sds", $name, $price, $date);
    
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Update successful";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
    
            // Close the statement
            mysqli_stmt_close($stmt);
            header("location: /api/dash");
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    

       
	}
    if(isset($_POST['delete'])){
        echo "cardelete";
        
		$id=$_POST['car_id'];
		
		

        $query = "DELETE FROM cars WHERE id = ?";
    
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);
    
        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "i", $id);
    
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Update successful";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
    
            // Close the statement
            mysqli_stmt_close($stmt);
            header("location: /api/dash");
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    

       
	}
    
?>