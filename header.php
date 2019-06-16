<?php 
  // $base = __DIR__ ; 
  // $base = "http://127.0.0.1/YallaNo5rog/" ;
  $base = "https://yallano5rog.herokuapp.com/" ;  

  if ($page_title == null)
  $page_title = "يلا نخرج" ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?php echo $base."Public/css/animate.css"?>>  
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">  
    <link rel="stylesheet" href=<?php echo $base."Public/css/style.css" ?> >  
    <link rel="shortcut icon" href=<?php echo $base."Public/images/favicon.ico" ?> >  

    <link href="https://fonts.googleapis.com/css?family=El+Messiri&display=swap" rel="stylesheet">
    
    <title><?php echo $page_title ?></title>
</head>
<body>
    
<?php include ('navbar.php') ?>