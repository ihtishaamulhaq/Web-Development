<?php
    include('dbcon.php');
             ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">





<script>

    function student_data(divName) {
        var student_data = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = student_data;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
<!--  -->

</head>
<body id="log" onload="student_data('printableArea')">

    <div style="background:#fff; width:8.3in; height:11in; padding:5px">
        <div style="margin:5px; width:8in; height:10.81in; padding:2px">
                            
             <?php
             
             if(isset($_GET['id'])){
                 $eid= $_GET['id'];

             $query= "SELECT student_data.id, student_data.f_name, student_data.l_name, student_data.phone,
             student_data.phone2, student_data.age, student_data.dob, student_data.email,
             std_images.link, class.class_name, section.sec_name
             FROM student_data 
             INNER JOIN class ON student_data.class_id = class.id
             INNER JOIN std_images ON student_data.img_id = std_images.id
             INNER JOIN section ON student_data.sec_id = section.id 
             WHERE student_data.id = '$eid'";
             
                 $result=mysqli_query($connection, $query);
             if(!$result){
                 die('QUERY FAILED'.mysqli_error());
             }
             else{
                 $row= mysqli_fetch_assoc($result)?>
    
    <div  id="printableArea" style=" width:7.8in; height:10.6in; margin:3px; padding: 5px;">
            <div class="first_b">
                
                <div>
                    <img  id="logo" src="school/school_icon.jpg" alt="Sir Syed School">
                </div>
                <div class="name">
                    <h2>POF Model High School & College<br> Wah Cantt</h2>
                </div>
                <div class="contact">
                    <span style="margin-bottom: 2px; margin-top:2px; width:500px;">
                    <i class="fa fa-phone"></i>&nbsp; 051-1234567-568  |
                    </span>
                    <span style="margin-bottom: 2px; margin-top:2px; width:500px;">
                    <i class="fa fa-envelope"></i>&nbsp; pof@gmail.com
                    </span>
                </div>
            </div>

            <div class="second_b" style="padding-left:2px;">
                <div>
                 
                </div>
                <div>   
                <img id="std_img" src="<?php echo $row['link'];?>" class="rounded gallery" alt="Image NOT FOUND">
                <h6 class="heading">Personal Information</h6>
                 <p class="Personal_info"> Name:</p> 
                 <p class="std_cv "><?php echo $row['f_name']." ".$row['l_name']; ?></p>           
                      
                 <p class="Personal_info">Age:</p>
                 <p class="std_cv "> <?php echo $row['age']." Years";?> </p>
         
                <p class="Personal_info">Class:</p>
                <p class="std_cv "> <?php echo $row['class_name']; ?></p>
             
                 <p class="Personal_info">Section:</p>
                <p class="std_cv "><?php echo $row['sec_name']; ?></p>
     
                 <p class="Personal_info">Phone:</p>
                 <p class="std_cv "><?php echo $row['phone']; ?></p>
     
                 <p class="Personal_info">Phone 2:</p>
                 <p class="std_cv "><?php echo $row['phone2']; ?></p>
                 
          
                 <p class="Personal_info">D.O.B:</p>
                 <p class="std_cv "><?php echo $row['dob']; ?></p>
             
                 <p class="Personal_info">Email:</p>
                 <p class="std_cv "style="text-transform:none; padding-left: 39px;"><?php echo $row['email']; ?></p> 
                 </div>
                 <div>
                    <h6 class="heading">Professional Skills</h6>
                    <ol>
                        <li class="Pro_skills">web & database</li> 
                        <li class="Pro_skills">HTML</li> 
                        <li class="Pro_skills">CSS</li> 
                        <li class="Pro_skills">Jquery</li> 
                        <li class="Pro_skills">Java Script</li>
                    </ol> 

                 </div>
                 <div>
                    <h6 class="heading">Languages</h6>
                    <ul>
                        <li><p class=" Personal_info">English</p> </li>
                        <li><p class=" Personal_info">urdu</p> </li>
                    </ul>
                     


                 </div>
              
        </div>
        <div class="third_b">
            <p class="heading">
                Profile
            </p>
            <p class="paragraph">
            Seasoned and independent Front End Developer with 5 years of experience in blending the art of design with skill of programming 
            to deliver an immersive and engaging user experience through efficient website development, proactive feature optimization, 
            and relentless debugging.<br><br>

            Very passionate about aesthetics and UI design.
            </p>
            <p class="heading">
                Experience
            </p>
            <p class="paragraph">
                Deliver engaging user experience through optimization of images, code, and cross-browser compatibility, 
                increasing Time on Page by +60 seconds for +50 websites
                Expand features, refine code, and improve processes, producing smoother operations and enhancing user engagement
                Designed dynamic and browser compatible pages using HTML5, CSS3, jQuery, and Javascript.
                Built single page applications (SPA), responsive web design, UI using HTML5 grid layouts, CSS3 media queries where its an expression and can be used to either true or false.
                Ensure efficient web development by supporting designers and app developers while resolving website performance issues
            </p>
            <p class="heading">
                Education
            </p>
            <p class="paragraph">Master in Computer Science / COMSATS University Islamabadd, Pakistan</p>
            <p class="paragraph">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor eveniet qui asperiores cum aspernatur molestiae 
                similique fugiat rem. Esse fugit accusantium corporis 
                aspernatur corrupti perferendis adipisci sunt accusamus nam, quod sint quidem quis suscipit dignissimos voluptatem, 
                perspiciatis excepturi nisi?
            </p>
            <p class="heading">
                References
            </p>
            <span class="paragraph">1. Dr Muhammad Sharif<br>
                Associate Professor<br>
                COMSATS University Islamabad, Pakistan<br>
                <i class="fa fa-envelope"></i>&nbsp; sharif@gmial.com</span>
            <span class="paragraph">1. Dr Muhammad Sharif<br>
                Associate Professor<br>
                COMSATS University Islamabad, Pakistan<br>
                <i class="fa fa-envelope"></i>&nbsp; sharif@gmial.com</span>
            
    </div>
     
                 <?php
                 }
                 }
                 else
                 {
                     echo "<p> No Id received</p>";
                 }
                 ?> 
<!-- </div> -->
</div>  
                </div>
</div>
</body>
</html>


         