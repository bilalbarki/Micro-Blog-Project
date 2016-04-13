<?php 
   include_once "model/user.php";
   include_once "model/status.php";
   if (isset($_COOKIE['login'])){
       $current_user = fromCookie($_COOKIE['login'],$users);
       $full_name = $current_user['full_name'];
   } else{
   	$full_name="there";
   }
   $banner=false;
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Some Meta tags for SEO-->
      <meta name="keywords" content="statuses, status, user" />
      <meta name="description" content="This page shows all the statuses the user posted" />
      <meta name="author" content="Impossible Octopus Fitness" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- All css files to be merged together for publishing in future to minimize http requests -->
      <link rel="stylesheet" type="text/css" href="styles/reset.css" />
      <link rel="stylesheet" type="text/css" href="styles/styles.css" />
      <link rel="stylesheet" type="text/css" href="styles/header.css" />
      <link rel="stylesheet" type="text/css" href="styles/article.css" />
      <link rel="stylesheet" type="text/css" href="styles/aside.css" />
      <link rel="stylesheet" type="text/css" href="styles/footer.css" />
      <link rel="stylesheet" type="text/css" href="styles/buttons.css" />
      <link rel="stylesheet" type="text/css" href="styles/myStatus.css" />
      <link rel="stylesheet" type="text/css" href="styles/seo.css" />
      <link rel="stylesheet" type="text/css" href="styles/mediaQueries.css" />
      <script type="text/javascript" src="js/behavior.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
      <title>HaShare</title>
   </head>
   <body>
      <div id="maincontainer">
         <!--main container that contains every other body elements-->
         <?php include_once "views/header.php"; ?>
         <div class="padding">
            <!--padding for main tag-->
            <main>
               <article>
                  <div class="asideGeneralBlock singleProfileName">
                     <!--User's own name-->
                     <h2>John Smith</h2>
                  </div>
                  <div class="asideGeneralBlock asideUsers">
                     <!--User's own picture, bio, etc. on the left side.-->				
                     <div class="singleProfileAside">
                        <a href="about.html"><img class="singleProfilePic" src="images/photo1.jpg" alt="" /></a>
                        <h3 class="grey singleProfileAddress">&nbsp;@DavidEicher&nbsp;</h3>
                        <p>I seriously don't know what to write here <a href="about.html">about me</a></p>
                        <button class="followButton profileMargin"><span class="followIcon profileMargin"></span><b>Follow</b></button>
                     </div>
                     <p><a href="#" class="aHoverUnderline">Find Friends</a></p>
                  </div>
               </article>
               <aside>
                  <div class="blockFeed">
                     <!--Contains user's own statuses-->
                     <?php
                        foreach ($status as $st){
                          foreach ($users as $value){
                            if ($st['user_id']==$value['id']){
                              status_template($value['full_name'], $value['id'], $st['status'], $value['img']);
                              break;
                            }
                          }
                        }
                        ?>
                  </div>
                  <div class="beta" role="banner">
                     <!--always stays at bottom right corner -->
                     <p>This website is in beta</p>
                  </div>
               </aside>
            </main>
            <?php include_once "views/footer.php"; ?>
         </div>
      </div>
   </body>
</html>