<?php

function __autoload($class_name) {
    $class_name = str_replace("..", "", $class_name);
    require_once "classes/" . $class_name . ".php";
}

?>

<!doctype html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php

$email = new Email();
$email = new CristmasEmailBody($email);
$email = new NeyYearEmailBody($email);
$email->loadBody();

?>

</body>
</html>
