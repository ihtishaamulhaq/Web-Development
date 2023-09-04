<?php include('header.php');?>

<div class="container-fluid" id="Std_print" style="background: #fff;  width:820px;">
            <div class="row">
                <h2 STYLE=" margin:10px; text-align:center;  padding:10px; border: 2px solid #1298ad; background: burlywood;"  >Curriculum Vitae</h2>
            </div>
    <div class="d-flex justify-content-between">
            <div class="d-flex justify-content-center"  id="printableArea" style=" width: 800px; margin: 5px; padding: 10px; border: 2px solid #1298ad;">
                            
                            
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
                   
                    
                    <div class=" col cv"  style=" width: 500px;">
                            
                                <h5 for="f_name"><u>Name:</u></h5>
                                <h6> <?php echo $row['f_name']." ".$row['l_name']; ?></h6>
                            
                                
                    
                                <h5 for="age"><u>Age:</u></h5>
                                <h6> <?php echo $row['age']."Years";?> </h6>
                            
                    
                        
                                <h5 for="class_name"><u>Class:</u></h5>
                               <h6><?php echo $row['class_name']; ?></h6>
                            
                      
                                <h5 for="sec_name"><u>Section:</u></h5>
                               <h6><?php echo $row['sec_name']; ?></h6>
                    
                      
                                <h5 for="phone"><u>Phone:</u></h5>
                                <h6><?php echo $row['phone']; ?></h6>
                    
                                <h5 for="phone2"><u>Phone 2:</u></h5>
                                <h6><?php echo $row['phone2']; ?></h6>
                                
                         
                                <h5 for="dob"><u>D.O.B:</u></h5>
                                <h6><?php echo $row['dob']; ?></h6>
                            
                                <h5 for="email"><u>Email:</u></h5>
                                <h6 style=" text-transform:none;"><?php echo $row['email']; ?></h6> 
                             
                    </div>

                    <div class="col">
                            <div class="std_image_block"> 
                                <img src="<?php echo $row['link'];?>" class="rounded gallery" alt="Image NOT FOUND">
                            </div> 
                    </div>
                    

                    
            </div>
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
    

    <div class="d-flex justify-content-between " style="background: #fff; width: 800px; margin: 10px; background: bisque; padding: 10px; border: 2px solid #1298ad;">
        <div class="col">
            <a href="gallery.php?id=<?php echo $row['id'];?>" class="btn  btn-outline-primary" >Back to Gallery</a>
            <a href="print_cv.php?id=<?php echo $row['id'];?>" type="button" value="print"  class="btn  btn-outline-secondary" target="blank" >Print</a>
        </div>
    </div>
</div>

<!-- onclick="student_data('printableArea')" -->

<?php include('footer.php');?>