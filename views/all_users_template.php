<?php 
function template($full_name, $id, $info, $img){   //template for displaying all users
	echo "<div class='notableUsersList'>
   <a href='about.html'><img src='images/{$img}' alt='isttt' /></a>
   <div class='userInfoAndButtons'>
      <div class='followMessageMore'>
         <button class='followButton'><span class='followIcon'></span><b>Follow</b></button>
         <button class='followButton'><span class='messageIcon'></span><b>Message</b></button>
         <button class='followButton'><span class='downIcon'></span></button>
      </div>
      <div class='userInfo'>
         <h2><b><a href='#' class='aHoverColorUnderline'>{$full_name}</a></b><span class='grey'>&nbsp;@{$id}&nbsp;</span></h2>
         <p>{$info}</p>
      </div>
   </div>
</div>";
}

?>