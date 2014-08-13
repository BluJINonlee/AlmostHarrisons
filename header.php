<!--Logo and Home Page-->
    <div class="grid-container">
        <div class="grid-30 push-35 tablet-grid-35 tablet-push-35 mobile-grid-35 mobile-push-35">
            <a href="index.php" id="logo">
                <img id="headerLogo" src="assets/img/logos/JH3.png" width="200px" />
            </a>
        </div>
    </div>

     <!--Navigation  Bar -->
    <div class="grid-container" id="topNavBar">

        <a href="aboutUs.php">
            <div class="grid-25 <?php echo ( $_SERVER['PHP_SELF'] == "/almostharrisons/about.php" ? "active" : ""); ?>">
                About Us
            </div>
        </a>
        <a href="locations.php">
            <div class="grid-25 <?php echo ( $_SERVER['PHP_SELF'] == "/almostharrisons/locations.php" ? "active": ""); ?>">
                Location
            </div>
        </a>
        <a href="RSVP.php">
            <div class="grid-25 <?php echo ( $_SERVER['PHP_SELF'] == "/almostharrisons/rsvp.php" ? "active" : ""); ?>">
                RSVP
            </div>
        </a>
        <a href="registry.php">
            <div class="grid-25 <?php echo ( $_SERVER['PHP_SELF'] == "/almostharrisons/registry.php" ? "active" : ""); ?>">
                Registry
            </div>
        </a>
    </div>
    <div id="body">

