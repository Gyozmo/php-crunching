<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
      $dico = explode("\n", $string);
    //   print_r ($dico);  



    ?>

    <h1>Php-crunching</h1>
<?php
echo sizeof($dico);
$p = 0;
for($i=0; $i<sizeof($dico);$i++) {
    if (strlen($dico[$i])==15 ) {
        $p+=1;
    }
}
echo '<br>'.$p;

?>
</body>
</html>