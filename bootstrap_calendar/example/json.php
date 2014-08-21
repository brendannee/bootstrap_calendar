<?php
$month = isset($_GET['month']) ? $_GET['month'] : date('n');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

$array = array(
  array(
    "7/$month/$year", 
    'bootstrap logo popover!', 
    '#', 
    'awesome', 
    '<img src="http://bit.ly/XRpKAE" />'
  ),
  array(
    "17/$month/$year", 
    'octocat!', 
    'https://github.com/logos', 
    'baller', 
    'new github logo <img src="http://git.io/Xmayvg" />'
  ),
  array(
    "27/$month/$year", 
    'github drinkup', 
    'https://github.com/blog/category/drinkup', 
    'killer'
  )
);

header('Content-Type: application/json');
echo json_encode($array);
exit;
?>