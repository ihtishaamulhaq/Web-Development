<?php include('dbcon.php');?>


<?php 

if(isset($_POST['section'])){
    $sname= $_POST['sec_name'];
    

        if($sname =="" || empty($sname)){
            header('location:newsecView.php?message= Please Enter Section name');
        }
        else
        {
           
            $query="INSERT INTO `section`(`id`, `sec_name`) 
                    VALUES (NULL,'$sname')";

            $result=mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed".mysqli_error());
                }
                else
                {
                    header('location:newsecView.php?success_message=Your data have been added successfully');
                }
        }   
}
?>