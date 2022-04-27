<!DOCTYPE html>
<html lang="ir">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
    
    <title>login and sign up form </title>
</head>
<body>
  <form action="save.php" method="post">
      
    <img src="./icon/login_icon_137429.png" alt="icon">
    <div class="input-group">
       <input type="text" id="user-name" name="user_1" required autocomplete="off">
       <label for="user-name">user name</label>
    </div>
    <div class="input-group">
        <input type="password" id="user-pass" name="pass_1" required autocomplete="off">
        <label for="user-pass">password</label>
    </div>
    <input type="submit" id="submit" value="login">
   </form>
   <script src="js/formjs.js"></script>
 </body>
</html> 