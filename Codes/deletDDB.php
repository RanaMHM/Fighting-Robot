<?php
    if(isset($_POST['startAgain']) ){
        

    $connection = new mysqli('localhost' ,'root','','robotarm');
    $connection2 = new mysqli('localhost' ,'root','','robotbase');
    if($connection->connect_error &&  $connection2->connect_error){
        die('Connection Faild :' .$connection->connect_error);
       die('Connection Faild :' .$connection2->connect_error);
    }else{
    
    $sql="DELETE FROM `motors` " ;
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $connection->error;
      }
    $sql="DELETE FROM `offon` ";
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $connection->error;
      }
        
          
            $sql2="DELETE FROM `mobilebase`  " ;
            if ($connection2->query($sql2) === TRUE) {
              echo "Record deleted successfully";
            } else {
             echo "Error deleting record: " . $connection2->error;
                  }
                            
           header("Location: http://localhost/Fighting/index.html");
                      exit();
              
            }   
            mysqli_close($connection); 
            mysqli_close($connection2);
    


        }
?>

