<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world from html</h1>
    <?php
    $author = 'faisal';
    ?>
<h1>hello world from
    <?php
     echo $author; 
     ?>
</h1>

<?php
//string basic
$str = "hello world from mist";

echo strlen($str) . '<br />';
echo str_word_count($str) . '<br />';

// arays
$students = [
    'faisal' => 22,
    'aziz' => 23,
    'tamim' => 24
];

foreach($students as $name=>$roll)
{
    echo "name : " .$name . ',' . 'roll:'
. $roll . '<br />';
}
?>
<br>
<br>
<!-- PHP DATE TIME-->
<?php
date_default_timezone_set('America/Los_Angeles');
echo date('Y-m-d h:m:sa');
?>
<br>
<br>

<?php include 'footer.php' ?>
</body>
</html>