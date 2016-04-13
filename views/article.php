<?php 
   include_once "model/status.php";
   ?>
<article>
   <div id="post_a_status" role="banner">
      <noscript>
         <div id="tweetBox">
            <!--<label for="statusToggle" id="closeButton"><span></span></label>-->
            <form  method="post">
               <textarea aria-label="yourreply" class="tweetBody" placeholder="What's on your mind?"></textarea>
               <div class="flex">
                  <div></div>
                  <button id="sendButton" class="sendButton" type="submit">Post</button>
               </div>
            </form>
         </div>
      </noscript>
   </div>
   <div class="blockFeed" role="main">
      <!--div where the news feed is shown-->
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
      <div id="moreHere" aria-live="polite"></div>
   </div>
   <button aria-label="see more statuses" type="button" id="loadMore">See more statuses!</button>
</article>