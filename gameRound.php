
<?php


require(__DIR__ . '/controller/Controller.php');

use controller\Controller;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/css/style.css">
    <title>home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            
                <?php
                    $controller = new Controller();

                    if (isset($_POST['userNumber'])) {
                        $controller->userMove($_POST['userNumber']);
                    }
                    else{
                        $controller->psychicsMove();
                    }
                ?>

        </div> <!-- .row -->
    </div> <!-- .container -->
</body>
</html>

