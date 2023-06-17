<?php include('dbcon.php');?>


<?php 

if(isset($_POST['add_class'])){
    $Cname= $_POST['class_name'];
    

        if($Cname =="" || empty($Cname)){
            header('location:newclassView.php?message=Please Enter Class Name');
           
        }
        else
        {
           
            $query="INSERT INTO `class`(`id`,`class_name`) 
                    VALUES (NULL,'$Cname')";

            $result=mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed".mysqli_error());
                }
                else
                {
                    header('location:newclassView.php?success_message=Your data have been Added Successfully');
                }
        }   
}
?>