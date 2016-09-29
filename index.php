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
        <header>
            <h1>xkcd password gen</h1>
            <h2>the velvet room edition</h2>
        </header>
        
        <?php if(isset($_POST["passwordLength"])): ?>
            <h1 id="passwordGenerated" class="password-options">
                <?php echo implode("-", $passwordGenerated) ?>
            </h1>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">       
            
            <!-- Display Options for Number of Words and Either Show Default Value 3 or Whatever Last Value Was -->
            <div class="password-options row align-center">
                <div class="column small-5">
                    <label for="passwordLength" class="text-right bottom">Number of words? (1-5)</label><br/>
                </div>
                <div class="column small-3">
                    <input type="number" id="passwordLength" name="passwordLength" min="1" max="6" 
                    <?php if(isset($_POST["passwordLength"])): ?> 
                        value="<?php echo htmlspecialchars($_POST["passwordLength"]);?>" 
                    <?php endif; ?>
                        />
                </div>
                <p class="formError"><?php echo $numWordsErr; ?></p>
            </div>

            <!-- Display Options for Including Symbol/Number and Show Previous State -->
            <div class="password-options row align-center">
                <div class="medium-4 column">
                    <label>Include Symbol?
                        <input type="checkbox" name="includeSymbol" value="true" 
                        <?php if (isset($_POST["includeSymbol"])) {echo "checked";}; ?>/>
                    </label>
                </div>
                <div class="medium-4 column">
                    <label>Include Number?
                        <input type="checkbox" name="includeNumber" value="true" 
                        <?php if (isset($_POST["includeNumber"])) {echo "checked";}; ?>/>
                    </label>
                </div>
            </div>

            <div class="password-options row align-center">                
                <div class="column"><input class="button" type='submit' value='Generate!' /></div>
            </div>
            
            <!--Arcana Checkboxes
            For each element in the arcana list, outputs a label/checkbox. If
            the box was previously checked (present in the submitted POST values),
            then it makes it checked again.
            -->
            <p class="formError password-options"><?php echo $noArcanaErr; ?></p><br/>
            <div id="arcanaSelectors" class="password-options row small-up-3 align-spaced">
                <?php foreach($arcanaList as $key=> $value): ?>
                    <div class="column">
                        <label>
                            <?=ucfirst($key)?>
                            <input class="arcana-checkbox" type="checkbox" name="arcana[]" value=<?=$key?>
                            <?php if (isset($_POST["arcana"]) && in_array($key, $_POST["arcana"])) {
                                echo "checked";};
                            ?>/>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="password-options row align-center">
                <div class="column">
                    <input id="buttonSelectAll" class="button" value="Select All Arcana" />
                </div>
                <div class="column">
                    <input id="buttonDeselectAll" class="button" value="Deselect All Arcana" />
                </div>
            </div>
        </form>       
    </body>
</html>