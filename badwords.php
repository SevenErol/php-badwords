<?php

$paragraph = $_GET["paragraph"];

$word = $_GET["word"];

$new_string = str_ireplace($word, "***", $paragraph);

echo $new_string;



?>

<h1>Your censored paragraph is: <?php echo $new_string; ?></h1>