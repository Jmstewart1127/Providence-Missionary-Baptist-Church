<?php
				
include 'connect.php';

        $query = "SELECT sermon1, date1, sermon2, date2, sermon3, date3, sermon4, date4 FROM sermons";
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
            $statement->bind_result($sermon1, $date1, $sermon2, $date2, $sermon3, $date3, $sermon4, $date4);
            while ($statement->fetch()) //outputs the records
            {
				
            }
            $statement->close();
            $conn->close();
        }
			
?>