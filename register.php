
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
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">  -->
        <link rel="stylesheet" type="text/css" href="login_style.css">

    </head>

    <body>
        <div class="container " id="log">
            <div>
                <form action="registration.php" class="form_design" method="post">
                    <div>
                        <div>
                            <h2 class="green">
                                INSTRUCTIONS
                            </h2>
                            <p class="d-flex justify-content-start"  style="text-align:left; color:red; "> 1. Please fill all fields.<br>
                                            2. You have to Register/Signup once to access POF e-Bidding or POF e-Registration Portal.<br>
                                            3. If you Register/Signup for POF e-Bidding, it is not mandatory to register with POF.<br>
                                            4. If you are POF registered firm, your login is already created.<br>
                                            5. In case of any query, please contact us at: 051-12345678
                            </p>
                           
                        </div> 
                    </div>
                    <div class="d-flex justify-content-center">
                        <div><h2 >Registration Form</h2></div> 
                    </div>
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="fname">First Nmae</label>
                                        <input type="text" value="" class="form-control" pattern="[a-zA-Z]+" name="fname"  required>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" value="" class="form-control" pattern="[a-zA-Z]+" name="lname" required>
                                    </div>
                                </div>       

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" value="" class="form-control" placeholder="03001234567" pattern="[0-9]{11}" name="phone">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" value="" class="form-control" min="18" max="60" name="age">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                    <label for="dob">D.O.B</label>
                                    <input type="date" value="" class="form-control" name="dob" min="1989-12-31">
                                    </div>
                                </div>
                                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" value="" class="form-control" name="email" required>
                                    </div>
                                </div>
                                    
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for= "username">Username</label>
                                        <input type="text" name="user_name" pattern="[a-zA-Z]+">
                                    </div>     
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for= "password">Password</label>
                                        <input type="password" name="password">
                                    </div>     
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <button type="submit" class= "btn btn-success but_log" name="register" value="register_user">
                                            Register  <i class="fa fa-fw fa-user"></i></button>
                                    </div>     
                                </div>
                            </div>
                        </div>              
                </form>
            </div>
        </div>
    </body>
</html>