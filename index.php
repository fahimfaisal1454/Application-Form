<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
     </div>
     <div class="container">
        <div class="apply_box">
            <h1>Job Application Form<span class="tittle_small">(WEB)</span></h1>
            <form action="" method="POST">
                <div class="form_container">
                    <div class="form_control">
                        <label for="first_name">First Name</label>
                        <input id="first_name" name="first_name" placeholder="Enter First Name" required>
                    </div>
                        <div class="form_control">
                            <label for="Last_name">Last Name</label>
                            <input id="Last_name" name="Last_name" placeholder="Enter Last Name" required>
                        </div>
                            <div class="form_control">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                            </div>
                                <div class="form_control">
                                    <label for="job_role">Job Role</label>
                                    <select name="job_role" id="job_role" required>
                                        <option value="not selected">Select Job Role</option>
                                        <option value="frontend">Frontend Developer</option>
                                        <option value="backend">Backend Developer</option>
                                        <option value="fullstack">Full Stack Developer</option>
                                        <option value="design">UI/UX Designer</option>
                                    </select>
                                </div>
                                <div class="textarea_control">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" rows="4" cols="50" placeholder="Enter your address" required></textarea>
                                </div>
                                <div class="form_control">
                                    <label for="city">City</label>
                                    <input id="city" name="city" placeholder="Enter City Name" required>
                                </div>
                                <div class="form_control">
                                    <label for="pincode">Pin Code</label>
                                    <input type="number" id="pincode" name="pincode" placeholder="Enter your pin-code" required>
                                </div>
                                <div class="form_control">
                                    <label for="date">Date</label>
                                    <input value="2000-10-08" type="date" id="date" name="date"  required>
                                </div>
                                <div class="form_control">
                                    <label for="upload">Add your CV</label>
                                    <input type="file" id="upload" name="upload" required>
                                </div>

                </div>
                <div class="button_container">
                    <button class="btn" type="submit" name="submit">Apply Now</button>
                </div>
            </form>
        </div>
     </div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
    {
       $fname   = $_POST['first_name'];
       $lname   = $_POST['Last_name'];
       $email   = $_POST['email'];
       $jobrole = $_POST['job_role'];
       $address = $_POST['address'];
       $city    = $_POST['city'];
       $pincode = $_POST['pincode'];
       $date    = $_POST['date'];
       $upload  = $_POST['upload'];

       $sql = "INSERT INTO appform (fname, lname, email, jobrole, address, city, pincode, date, addcv) VALUES ('$fname', '$lname', '$email', '$jobrole', '$address', '$city', '$pincode', '$date', '$upload')";

       $data = mysqli_query($conn, $sql);
       if($data)
       {
        echo "Form submitted successfully";
       }
       else
       {
        echo "Failed to submit form";
       }
    }
?>
