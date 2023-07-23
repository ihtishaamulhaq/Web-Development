<?php include('dbcon.php');?>


<?php 

if(isset($_POST['update_c'])){


   
    $id= $_POST['update_id'];
    $name= $_POST['class_name'];
    
   
       
        if($name =="" || empty($name)){
            header('location:newclassView.php?message=You should enter class name');
        }
        else
        {
           
            $query="UPDATE `class` SET `class_name`='$name' where `id`=".$id;

            $result=mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed".mysqli_error());
                }
                else
                {
                    header('location:newclassView.php?update_message=Your data have been updated successfully');
                }
        }   
}
?>