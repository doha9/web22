<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include 'style.php'?> 
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if($_SERVER['REQEST_METHOD']=='post'){/*
$email=$_post['email'];
$password=$_post['password'];
if(isset($_POST['agree'])){
    $agree=true;
}else{ $agree=false;}

*/
if(isset($_POST['email'])&& isset($_POST['password'])){
  $email=$_post['email'];
  $password=$_post['password'];
if(empty($email)&&empty($password))
if(filter_var($email,FILTER_VALIDATE_EMAIL)){}
}

}
?>
<?php  include 'js.php'?> 
</body>
</html>