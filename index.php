<?php
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  $badWord = $_GET['badword'];

  $censorship = str_repeat('*', strlen($badWord));

  $badWordArray = array(
    $badWord,
    strtoupper($badWord),
    ucfirst($badWord),
    strtolower($badWord),
    ucfirst(strtolower($badWord))
  );

  $renderText = str_replace($badWordArray, $censorship, $text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-badwords</title>
  </head>
  <body>
    <h1>
      <?php echo $text; ?>
    </h1>

    <h1>
      <?php echo $renderText; ?>
    </h1>

    <h1>
      Il paragrafo è lungo <?php echo strlen($text); ?>
    </h1>
  </body>
</html>
