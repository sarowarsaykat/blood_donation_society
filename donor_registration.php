<?php
include "shears/head.php";
include "db_connect/db_connect.php";

if(!empty($_POST)){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_name=basename( $_FILES["fileToUpload"]["name"]);
        //insert into database
        $name = $_POST['name'];
        $date_of_birth = $_POST['date_of_birth'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $blood_group = $_POST['blood_group'];
        $nid = $_POST['nid'];
        $query = mysqli_query($con, "insert into `donor_registrations` (`name`,`date_of_birth`,`gender`,`address`,`mobile`,`blood_group`,`nid`,`photo`) values ('$name','$date_of_birth','$gender','$address','$mobile','$blood_group','$nid','$file_name')");
        if($query){
            echo "<script>alert('data has been insarted successfully.')</script>";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
}
?>

<body>

    <?php
    include "shears/header.php";
    ?>

    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Donor Registration
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Donor Registration
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 wow fadeInLeft">

                    <div class="contact-form-block">
                        <h2 class="contact-title">Donor Registration</h2>
                        <form role="form" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Please Write Your Name">
                            </div>

                            <div class="form-group">
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" />
                            </div>
                            <div class="form-group">
                                <select id="gender" class="form-control" name="gender">
                                <option value="">Gender</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="other">other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Please Write Your address"/>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" id="mobile" name="mobile"
                                    placeholder="Please Write Your mobile" />
                            </div>

                            <div class="form-group">
                                <select id="blood_group" class="form-control" name="blood_group">
                                    <option value="">Blood_group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" id="nid" name="nid"
                                    placeholder="Please Write Your nid" />
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control" id="fileToUpload" name="fileToUpload"/>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-theme" name="submit" value="registration" >
                            </div>

                        </form>

                    </div> <!-- end .contact-form-block  -->

                </div> <!--  end col-sm-6  -->

            </div> <!-- end row  -->

        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->

   <?php
   include "shears/footer.php";
   ?>