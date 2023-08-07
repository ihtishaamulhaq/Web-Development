<?php 
include('dbcon.php');
if(isset($_POST['update_s'])){


   
    $id= $_POST['update_id'];
    $name= $_POST['sec_name'];
    
   
       
        if($name =="" || empty($name)){
            header('location:newsecView.php?message=You should enter section name');
        }
        else
        {
           
            $query="UPDATE `section` SET `sec_name`='$name' where `id` = ".$id;

            $result=mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed".mysqli_error());
                }
                else
                {
                    header('location:newsecView.php?update_message=Your data have been updated successfully');
                }
        }   
}
?>