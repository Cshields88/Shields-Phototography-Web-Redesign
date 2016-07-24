<?php
$name = '&copy; Shields Photography ';
?>



    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php echo TITLE; ?>
        </title>
        <link rel="stylesheet" href="styles.css">

        <link rel="stylesheet" href="lightbox.css">
        <link rel="stylesheet" href="../font-awesome-4.6.3/font-awesome-4.6.3/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid" id="header">
                <div class="navbar-header navbar-left">
                    <a href="#"><img class="img-responsive col-xs-12" src="Assets/logomd.png" alt=""></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse navbar-right" id="nav">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galleries<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="seniors.php">Seniors</a></li>
                                <li><a href="weddings.php">Weddings</a></li>
                                <li><a href="portraits.php">Portraits</a></li>
                                <li><a href="family.php">Family</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Investment</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
