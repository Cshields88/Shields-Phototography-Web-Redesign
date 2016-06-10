<?php
define("TITLE", "Home | Shields Photography");

include('includes/header.php');
?>
    <!--Body Content -->
    <div class="row" id="header">
        <div class="col-6 pull-left img-responsive">
            <a href="index.html"><img class="logo" src="Assets/logo.png" alt="Logo"></a>
        </div>
        <div class="col-6 pull-right" id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="galleries.php">Galleries</a></li>
            <li><a href="investment.php">Investment</a></li>
            <li><a href="contact.php">Contact</a></li>

        </div>
    </div>

    <div class="row" id="content">
        <!--Seniors-->
        <div class="col-md-3 col-xs-6">
            <div class="carousel">
                <div class="active item">
                    <a href="seniors.php"><img class="mainSen main" src="Assets/senbw.jpg" alt="Seniors"></a>

                    <div class="carousel-caption">
                        <a href="seniors.php"><h1 class="caption">Seniors</h1></a>
                    </div>
                </div>
            </div>

        </div>

        <!--Wedding-->
        <div class="col-md-3 col-xs-6">
            <div class="carousel">
                <div class="active item">
                    <a href="weddings.php"><img class="main wed" src="Assets/wedbw.jpg" alt="Weddings"></a>
                    <div class="carousel-caption">
                        <a href="weddings.php"><h1 class="caption">Weddings</h1></a>
                    </div>
                </div>
            </div>

        </div>
        <!--Portraits-->
        <div class="col-md-3 col-xs-6">
            <div class="carousel">
                <div class="active item">
                    <a href="portraits.php"><img class="main portrait" src="Assets/cplbw.jpg" alt="Portraits"></a>
                    <div class="carousel-caption">
                        <a href="portraits.php"><h1 class="caption">Portraits</h1></a>
                    </div>
                </div>
            </div>

        </div>
        <!--Family-->
        <div class="col-md-3 col-xs-6">
            <div class="carousel">
                <div class="active item">
                    <a href="family.php"><img class="mainFam fam" src="Assets/shawnabw.jpg" alt="Family"></a>
                    <div class="carousel-caption">
                        <a href="family.php"><h1 class="caption">Family</h1></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
include('includes/footer.php');
?>
