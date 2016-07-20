<?php
define("TITLE", "Contact Us | Shields Photography");
include('includes/header.php');
?>

    <div class="row contact">
        <form method="post" action="index.php" id="contactForm">
            <div class="col-md-12 col-xs-12 pull-left">
                <label class="contactLabel" for="name">Name</label>
                <br>
                <input class="input-lg" type="text" id="name" name="name">
            </div>
            <br>

            <div class="col-md-12 col-xs-12 pull-left">
                <label class="contactLabel" for="email">Email Address</label>
                <br>
                <input class="input-lg" type="email" id="email" name="email">
            </div>
            <br>

            <div class="col-md-12 col-xs-12 pull-left">
                <label class="contactLabel" for="message">Leave Us A Message</label>
                <br>
                <textarea class="input-lg" name="message" id="message" cols="60" rows="10"></textarea>
            </div>
            <br>

            <div class="col-md-12 col-xs-12 pull-left">
                <input class="input-lg" type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
                <label class="contactLabel" for="subscribe">Subscribe To Our Newsletter</label>
            </div>
            <br>

            <div class="col-md-12 col-xs-12 pull-left">
                <input type="submit" class="button" name="contact_submit" value="Send Message">
            </div>
        </form>
    </div>

    <?php
include('includes/footer.php');
?>
