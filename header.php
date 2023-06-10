<?php 
session_start();
include('dbcon.php');
if (isset($_SESSION['user_name'])) {
    $user_name =$_SESSION['user_name'];
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title> student info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap link -->       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- below links are for icon -->
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        <!-- below links-> jquery/datatable -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
         
        <!-- below links -> datatable/css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"> 
        <link rel="stylesheet" type="text/css" href="login_style.css">

<script>
    $(document).ready(function () {
        $('#table1').DataTable({
        //     columnDefs: [
        //     {
        //         targets: 4,
        //         render: DataTable.render.date(),
        //     },
        // ],
    });
});
// print function

function student_data(divName) {
     var student_data = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = student_data;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
    </head>

    <body>
<!-- Nav bar for link-->

<nav class="navbar navbar-expand-lg bg_color">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" style="text-transform:capitalize;" href="#">
    <span class="navbar-brand  h1"><?php echo $_SESSION['user_name'];?>
    <i class="fa fa-user-circle">&nbsp;</i></span>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <nav class ="navbar">
            <ul >
              <li class="logo"><img src="https://i.imgur.com/E26Pj54.png"></li>
              <li><a href="data_view.php"><i class="fa fa-home"></i>&nbsp;  Home</a></li>
              <li><a href="home.php"><i class="fa fa-users"></i>&nbsp;  Add Student</a></li>
              <li><a href="newclassView.php"><i class="fa fa-table"></i>&nbsp; Classes</a></li>
              <li><a href="newsecView.php"><i class="fa fa-table"></i>&nbsp;  Sections</a></li>
              <li><a href="gallery.php"><i class="fa fa-image"></i>&nbsp; Gallery</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>&nbsp; Contact</a></li>
              <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp; Logout</a></li>
          </ul>
      </nav>   
    </div>
</div>
  </div>
</nav>

<div class="wrapper">

       
        
   