<?php
if(isset($_POST['submit'])){
    $email=$_POST['email']; "<br";
    echo 'welcome to jobify';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobify</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="navbar">
            <div class="logo"><a href="#">Jobify.</a></div>

            <ul>
                <a href="index.php"><li>home</li></a>
                <a href="jobs.php"><li>jobs</li></a>
                <a href="apply.php"><li>apply</li></a>
                <a href="contact.php"><li>contact</li></a>
                <a href="registor.php"><li>register now</li></a>
            </ul>

        </header>
        <div class="home-area">
            <div class="image-area">
                <img src="img/Men Suits 2 Piece One Button Slim Fit Suits Formal Wedding Suits Blue Partywear Coat Pant Suit.jpg"  class="home-image">
            </div>
            <div class="words-area">
                <h1>jobify</h1>
            <h3>the best online job portal in kenya,
                 </h3>
                 <h2>welcome to jobify</h2>
                 <a href="jobs.php"><button>Explore</button></a>
            </div>

            <form class="home-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <h2>log in</h2><br>
                <label>email</label><br>
                <input type="email" placeholder="email" class="text" name="email"><br>

                <label>password</label><br>
                <input type="password" placeholder="password" class="password" name="password"><br>

                <label>Confirm password</label><br>
                <input type="password" placeholder="confirm password" class="password" name="confirmpassword"><br>

                
                <input type="submit"  class="button"  name="submit"><br>

            </form>
            
        </div>
        <div class="jobs-title">
            <h2>jobs available</h2>
        </div>
        <main class="main-area">
           
            <div class="home-jobs">
                <img src="img/Captioning Jobs - Make Money Captioning Videos at Home $1,500_mo.png">
                <h2>ksh.700 per hour</h2><br>
                <p>transcripting netflix</p>
                <a href="apply.php"><input type="submit"  class="button"  value="Apply now" name="Apply now"></a>
            </div>
            <div class="home-jobs">
                <img src="img/50 Non-Phone Work-From-Home Jobs (Hiring Now!).jpg">
                <h2>ksh.5000 weekly</h2><br>
                <p>online amazon jobs</p>
                <a href="apply.php"><input type="submit"  class="button" value="Apply now" name="Apply now"></a>
            </div>
            <div class="home-jobs">
                <img src="img/20 Online At Home Mom Jobs That Make Upto $8000 Per Month.jpg">
                <h2>ksh.200 per hour</h2><br>
                <p>captioning netflix</p>
                <a href="apply.php"><input type="submit"  class="button" value="Apply now" name="Apply now"></a>
            </div>
            <div class="home-jobs">
                <img src="img/10 Online Jobs with Amazon to Work from Home in 2022.jpg">
                <h2>ksh.200 per hour</h2><br>
                <p>online jobs</p>
                <a href="apply.php"><input type="submit"  class="button" value="Apply now" name="Apply now"></a>
            </div>
            
            
            
        </main>
        <div class="jobs-title">
            <h2>jobs available</h2>
        </div>
        <main class="main-area">
           
            <div class="home-jobs">
                <img src="img/Captioning Jobs - Make Money Captioning Videos at Home $1,500_mo.png">
                <h2>ksh.200 per hour</h2><br>
                <p>captioning jobs</p>
                <a href="apply.php"><input type="submit"  class="button" value="Apply now"  name="Apply now"></a>
            </div>
            <div class="home-jobs">
                <img src="img/50 Non-Phone Work-From-Home Jobs (Hiring Now!).jpg">
                <h2>ksh.2000 weekly</h2><br>
                <p>online amazon jobs</p>
                <a href="apply.php"><input type="submit"  class="button"  value="Apply now" name="Apply now"></a>
            </div>
            <div class="home-jobs">
                <img src="img/20 Online At Home Mom Jobs That Make Upto $8000 Per Month.jpg">
                <h2>ksh.5000 weekly</h2><br>
                <p>transcriting netflix</p>
                <a href="apply.php"><input type="submit"  class="button"  value="Apply now" name="Apply now"></a>
            </div>
            <div class="home-jobs">
                <img src="img/10 Online Jobs with Amazon to Work from Home in 2022.jpg">
                <h2>ksh40000 monthly</h2><br>
                <p>youtube channels</p>
                <a href="apply.php"><input type="submit"  class="button"  value="Apply now" name="Apply now"></a>
            </div>
            
            
            
        </main>

        <footer class="links">
            <div class="icons">
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </footer>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>