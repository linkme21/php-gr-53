
<?php

// $errors = [];

// if (isset($_GET{'sign'})) {
//     $flag = 0;
//         $username = $_GET['username'];
//         $Password = $_GET['Password'] ;
//         $Email = $_GET['Email'];
//     if (!empty($username)) {
//         $flag++;
//     }else{
//         $errors["un_empty"]= "error_un";
//     }
//     if (strlen($username) >= 5) {
//         $flag++;
//     }else{
//         $errors["un_len"]= "error_un";
//     }
//     if (preg_match("/mazen/",$username)) {
//         $flag++;
//     }else{
//         $errors["un_"] = "error_un";
//     }
//     if (!empty($Email)) {
//         $flag++;
//     }else{
//         $errors["error p"] = "error_Email";
//     }
//     if (strlen($Email) >= 4) {
//         $flag++;
//     }else{
//         $errors ["ps-len"]= "error_Email";
//     }
//     if (preg_match('/[a-z][@]*$/', $Email)) {
//         $flag++;
//     }else{
//         $errors[ "error lin"]= "error_Email@";
//     }
//     if (!empty($Password)) {
//         $flag++;
//     }else{
//         $errors["error p"] = "error_un";
//     }
//     if (strlen($Password) >= 4) {
//         $flag++;
//     }else{
//         $errors ["ps-len"]= "error_ps";
//     }
//     if (preg_match('/^[1-9][0-9]*$/', $Password)) {
//         $flag++;
//     }else{
//         $errors[ "error lin"]= "error_ps";
//     }
//     // if (preg_match("/senior/",$username)) {
//     //     $flag++;
//     // }else{
//     //     echo "error p";
//     // }
//     if ($flag == 9) {
//         # code...
        
//         echo "$username $Password $Email";
//     }else{
//         $errors ["error f   "]= "error_f";
//     }

// }


// var_dump ($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <h3><?=$_POST['username']; ?></h3>
  <h3><?=$_POST['Password']; ?></h3>
  <h3><?=$_POST['Email']; ?></h3>
  <h3><?=$_POST['color']; ?></h3>
  <h3><?=$_POST['gender']; ?></h3>
  <h3><?=$_POST['file']; ?></h3>
  <h3><?=$_POST['price']; ?></h3>
  <!-- <h3></h3> -->
  <!-- <h3></h3> -->
  <?php
 
// echo $_POST['course[]'];
 foreach ($_POST['course'] as $course) {
    echo $course;
};
foreach ($_POST['lap'] as $lap) {
    echo  $lap;
};


$files = $_FILES ['myimage'];


$filename = uniqid().  $files['name'];
$filetmp_name = $files['tmp_name'];
// var_dump ($_FILES);
move_uploaded_file($filetmp_name , 'uploades/' .$filename );
// echo $filetmp_name;
    ?>

<div class="container">
<form class="row g-3" action="" method="post" enctype="multipart/form-data">
    

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">username</label>
    <input type="text" class="form-control" name="username" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control"  name="Password" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="" class="form-control" name="Email" id="inputEmail4">
  </div>
  <div class="col-md-6">
    
    <input type="color" class="" name="color" >
  </div>
  <div class="col">
    
    <input type="radio" class="" name="gender" value="male" >male
    <input type="radio" class="" name="gender" value="female" >female
  </div>
  <div class="col">
    
    <input type="checkbox" class="" name="course[]" value="html"  >html
    <input type="checkbox" class="" name="course[]" value="css"  >css
    <input type="checkbox" class="" name="course[]" value="js"  >js
    </div>
    
    <div class="col-md-6">
    <select name="lap[]" id="" multiple>

    <option value="111">lop num1</option>
    <option value="222">lop num2</option>
    <option value="333">lop num3</option>
    <option value="444">lop num4</option>
    <option value="555">lop num5</option>

    </select>
</div>

<div class="col-md-6">
    
    
    <input type="file" class="form-control" name="myimage" >
    <!-- <input type="range" class="" name="price" > -->
  </div>
<img src="uploades/<?=$filename?>" alt="">




  <!-- pattern="\d+" -->
  <div class="col-12">
    <button type="submit" name="sign" class="btn btn-primary">Sign in</button>
  </div>
</form>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>