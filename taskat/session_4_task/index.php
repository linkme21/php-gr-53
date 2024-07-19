



<?php
// if (isset($_GET{'sign'})) {
    
//     if (!empty($username)) {
//         if (strlen($username) >= 5) {
//             if (preg_match("/senior/",$username)) {
//             // if (preg_match("/^senior/",$username)) {
//             // if (preg_match("/senior$/",$username)) {
//                 $username = $_GET['username'];
//                 $Password = $_GET['Password'] ;
//                 # code...
//                 echo "$username $Password";
//             }
//             # code...
//         }
        
    
//     }
//     # code...
// }
$errors = [];

if (isset($_GET{'sign'})) {
    $flag = 0;
        $username = $_GET['username'];
        $Password = $_GET['Password'] ;
        $Email = $_GET['Email'];
    if (!empty($username)) {
        $flag++;
    }else{
        $errors["un_empty"]= "error_un";
    }
    if (strlen($username) >= 5) {
        $flag++;
    }else{
        $errors["un_len"]= "error_un";
    }
    if (preg_match("/mazen/",$username)) {
        $flag++;
    }else{
        $errors["un_"] = "error_un";
    }
    if (!empty($Email)) {
        $flag++;
    }else{
        $errors["error p"] = "error_Email";
    }
    if (strlen($Email) >= 4) {
        $flag++;
    }else{
        $errors ["ps-len"]= "error_Email";
    }
    if (preg_match('/[a-z][@]*$/', $Email)) {
        $flag++;
    }else{
        $errors[ "error lin"]= "error_Email@";
    }
    if (!empty($Password)) {
        $flag++;
    }else{
        $errors["error p"] = "error_un";
    }
    if (strlen($Password) >= 4) {
        $flag++;
    }else{
        $errors ["ps-len"]= "error_ps";
    }
    if (preg_match('/^[1-9][0-9]*$/', $Password)) {
        $flag++;
    }else{
        $errors[ "error lin"]= "error_ps";
    }
    // if (preg_match("/senior/",$username)) {
    //     $flag++;
    // }else{
    //     echo "error p";
    // }
    if ($flag == 9) {
        # code...
        
        echo "$username $Password $Email";
    }else{
        $errors ["error f   "]= "error_f";
    }

}

// if (isset($_GET{'sign'})) {
//     $flag = 0;
//     $username = $_GET['username'];
//         $Password = $_GET['Password'] ;
//     if (!empty($username)) {
//         $flag++;
//     }else{
//         echo "error";
//     }
//     if (strlen($username) >= 5) {
//         $flag++;
//     }else{
//         echo "error";
//     }
//     if (preg_match("/mazen/",$username)) {
//         $flag++;
//     }else{
//         echo "error";
//     }
//     // if ($flag == 3) {
//     //     # code...
//     //     $username = $_GET['username'];
//     //     $Password = $_GET['Password'] ;
//     //     echo "$username $Password";
//     // }

//     if (!empty($Password)) {
//         $flag++;
//     }else{
//         echo "error p";
//     }
//     if (strlen($Password) >= 4) {
//         $flag++;
//     }else{
//         echo "error p";
//     }
//     if (preg_match('/^[1-9][0-9]*$/', $Password)) {
//         $flag++;
//     }else{
//         echo "error lin   ";
//     }
//     // if (preg_match("/senior/",$username)) {
//     //     $flag++;
//     // }else{
//     //     echo "error p";
//     // }
//     if ($flag == 6) {
//         # code...
        
//         echo "$username $Password";
//     }else{
//         echo "error f   ";
//     }

// }


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

    

<div class="container">
<form class="row g-3" action="" method="GET">
    
<?php foreach ($errors as $error):?>
    
    <h4> <?=  $error ?></h4>
    <?php endforeach ?>
    
    
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
  <!-- pattern="\d+" -->
  <div class="col-12">
    <button type="submit" name="sign" class="btn btn-primary">Sign in</button>
  </div>
</form>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>