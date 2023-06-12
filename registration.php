<?php include('dbcon.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['register'])){
        // echo $_POST['register'];
        $f_name = $_POST['fname'];
        $l_name = $_POST['lname'];
        $phone = $_POST['phone'];
        
        $email = $_POST['email'];
        $u_name = $_POST['user_name'];
        $password = $_POST['password'];

       
        $query="INSERT INTO `users`(`id`,`user_name`,`fname`,`lname`,`email`,`password`)
                 VALUES (NULL,'$u_name','$f_name','$l_name','$email','$password')";
                 $result=mysqli_query($connection, $query);
                //  print_r($result);
                 if(!$result){
                    die("QUERY FAILED".mysqli_error());
                 }else{
                    header('location:index.php?register_message=REGISTERED SUCCESSFULLY CONGRAULATIONS! LOGIN WITH YOUR USER NAME AND PASSWORD');
                 }
}

}
?>