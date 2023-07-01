<?php include('dbcon.php');?>


<?php 

if(isset($_POST['ADD'])){
    $name= $_POST['fname'];
    $lname= $_POST['lname'];
    $phone= $_POST['phone'];
    $phone2= $_POST['phone2'];
    $age= $_POST['age'];
    $dob= $_POST['dob'];
    $email= $_POST['email'];
    $class_id= $_POST['class'];
    $sec_id= $_POST['section'];

        if($name =="" || empty($name)){
            header('location:home.php?message=You should enter First name');
        }
        else
        {
           
            $query="INSERT INTO `student_data`(`id`, `f_name`, `l_name`, `phone`, `phone2`, `age`, `dob`, `email`, `class_id`, `sec_id`) 
                    VALUES (NULL,'$name','$lname','$phone','$phone2','$age','$dob','$email','$class_id','$sec_id')";

            $result=mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed".mysqli_error());
                }
                else
                {
                    header('location:home.php?success_message=Your data have been added successfully');
                }
        }   
}
?>