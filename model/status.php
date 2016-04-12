<?php
$status = [
    array("id" => 1, "user_id" => 1, "status" => "Just adding more text so that the text smoothly aligns itself when the image height is exceeded by the text. I hope this much text is sufficient to do that. What if you make the text look more longer. Even longer than this, lorem ipsum dadium, noficaloy Ya it works! So it seems the text is still not under the image so i'll just add more text to it, i hope it works this time!"),
    array("id" => 2, "user_id" => 2, "status" => "Found amazing resources about advance CSS techniques just by googling it. Loving it!"),
    array("id" => 3, "user_id" => 3, "status" => "Watched an amazing movie! You guys should also check out too! So this movie revolves around batman vs superman. Even longer than this, lorem ipsum dadium, noficaloy Ya it works! constant, and we are moving zing resources about advance smoothly aligns itself when nd these thoughts! Feeling like Aris niques just by googling!"),
    array("id" => 4, "user_id" => 1, "status" => "Just adding more text so that the text smoothly aligns itself when the image height is exceeded by the text. I hope this much text is sufficient to do that. What if you make the text look more longer. Even longer than this, lorem ipsum dadium, noficaloy Ya it works! So it seems the text is still not under the image so i'll just add more text to it, i hope it works this time!"),
    array("id" => 5, "user_id" => 2, "status" => "Found amazing resources about advance CSS techniques just by googling it. Loving it!"),
    array("id" => 6, "user_id" => 3, "status" => "Watched an amazing movie! You guys should also check out too! So this movie revolves around batman vs superman. Even longer than this, lorem ipsum dadium, noficaloy Ya it works! constant, and we are moving zing resources about advance smoothly aligns itself when nd these thoughts! Feeling like Aris niques just by googling!"),
    array("id" => 7, "user_id" => 1, "status" => "Just adding more text so that the text smoothly aligns itself when the image height is exceeded by the text. I hope this much text is sufficient to do that. What if you make the text look more longer. Even longer than this, lorem ipsum dadium, noficaloy Ya it works! So it seems the text is still not under the image so i'll just add more text to it, i hope it works this time!"),
    array("id" => 8, "user_id" => 2, "status" => "Found amazing resources about advance CSS techniques just by googling it. Loving it!"),
    array("id" => 9, "user_id" => 3, "status" => "Watched an amazing movie! You guys should also check out too! So this movie revolves around batman vs superman. Even longer than this, lorem ipsum dadium, noficaloy Ya it works! constant, and we are moving zing resources about advance smoothly aligns itself when nd these thoughts! Feeling like Aris niques just by googling!"),
  ];
?>

<?php

function status_template($full_name, $id, $status, $img){
  echo "<div class='post'>
              <!--div that contains the individual post-->
              <div class='postHeader'>
                <img src='images/{$img}' alt='User Image' />
                <h2 class='bold'><a href='#' class='aHoverColorUnderline'>{$full_name}</a><span class='grey'>&nbsp;@{$id}&nbsp;<span class='time'>1h</span></span></h2>
              </div>
              <p>{$status}</p>

              <div class='clearFloat'></div>
              <ul class='postSocialButtons'>
                <!--Piping is used-->
                <li><button aria-label='reply' type='button' class='replyIcon replyCSS' data-id='reply_1'>Reply</button></li>
              </ul>
              <div class='replyCode' role='banner'>
                <noscript>
                  <div class='replyBox'>
                    <form  method='post'>
                      <textarea aria-label='yourreply' class='tweetBody' placeholder='Write your reply here'></textarea>
                      <div class='flex'>
                        <button class='sendButton' type='submit'>Reply</button>
                      </div>
                    </form>
                  </div>
                </noscript>
              </div>
            </div>";
}

?>