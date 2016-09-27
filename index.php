<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>xkcd password gen</title>
        <!--CSS-->
        <link rel="stylesheet" href="css/foundation.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
        <link rel="stylesheet" href="css/p2.css">
        <!--Javascript-->
        <script src="https://code.jquery.com/jquery-2.2.3.min.js" type="text/javascript"></script>
        
        <script src="js/vendor/foundation.min.js" type="text/javascript"></script>
        
        <script src="js/p2.js" type="text/javascript"></script>
        <?php require "generator.php"; ?>
    </head>
   
    <body>
        <form method="POST" action="index.php">
            
            <label>Enter number of words
                <input type="number" name="passwordLength" min="1" max="5">
            </label>
            
            <!--Symbol Checkbox-->
            <label>Include Symbol?
                <input type="checkbox" name="includeSymbol" value="true" />
            </label>
            
            <!--Number Checkbox-->
            <label>Include Number?
                <input type="checkbox" name="includeNumber" value="true" />
            </label>

            <!--Arcana Checkboxes
            For each element in the arcana list, outputs a label/checkbox. If
            the box was previously checked (present in the submitted POST values),
            then it makes it checked again.
            -->
            <div class="row small-up-3 medium-up-6 large-up-9">
                <?php foreach($arcanaList as $key=> $value): ?>
                <div class="column">
                    <label>
                        <?=ucfirst($key)?>
                        <input class="arcana-checkbox" type="checkbox" name="arcana[]" value=<?=$key?>
                            <?php
                                if (isset($_POST["arcana"]) && in_array($key, $_POST["arcana"])) {
                                    echo "checked";
                                };
                            ?>
                        />
                    </label>
                </div>
                <?php endforeach; ?>
            </div>

            <input id="buttonSelectAll" type="button" value="Select All" />
            <input id="buttonDeselectAll" type="button" value="Deselect All" />
            <input type='submit' value='Generate!' />
        </form>
        
        <?php if(isset($_POST["passwordLength"])): ?>
            <h1>
                Your password is <?php echo implode("-", $passwordGenerated) ?>.
            </h1>
        <?php endif; ?>
    </body>
</html>