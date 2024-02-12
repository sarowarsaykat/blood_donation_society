<?php
include "db_connect/db_connect.php";
include "shears/head.php";
?>

<body>

    <?php
    include "shears/header.php";
    ?>

    <!--  MAIN CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 wow fadeInLeft">
                    <h2 class="contact-title">Donor List</h2>
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Date_of_birth</th>
                                <th>Blood_group</th>
                                <th>photo</th>

                            </tr>
                        </thead>
                        <?php 
                            
                            $i=1;
                            $result = mysqli_query($con,"select * from donor_registrations where is_approved=1 order by id desc");
                            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['date_of_birth'];?></td>
                                <td><?php echo $row['blood_group'];?></td>
                                <td><img style="width:40px; height:40px;" src="uploads/<?php echo $row['photo'];?>"/></td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div> <!--  end col-sm-6  -->
            </div> <!-- end row  -->
        </div> <!--  end .container -->
    </section> <!-- end .section-content-block  -->

   <?php
   include "shears/footer.php";
   ?>