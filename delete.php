<?php
    include 'dbConnection.php';
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $qry="delete from emp where id='".$id."' ";
        if (mysqli_query($conn, $qry)) {
            echo "Record deleted successfully";
            echo "<script> window.open('welcome.php','_self')</script>";
          } else {
            echo "Error deleting record: " . $conn->error;
          }
    }
?>