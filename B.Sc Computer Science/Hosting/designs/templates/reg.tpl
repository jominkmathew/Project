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
                <h2>User Registration Form</h2>
                <div class="form-group-1">
                    <input type="hidden" name="hide" value="h">
                    
                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                     <input type="number" name="contactno" id="contactno" placeholder="Contact Number" required />
                    <input type="text" name="org" id="organisationname" placeholder="Organisation Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                   <input type="password" name="pass" id="password" placeholder="Password" required />
                   <input type="password" name="confirmpass" id="password" placeholder="Confirm Password" required />
                    
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
    {literal}
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="reg/js/main.js"></script>
    {/literal}
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>