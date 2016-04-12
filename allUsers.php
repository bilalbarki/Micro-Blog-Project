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

<?php include_once "model/all_users_template.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Some Meta tags for SEO-->
	<meta name="keywords" content="users" />
	<meta name="description" content="Shows all registered users for twitter clone" />
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
	<link rel="stylesheet" type="text/css" href="styles/allUsers.css" />
	<link rel="stylesheet" type="text/css" href="styles/mediaQueries.css" />

	<script type="text/javascript" src="js/behavior.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<title>Share Site!</title>

</head>
<body>

	<div id="maincontainer">	<!--main container that contains every other body elements-->
		
		<?php include_once "views/header.php"; ?>
		<div class="padding">	<!--padding for main tag-->
		<main>
			<article>
				<div class="AllUsersList">	<!--Contains all users-->
					
						<div class="notableUsersHeading">
							<p class="grey">All Users</p>
							<ul>
		  						<li><a href="#" class="aHoverUnderline" style="color:#0084B4">Refresh</a></li>
		  						<li>-</li>
		  						<li><a href="#" class="aHoverUnderline" style="color:#0084B4">Invite friends</a></li>
							</ul>
						</div>
						<?php
						foreach ($users as $value){
    						template( $value['full_name'], $value['id'], $value['info'], $value['img'] );
  						}
						?>
						
					
				</div>
				
			</article>

			<aside>

				<div class="blockFeed asideUsers">	<!--Trending Posts Feed block-->
					<h3 class="grey">Trending Posts</h3>
					 <?php
					 $i=0;
            foreach ($status as $st){
              foreach ($users as $value){
                if ($st['user_id']==$value['id']){
                  status_template($value['full_name'], $value['id'], $st['status'], $value['img']);
                  $i++;
                  break;
                }
              }
              if ($i==3){
                	break;
                }
            }
            ?>
				</div>
				<div class="asideGeneralBlock asideLinks"> <!--Sitemap-->
					<ul>
		  					<li>&#169;&nbsp;HaShare</li>
		  					<li><a href="about.html" class="aHoverUnderline">Impossible Octopus Fitness</a></li>
		  					<li><a href="#" class="aHoverUnderline">Help</a></li>
		  					<li><a href="#" class="aHoverUnderline">Terms</a></li>
		  					<li><a href="#" class="aHoverUnderline">Privacy</a></li>
		  					<li><a href="#" class="aHoverUnderline">Advertise</a></li>
		  					<li><a href="#" class="aHoverUnderline">Developers</a></li>
		  					<li><a href="#" class="aHoverUnderline">Cookies</a></li>
		  					<li><a href="#" class="aHoverUnderline">Lorem</a></li>
		  					<li><a href="#" class="aHoverUnderline">Ipsem</a></li>
		  					<li><a href="#" class="aHoverUnderline">Amet</a></li>
		  					<li><a href="#" class="aHoverUnderline">Adipiscing</a></li>
		  					<li><a href="#" class="aHoverUnderline">Tempus</a></li>
					</ul>
				</div>
				<div class="beta" role="banner">
            <!--always stays at bottom right corner -->
            <p>This website is in beta</p>
          </div>
			</aside>
				
		</main>
	
	</div>
	<?php include_once "views/footer.php"; ?>
</div>
   
</body>
</html>