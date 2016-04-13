<?php 
   include_once "model/user.php";
   function userExists($login, $password, $users){
     foreach ($users as $value){
       if ( $login == $value['login'] && $password == $value['password'] ) return $value;
     }
     return false;
   }
   
   if (isset($_POST['submit'])){
     $username = $_POST['login'];
     $password = $_POST['password'];
   
     $current_user = userExists($username,$password,$users);
     if ($current_user){
       $full_name = $current_user['full_name'];
       $banner=false;
       setcookie( "login", $current_user['login'], time()+(60*60*24*7) );  //set cookie
     } else {
         $full_name = "there";
         $banner = true;
       }
   
   } elseif (isset($_COOKIE['login'])){
       $current_user = fromCookie($_COOKIE['login'],$users);
       $username = $current_user['login'];
       $full_name = $current_user['full_name'];
       $banner = false;
   } else {
     $username = "";
     $password = "";
     $full_name = "there";
     $banner=false;
   }
   
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Share Site!</title>
      <!--Some Meta tags for SEO-->
      <meta name="keywords" content="clone, twitter" />
      <meta name="description" content="This is the main page for my twitter clone" />
      <meta name="author" content="Bilal and Mason" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- All css files to be merged together for publishing in future to minimize http requests -->
      <link rel="stylesheet" type="text/css" href="styles/reset.css" />
      <link rel="stylesheet" type="text/css" href="styles/styles.css" />
      <link rel="stylesheet" type="text/css" href="styles/header.css" />
      <link rel="stylesheet" type="text/css" href="styles/article.css" />
      <link rel="stylesheet" type="text/css" href="styles/aside.css" />
      <link rel="stylesheet" type="text/css" href="styles/footer.css" />
      <link rel="stylesheet" type="text/css" href="styles/buttons.css" />
      <link rel="stylesheet" type="text/css" href="styles/seo.css" />
      <link rel="stylesheet" type="text/css" href="styles/mediaQueries.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/behavior.js"></script>
      <script type="text/javascript" src="js/post_a_status.js"></script>
      <script type="text/javascript" src="js/reply.js"></script>
      <script type="text/javascript" src="js/toggle.js"></script>
      <script type="text/javascript" src="js/load_more.js"></script>
      <script type="text/javascript" src="js/ajax.js"></script>
      <!--<script type="text/javascript" src="js/sticky_smart_header.js"></script>-->
      <script type="text/javascript" src="js/geolocation.js"></script>
      <script type="text/javascript" src="js/geolocation_progressive_enhancement.js"></script>
   </head>
   <body>
      <div id="maincontainer">
         <!--main container that contains every other body elements-->
         <?php include_once "views/header.php"; ?>
         <div class="padding">
            <!--padding for main tag-->
            <main>
               <?php include_once "views/article.php"; ?>
               <?php include_once "views/aside.php"; ?>
            </main>
         </div>
         <?php include_once "views/footer.php"; ?>
      </div>
   </body>
</html>