<?php include('dbcon.php');?>


<?php 

if(isset($_POST['Update'])){


   
    $id= $_POST['id'];
    $name= $_POST['fname'];
    $lname= $_POST['lname'];
    $phone= $_POST['phone'];
    $phone2= $_POST['phone2'];
    $age= $_POST['age'];
    $dob= $_POST['dob'];
    $email= $_POST['email'];
    $class_ID= $_POST['class'];
    $section= $_POST['section'];
   
        echo $idnew;
        if($name =="" || empty($name)){
            header('location:data_view.php?message=You should enter First name');
        }
        else
        {
           
            $query="UPDATE `student_data` SET `f_name`='$name', `l_name`='$lname', `phone`='$phone', `phone2`='$phone2',
             `age`='$age', `dob`='$dob', `email`= '$email', `class_id`= '$class_ID',`sec_id`='$section' where `id` = ".$id;

            $result=mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed".mysqli_error());
                }
                else
                {
                    header('location:data_view.php?update_message=Updated successfully');
                }
        }   
}
?>