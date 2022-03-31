<?php
$site_key = '--- place site key ---';
?>
<html>
  <head>
    <title>Google recapcha demo - Codeforgeek</title>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
  </head>
  <body>
    <h1>Google reCAPTHA Demo</h1>
    <form id="comment_form" action="form.php" method="post">
      <input type="email" placeholder="Type your email" size="40"><br><br>
      <textarea name="comment" rows="8" cols="39"></textarea><br><br>
      <input type="submit" name="submit" value="Post comment"><br><br>
      <div class="g-recaptcha" data-sitekey="<?=$site_key?>"></div>
    </form>
  </body>
</html>
