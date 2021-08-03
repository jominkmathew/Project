<?php /* Smarty version 2.6.26, created on 2020-03-02 09:45:37
         compiled from staff.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="reg/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>Staff Registration Form</h2>
                <div class="form-group-1">
                    <input type="hidden" name="hide" value="h">
                    
                    <input type="text" name="staffname" id="staffname" placeholder="Staff Name" required />
                    <input type="text" name="staffid" id="staffid" placeholder="Staff Id" required />
                     <input type="number" name="contactno" id="contactno" placeholder="Contact Number" required />
                     
                    <!-- <input type="radio" name="gender" value="male"><font color="black">Male</font>
                   <input type="radio" name="gender" value="female"><font color="black">Female</font> -->

                   <select name="gender">
                      <option>--Select Gender--</option>
                      <option>Male</option>
                      <option>Female</option>
                   </select>
                   <input type="text" name="dob" id="dob"  placeholder="DOB (YYYY-MM-DD)" required />
                
                    <input type="email" name="email" id="email" placeholder="Email" required />
                   <input type="password" name="pass" id="password" placeholder="Password" required />
                   <input type="confirmpassword" name="confirmpass" id="password" placeholder="Confirm Password" required />
                    
                </div>
                
                    
                
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Register" />
                </div>
            </form>
        </div>
        </div>

    </div>

    <!-- JS -->
    <?php echo '
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="reg/js/main.js"></script>
    '; ?>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>