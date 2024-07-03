<?php 

var_dump($_GET);
var_dump($_POST);

// if (isset($_GET['submit']) ) {
//     var_dump($_GET['ur'],$_GET['pw']);
    
//     echo $_GET['ur'] , $_GET['pw'];
//     // each $_GET['pw'];
// }
 
if (isset($_POST['ur'])) {
    # code...
    echo $_POST['ur'];
    echo $_POST['pw'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" placeholder="username" name="ur">
    <input type="text" Placehordar="pasward" name="pw">
    
    <button name="submit">login</button>
    </form>
</body>
</html>