<?php
// GET method to obtain the passoword generated
$password_length = $_GET["passwordLength"] ?? 0;
$password_length = intval($password_length);

// avaible characters for the password generator
$password_chars = ["abcdefghijklmnopqrstuvwxyz", "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "0123456789", "*!?£$%&-_@"];

// password generated
$password_generated = generator_for_password($password_length, $password_chars);

// create a password generator function
function generator_for_password($password_length, $password_chars)
{
    // init empty password
    $password_generated = "";
    // check if the lenght is major than 0 value (if is empty)
    if ($password_length > 0) {

        for ($i = 0; $i < $password_length; $i++) {
            // the generator select random characters from the default data
            $random_value = rand(0, count($password_chars) - 1);
            $random_chars = rand(0, strlen($password_chars[$random_value]) - 1);
            $password_generated .= $password_chars[$random_value][$random_chars];
        }
        // password generated data
        return $password_generated;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- import bootstrap -->

    <!-- css -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- /css -->

    <!-- title -->
    <title>PHP Strong Password Generator</title>
    <!-- title -->

</head>

<body>
    <!-- header section -->
    <header>

        <!-- header container -->
        <div class="container">
            <h1>Strong Password Generator</h1>
            <h2>Generate a safety password</h2>
        </div>
        <!-- /header container -->

    </header>
    <!-- /header section -->

    <!-- main -->
    <main>
        <!-- main container -->
        <div class="container">

            <!-- send password data to index.php web page -->
            <form action="index.php" method="GET">
                <!-- get th epassword length -->
                <div class="input mb-4 d-flex justify-content-between align-items-center">
                    <label for="password_length">Password Length:</label>
                    <input type="number" name="passwordLength" class="form-data" id="password_length" placeholder="How many characters the password must contains:">
                </div>
                <!-- get th epassword length -->

                <!-- button data section -->
                <div class="buttons">
                    <!-- data control -->
                    <button class="btn btn-primary" type="submit">SEND</button>
                    <button class="btn btn-secondary" type="reset">RESET</button>
                    <!-- /data control -->
                </div>
                <!-- button data section -->

            </form>
            <!-- send password data to index.php web page -->

        </div>
        <!-- /main container -->

        <!-- password container -->
        <div class="container mt-3 p-3 text-center">
            <h5>Password generated:</h5>
            <h2><?php echo $password_generated; ?></h2>
        </div>
        <!-- /password container -->

    </main>
    <!-- /main -->
</body>

</html>