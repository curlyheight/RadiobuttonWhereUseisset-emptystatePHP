<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="real.php" method="post">
        <input type="radio" name="credit_card"  value="Visa">Visa <br>
        <input type="radio" name="credit_card"  value="MasterCard">MasterCard <br>
        <input type="radio" name="credit_card"  value="American Express">American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
    
</body>
</html>

<?php
    //    if(isset($_POST["confirm"] )){
    //         if(isset($_POST["credit_card"])){
    //             $credit_card = $_POST["credit_card"];
    //             echo $credit_card;
    //         }
    //         else{
    //             echo"Please make selection";
    //         }

    //    }


    if(isset($_POST["confirm"] )){
                $credit_card = null;

                if(isset($_POST["credit_card"])){
                    $credit_card = $_POST["credit_card"];
                }
                if($credit_card == "Visa"){
                    echo"<b>You are selected Visa";
                }
                elseif($credit_card == "MasterCard"){
                    echo"<b>You are selected MasterCard";
                }
                elseif($credit_card == "American Express"){
                    echo"<b>You are selected American Express";
                }
                else{
                    echo"Please make selection";
                }
    
           }
?>