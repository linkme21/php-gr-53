<?php

// var_dump ($_GET['username']);

$username = $_GET['username'];
$Password = $_GET['Password'] ;

$users =[
    ['username'=>'zoz', 'Password'=> '222'],
    ['username'=>'ahmed', 'Password'=> '2244'],
    ['username'=>'abdelnaser','Password'=> '123'],
    ['username'=>'mazen', 'Password'=> '882']
];

$name = 0 ;

foreach ($users as $user){
    if ($user['username'] == $username && $user['Password'] == $Password){
        // echo $_GET['username'],$_GET['Password'] ;
        
        $name = 1;
        
    }else {
        
        // echo "pleass try again";
        
    }
}
if ($name == 1 ) {
    # code...
    header ('location:index.php?username='.$username.'');

    
};






?>

<!-- 
<body>
    <form  method="GET" action="">
    <button name="again" > pleass try again  </button>
    </form>
</body>
