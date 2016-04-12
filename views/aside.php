<aside>
          <div class="asideGeneralBlock asideUsers" role="complementary">
            <!--Aside Block-->

            <div class="notableUsersHeading">
              <!--Heading for first block of aside-->
              <p class="grey">Who to follow</p>
              <!--Grey class is for grey text color-->
              <ul>
                <li><a href="#" class="aHoverUnderline">Refresh</a></li>
                <li>&nbsp;-&nbsp;</li>
                <li><a href="#" class="aHoverUnderline">View all</a></li>
              </ul>
            </div>
            <div class="notableUsersList">
              <!--Lists related users that the user could knw -->
             <img src="images/photo1.jpg" alt="User Image" />

              <h2 class="bold"><a href="#" class="aHoverColorUnderline">David Eicher</a><span class="grey">&nbsp;@DavidEicher&nbsp;</span></h2>

              <p><?php echo "Your rot13’d login is: " . str_rot13($username);?><br /><?php echo "The length of your login is: " . strlen($username)?></p>

              <button class="followButton"><span class="followIcon">&nbsp;</span>Follow</button>


            </div>

            <div class="notableUsersList">
              <img src="images/photo2.jpg" alt="User Image" />

              <h2 class="bold"><a href="#" class="aHoverColorUnderline">Chris Wayne</a><span class="grey">&nbsp;@ChrisWayne&nbsp;</span></h2>

              <p>Fitness is cool</p>

              <button class="followButton"><span class="followIcon">&nbsp;</span>Follow</button>


            </div>

            <div class="notableUsersList">
             <img src="images/photo3.jpg" alt="User Image" />

              <h2 class="bold"><a href="#" class="aHoverColorUnderline">Sarah Kane</a><span  class="grey">&nbsp;@SarahKane&nbsp;</span></h2>

              <p>I am impossible</p>

              <button class="followButton"><span class="followIcon">&nbsp;</span>Follow</button>


            </div>
            <p><a href="#" class="aHoverUnderline">Find Friends</a></p>

          </div>

          <div class="asideGeneralBlock asideLinks">
            <!--Sitemap-->
            <ul>
              <li>&#169;&nbsp;HaShare</li>
              <li>Impossible Octopus Fitness</li>
              <li>Help</li>
              <li>Terms</li>
            </ul>
          </div>

          <div class="beta" role="banner">
            <!--always stays at bottom right corner -->
            <p>This website is in beta</p>
          </div>
        </aside>