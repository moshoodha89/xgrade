<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="stylesheet/teacher-signup.css" type="text/css" rel="stylesheet">
</head>
<body>

   
<section class="heading">
    
</section>

<section class="container">
    <div class="title">Instructor/Teacher Registration</div>
    
    <!-- <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->

        <form action="./includes/signupteacher.inc.php" method="POST">

        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter your name" name= "name" required>
            </div>

            <div class="input-box">
                <span class="details">Email Address</span>
                <input type="text" placeholder="Email registered with your Institution" name="email" required>
            </div>

            <div class="input-box">
                <span class="details">Institution</span>
                <!-- <input type="text" placeholder="Enter your Institution name"> -->

                <select name="institution" id="institution" name= "institution" required>
                    <option value="Unilag">University of Lagos, Lagos</option>
                    <option value="UI">University of Ibadan, Ibadan</option>
                    <option value="OAU">Obafemi Awolowo University, Ile-Ife</option>
                </select>
            </div>

            <!-- <div class="gender-details">
                <span class="gender-titles"><strong></strong>Gender</span>
                <div class="category">
                 
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>

                </div> -->
                

            <div class="input-box">
                <span class="details password">Password</span>
                <input type="password" placeholder="Choose min of 6 characters" name="password" required>
            </div>

            <div class="input-box">
                <span class="details password">Confirm Password</span>
                <input type="password" placeholder="Enter the Password again" name="passwordConfirm" required>
            </div>

            <div class="button">
                <input type="submit" value="Sign up" name="submit">
            </div>
        </div>
        </div>
    </section>


    </form>


</body>
</html>