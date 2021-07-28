<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>The Dream</title>
    </head>
    <body>
        
        <header>
            <div class="title">
                <h1>Exchange rate Calculator</h1>
                <h3>€ EUR to Cuban Peso</h3>
            </div>
        </header>

        <div class="exchange-container">
            <form action="exchange.php" method="post">
                <label for="amount">The amount you would like to convert:</label>
                <input type="text" id="amount" name="amount" value="Enter amount here">
                <input type="submit" name="submit" value="convert now">
                <label for="country"> <h3>Cuba</h3> </label>
                <select name="convert_from">
                    <option value="EUR" selected>Euro (€)</option><br/>
                </select>
                <select name="convert_to">
                    <option value="CUC$" selected>Cuban Peso (CUC$)</option>
                </select>
                <div class="result">
                </div>
            </form>
            <?php

                // isset command to submit
                if(isset($_POST['submit'])) {

                    //Variables
                    $amount = $_POST['amount'];
                    $from = $_POST['convert_from'];
                    $to = $_POST['convert_to'];
                    $result = $_POST['result'];

                    // if statement for Cuban peso & EUR
                    if($from=="EUR" AND $to=="CUC$"){
                        echo "<b>Your Converted Amount is:</b><br/>";
                        echo $result = $amount * 28.29 . " $  Cuban Peso <br/>";
                        echo $amount . " €  EURO";
                        }
                };

            ?>

        </div>
    </body>
</html>