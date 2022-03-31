# googlerecaptchav2
 googlerecaptchav2

Google Recaptcha V2 Implementation in PHP

Steps to use

1. index.php 

  <body>
    <h1>Google reCAPTHA Demo</h1>
    <form id="comment_form" action="form.php" method="post">
      <input type="submit" name="submit" value="Post comment"><br><br>
      <div class="g-recaptcha" data-sitekey="<?=$site_key?>"></div>
    </form>
  </body>


2. form.php

<?php
$email;
$comment;
$captcha;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['comment'])) {
    $comment = $_POST['comment'];
}
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
if (!$captcha) {
    echo 'Please check the the captcha form.';
    exit;
}

$secretKey = "--- place secret key --";

$ip = $_SERVER['REMOTE_ADDR'];
// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response, true);
print_r($responseKeys);
// should return JSON with success as true
if ($responseKeys["success"]) {
    echo 'Thanks for posting comment';
} else {
    echo 'You are spammer ! Get the @$%K out';
}
?>
