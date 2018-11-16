<?php 


        
        $con = mysqli_connect("","root","");
		if(!$con)
		{
			die("Unable To connect to database");
		}
		// select db

		mysqli_select_db($con,"farm");

        switch ((int) $_POST['request'])
        {
            case 1: $sql = "select * from farm_info";
		                   $result = mysqli_query($con, $sql);
                           
                           echo json_encode(mysqli_fetch_all($result));
                           break;
            case 5: $sql = "select min(qty_planted) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
            case 6: $sql = "select max(qty_planted) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
            
            case 7: $sql = "select min(qty_harvested) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
            case 8: $sql = "select max(qty_harvested) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
            case 9: $sql = "select min(on_harvest_waste) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
            case 10: $sql = "select max(on_harvest_waste) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
             case 11: $sql = "select min(post_harvest_waste) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
            case 12: $sql = "select max(post_harvest_waste) from farm_info";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_row($result);
                            echo $row[0];
                            break;
            
            
        
        
        }
		
		
		
		
		mysqli_close($con);


?>