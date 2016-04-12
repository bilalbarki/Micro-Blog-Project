<header id="header">
    <?php
    if ($banner){
     echo "<div class = 'banner' style='max-width:992px; background-color: red; text-align: center; font-weight:bold; font-size:1.1em; height: 15px;'>Invalid credentials</div>";
    }
    ?>
      <div class="paddingHeader" role="banner">
        <!--paddingHeader for defining header padding-->
        <div class="logoAndTagline">
          <button aria-label="navigationbutton" id="nav-button"><span class="menuIcon">I</span></button>
          <div class="logoTagline">
            <a href="index.html"><img src="images/logo.png" alt="Share Site Logo" class="logo" /></a>


            <h1 id="tagLine" class="bold"><?php echo "Hello, {$full_name}!";

            ?></h1>
          </div>
        </div>
        <div class="supernav">
          <div class="upperNav" role="navigation">
            <!--UpperNav contains Logout, edit my profile, picture and searchbar-->

            <ul class="pipes">
              <!--piping is used here to add | between the li elements -->
              <li><a href="login.php" class="aHoverUnderline">Log In</a></li>

              <li><a href="logout.php" class="aHoverUnderline">Logout</a></li>
            </ul>
          </div>

          <div class="lowerNav" role="navigation">
            <!--lowerNav contains menu buttons such as Home, All Users-->
            <ul>
              <!--class "navButtonCurrentlyViewing" is used to make the lower border blue of the currently active menu button-->
              <li><a href="index.php" class="navButton navButtonCurrentlyViewing"><span class="homeIcon">&nbsp;</span>Home</a></li>
              <li><a href="myStatus.php" class="navButton"><span class="statusesIcon">&nbsp;</span>My Status</a></li>
              <li><a href="allUsers.php" class="navButton"><span class="usersIcon">&nbsp;</span>All Users</a></li>
            </ul>
          </div>
        </div>

      </div>
    </header>