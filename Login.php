<!DOCTYPE html>
<html>
<head>
<style>
    
body {
  background-color: #e6edf1;
  font-family: sans-serif;
  font-size: 16px;
  padding: 0;
  margin: 0;
}


.login {
  width: 400px;
  background: #f1f1f1;
  border-radius: 10px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  top: 50%;
  left: 50%;
  /* height: 100vh; */
  /* position: absolute; */
  /* transform: translate(-50%, -50%); */
  text-align: center;
}


.forms{
    
    height: 90vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.login h1 {
  font-size: 24px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 20px;
}

.login input[type="text"],
.login input[type="password"] {
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 1px solid #b4b4b4;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: #505050;
  border-radius: 24px;
  transition: 0.25s;
}

.login input[type="text"]:focus,
.login input[type="password"]:focus {
  width: 280px;
  border-color: #2ecc71;
}

.login input[type="submit"] {
  background: #2ecc71;
  border: 0;
  width: 100%;
  padding: 14px 0;
  font-size: 14px;
  color: #fff;
  cursor: pointer;
  border-radius: 24px;
  margin-top: 10px;
  transition: 0.25s;
}

.login input[type="submit"]:hover {
  background: #16a085;
}
</style>
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
    require './Header.php'
    ?>
    <section class="forms">



    <div class="login">
        <h1>Login</h1>
        <form action="form.php" method="post" >
            <input type="text" name="user" placeholder="Username" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</section>

    <?php
    require "./Footer.php";
    ?>



</body>
</html>