<?php
				
	include 'connect.php';	

        $query = "SELECT title, description, timeDate, location FROM events";
        $statement = mysqli_prepare($conn, $query);
       
        $statement->execute();
        $statement->store_result();
		
        if($statement->num_rows() == 0) // so if we have 0 records acc. to keyword display no records found
        {
            echo '<div id="item">No results found</div>';
            $statement->close();
            $conn->close();
        }
        else {
            $statement->bind_result($name, $description, $timeDate, $location);
            while ($statement->fetch()) //outputs the records
            {
				
            }
            $statement->close();
            $conn->close();
        }
			
?>