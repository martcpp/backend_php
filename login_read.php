<?php include "database.php";?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
   <h1 class="text-center">database</h1>
    <pre>   
    <?php
    read_data();

    ?>
</pre>
</div>
</body>
</html>