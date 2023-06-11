 
<?php include "dbcon.php";?>
<?php session_start();?>
<!DOCTYPE html>

<html>

<head>

    <title>wellcome</title>

    <link rel="stylesheet" type="text/css" href="login_style.css">

</head>

<body>
<?php 
$name=" ";
if($_SERVER["REQUEST_METHOD"]==["POST"])
{
    if(!isset($_POST['user_name'])){
        echo "no user name received";
    }
}
?>

    
     
     <?php 


if (isset($_POST['user_name']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
      $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['user_name']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location:index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location:index.php?error=Password is required");
        exit();
    }else{

        $sql = "SELECT * FROM `users` WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";?>
                <p> <?php echo "You are wellcomed", " ", $_POST['user_name'];?></p><?php
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
                header("Location:data_view.php");
                exit();
            }else{
                header("Location:index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location:index.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location:index.php");
    exit();
}

    ?>
</body>

</html>