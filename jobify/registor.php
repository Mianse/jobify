<?php
if(isset($_POST['submit'])){
    $firstname=filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname=filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_SPECIAL_CHARS);
    
    echo 'welcome to jobify';
}
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
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
        <form class="register-area" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
          <h2>register form</h2>
          <br>
    
         
          <input type="text" placeholder="first name" name="firstname" > <br>
          <input type="text" placeholder="last name" name="lastname"><br>
          <input type="text" placeholder="email" > <br>
          <input type="text" placeholder="confirm email" > <br>
          <input type="password" placeholder="create password" > <br>
          <input type="password" placeholder="confirm password" ><br> 
          <input type="submit" value="register now" name="submit" >
    
            
    
        </form>
            
        </div>
        <div class="jobs-title">
            <h2>jobs available</h2>
        </div>
        <
    
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

