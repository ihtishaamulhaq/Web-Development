
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

</head>

<body>
   
        <div class="container" id="log">
            <form method="post" action="login_process.php" class="index_form_design">
                <h2 style=" text-align: center; margin-bottom: 15px; margin-top: 15px;">Login Form</h2> 

                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?> 
                
                    <div class="form-group">
                        <label for= "username">Username</label>
                        <input type="text" name="user_name" pattern="[a-zA-Z]+">
                    </div>
                    <div class="form-group">
                        <label for= "password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class= "btn btn-success but_log" name="login" value="login">Login  <i class="fa fa-fw fa-user"></i></button>
                    </div>       
            </form>
        </div>

<?php include('footer.php')?>