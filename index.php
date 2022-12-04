<?php

// include function
include __DIR__ . "/partials/functions.php";

// session start
session_start();

// GET method to obtain the password
$password_length = $_GET["passwordLength"] ?? 0;
$password_length = intval($password_length);

// if the field is not empty
if (!empty($password_length)) {
    $_SESSION["password"] = generator($password_length);
}
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
    <title>PHP Strong Password Generator</title>
    <!-- /title -->

</head>

<body>

    <!-- header -->
    <header>
        <div class="container">
            <h1>Strong Password Generator</h1>
            <h2>Generate a secure password</h2>
        </div>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>

        <!-- container -->
        <div class="container">

            <!-- form section -->
            <form action="index.php" method="GET">

                <!-- password data -->
                <div class="input mb-3 d-flex justify-content-between align-items-center">
                    <label for="password_length">Password length:</label>
                    <input type="number" name="passwordLength" class="form-data" id="password-length" placeholder="Select the length of your password:">
                </div>
                <!-- /password data -->

                <!-- buttons section -->
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">SEND DATA</button>
                    <button class="btn btn-secondary" type="reset">RESET DATA</button>

                    <!-- if the field password is not empty -> result -->
                    <?php if (!empty($password_length)) { ?>
                        <a href="passwordGenerated.php" class="btn btn-primary">RESULT</a>
                    <?php } ?>
                </div>
                <!-- /buttons section -->
            </form>
            <!-- /form section -->

        </div>
        <!-- /container -->

    </main>
    <!-- /main -->

</body>

</html>