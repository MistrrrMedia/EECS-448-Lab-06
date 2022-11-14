<!DOCTYPE html>
<html>
    <head>
        <title>Suspicious Receipt</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form id="php_sucks" action="customerBackend.php" method="POST">
            <div id="container">
                <h1>Welcome, <?php echo($_POST["username"]);?>!, <i>here's your stupid receipt.</i></h1>
                <p><i>And your dumb password, too</i>: <code><?php echo($_POST["password"]);?></code></p><br>
                <div id="overly_large_div">
                    <table id="receipt">
                        <tr>
                            <td></td>
                            <td><b>Quantity</b></td>
                            <td><b>Cost Per Thing</b></td>
                            <td><b>Subtotal</b></td>
                        </tr>

                        <tr>
                            <td><b>Flash Drive I Found Exploring Ohio</b></td>
                            <td><?php echo( $_POST[ "flash_quantity" ] );?></td>
                            <td>$29</td> 
                            <td>$<?php echo( $_POST[ "flash_quantity" ] * 29 );?></td>
                        </tr>

                        <tr>
                            <td><b>Someone's Wallet</b></td>
                            <td><?php echo( $_POST[ "wallet_quantity" ] );?></td>
                            <td>$35</td>
                            <td>$<?php echo( $_POST[ "wallet_quantity" ] * 35 );?></td>
                        </tr>

                        <tr>
                            <td><b>Grandma's Unopened Cough Syrup</b></td>
                            <td><?php echo( $_POST[ "nyquil_quantity" ] );?></td>
                            <td>$89</td>
                            <td>$<?php echo( $_POST[ "nyquil_quantity" ] * 89 );?></td>
                        </tr>

                        <tr>
                            <td><b>Shipping<b></td>
                            <td colspan="2">
                                <?php
                                    if( $_POST["shipping"] == 0 ) echo( "Free 7-Day" );
                                    if( $_POST["shipping"] == 5 ) echo( "3-Day" );
                                    if( $_POST["shipping"] == 50 ) echo( "Overnight" );
                                ?>
                            </td>
                            <td>
                                $<?php
                                    if( $_POST["shipping"] == 0 ) echo( 0 );
                                    if( $_POST["shipping"] == 5 ) echo( 5 );
                                    if( $_POST["shipping"] == 50 ) echo( 50 );
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3"><b>Total</b></td> 
                            <td>$<?php echo( ( $_POST[ "flash_quantity" ] * 29 ) + ( $_POST[ "wallet_quantity" ] * 35 ) + ( $_POST[ "nyquil_quantity" ] * 89 ) + $_POST["shipping"]);?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </body>
</html>