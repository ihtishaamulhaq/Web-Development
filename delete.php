<?php include('dbcon.php');?>
<?php 
if(isset($_GET['id'])){
    $eid= $_GET['id'];
}
$query="DELETE FROM student_data where `id`='$eid'";
$result=mysqli_query($connection, $query);

if(!$result){
    die("Query Failed".mysqli_error());
}else{
    header('location:data_view.php?del_message=Deleted successfully');
}

?>