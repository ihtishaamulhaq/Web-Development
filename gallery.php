<?php include('header.php');?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2>Student Image Gallery</h2>
        </div>
    </div>
    <div class="row">
        <?php
        $query= "SELECT student_data.id, student_data.f_name, std_images.link, class.class_name
        FROM student_data 
        INNER JOIN class ON student_data.class_id = class.id
        INNER JOIN std_images ON student_data.img_id = std_images.id";
        $result=mysqli_query($connection, $query);


        if(!$result){
            die('QUERY FAILED'.mysqli_error());
        }
        else{
           
            while($row= mysqli_fetch_assoc($result)){?>
                <div class=" image_block">
                <img src="<?php  echo $row['link']; ?>" class="rounded gallery" alt="Image NOT FOUND">
                    <div class="description">
                        <h6 style=" text-transform:capitalize;">Name : <?php echo $row['f_name']; ?></h6>
                        <h6>CLASS: <?php echo $row['class_name']; ?></h6>
                        <a href="std_details.php?id=<?php echo $row['id'];?>" class="btn  btn-info infobtn" >More Details...</a>
                    </div>
            </div>
                <?php
            }
        }

?>


        <?php
        // image shows from database using for each
        // $query="SELECT * FROM `std_images`";
        // $result= mysqli_query($connection, $query);
        // if(!$result){
        //     die('QUERY FAILED'.mysqli_error());
        // }
        // else{
        //     $a= '1';
        //   
        //     while($row= mysqli_fetch_assoc($result)){
        //         $i=1;
        //         foreach($row as $image) ?>
        
            <!-- <div class=" image_block">
                <img src="<?php  echo $image; ?>" class="rounded gallery" alt="Image NOT FOUND">
                    <div class="description">
                        <h5>NAME : <?php echo $name++; ?></h5>
                        <h5>CLASS: <?php echo $a++; ?></h5>
                       
                    </div>
            </div> -->
                <?php
        //     }
        // }

        // showing images from directory
        // $dirname = "boys/";
        // $images = glob($dirname."*.*");
        // $i=1;
        // $a= 'a';
        // $name= 'a1';
        // foreach($images as $image) { ?> 
        <!-- <div class=" image_block">
            <img src="<?php  echo $image; ?>" class="rounded gallery" alt="Cinque Terre">
            <div class="description">
            <h5>NAME : <?php echo $name++; ?></h5>
            <h5>CLASS: <?php echo $a++; ?></h5>
            <h5>image number: <?php echo $i++; ?></h5>
            </div>
        </div> -->
        
        <?php 
        // }
        ?>
    <!-- </div>
   <div class="row">
   <h2 style="float:right;">--> <?php 
//    $total_std= $i-1;
    // echo  "TOTAL STUDENTS :".$total_std;?></h2>
   </div>
</div>




<?php include('footer.php');
?>