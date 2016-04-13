<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Share Site!</title>
      <meta name="keywords" content="clone, twitter" />
      <meta name="description" content="Login Page" />
      <meta name="author" content="Bilal" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- All css files to be merged together for publishing in future to minimize http requests -->
      <link rel="stylesheet" type="text/css" href="styles/reset.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="styles/login.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <header>
         <h1><span class="bold">PLEASE</span> LOGIN</h1>
      </header>
      <div class="login_form">
         <form action="index.php" method="post">
            <div class="block">
               <div class="username_addon"><span class="user_icon"></span></div>
               <input autofocus type="text" name="login" placeholder="Username" aria-label="username">
            </div>
            <div class="block">
               <div class="username_addon"><span class="password_icon"></span></div>
               <input type="password" name="password" placeholder="Password" aria-label="password">
            </div>
            <div class="block_s"><button type="submit" name="submit" aria-label="submit">Submit &rarr;</button></div>
         </form>
      </div>
   </body>
</html>