<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>xkcd password gen</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/foundation.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <!--    <link rel="stylesheet" href="css/p2.css">-->

    <!--Javascript-->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" type="text/javascript"></script>
    <script src="js/vendor/foundation.min.js"></script>

    <?php require 'generator.php' ?>
</head>

<body>

    <form method='POST' action='index.php'>
        Enter number of words
        <br>
        <input type="number" name="passwordLength" min="1" max="5">

        <input type='submit' value='OBJECTION!'>
        <br>
    </form>

    <h1>
    Your password is <?php echo implode("-", $passwordGenerated) ?>.
    </h1>

</body>

</html>