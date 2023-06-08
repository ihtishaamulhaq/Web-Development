<?php
include('header.php');
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2> Student Records</h2>
                </div>                        

                <!-- message when you do not entered the first name -->
                <?php if(isset($_GET['message'])){?>
                        <h3 id="red"> <?php echo $_GET['message']; ?> </h3>
                        <?php    }  ?>

                    <!--success message when data insert successfully -->
                    <?php if(isset($_GET['update_message'])){?>
                        <h3 id="green"> <?php echo $_GET['update_message']; ?> </h3>
                        <?php }?>

                    <!--delete success message when  you deleted a reecord-->
                    <?php if(isset($_GET['del_message'])){?>
                        <h3 id="red"> <?php echo $_GET['del_message']; ?> </h3>
                        <?php }?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="std_table" >
                        <table class="table table-hover thead-dark table-bordered" id="table1" style ="overflow-x:auto;">
                            <thead> 
                                <tr>
                                    <th scope="col">Sr. #</th>
                                    <th scope="col">First-name</th>
                                    <th scope="col">Last-Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">D.O.B</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">class</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                        $query= "SELECT student_data.id, student_data.f_name, student_data.l_name, student_data.phone,
                                        student_data.phone2, student_data.age, student_data.dob, student_data.email, class.class_name,
                                        section.sec_name
                                        FROM student_data 
                                        INNER JOIN class ON student_data.class_id = class.id
                                        INNER JOIN section ON student_data.sec_id = section.id";
                                        $result=mysqli_query($connection, $query);

                                        if(!$result)
                                        {
                                            die("Select: query failed".mysqli_error());
                                        }
                                        else
                                        {
                                            $i=1;
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['f_name'];?></td>
                                        <td><?php echo $row['l_name'];?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['dob'];?></td>
                                        <td><?php echo $row['age'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['class_name'];?></td>
                                        <td><?php echo $row['sec_name'];?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-success" ><i class='fa fa-edit'></i></a>
                                            <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are You Sure ?')"><i class='fa fa-trash'></i></a> 
                                        </td>
                                    </tr>
                                        <?php  
                                        $i++;  
                                        }     
                                        }
                                        ?>
                                </tbody>
                        </table>                  
                
                    </div>
                </div>
            </div>
        </div>
        
   <?php include('footer.php');?>