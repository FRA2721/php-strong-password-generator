<?php
// session start
session_start();

$password_generated = $_SESSION["password"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /bootstrap -->

    <!-- css -->
    <link rel="stylesheet" href="./assets/style.css">
    <!-- /css -->

    <!-- title -->
    <title>Password generated</title>
    <!-- /title -->

</head>

<body>
    <!-- header -->
    <header>
        <!-- container -->
        <div class="container">
            <h1>Password generated:</h1>
            <h3><?php echo $password_generated ?></h3>

            <!-- go back to the password generator  -->
            <a href="endSession.php">Generator</a>
            <!-- /go back to the password generator -->

        </div>
        <!-- /container -->

    </header>
    <!-- /header -->
    
</body>

</html>