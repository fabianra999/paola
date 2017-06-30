<!DOCTYPE html>
<html>
<!--head-->
<?php include 'view/modules/head.php'; ?>
    <body>

    <!-- navbar header -->
    <?php include 'view/modules/navBar.php'; ?>

    <!-- end navbar header -->

    <!-- begin fullpage -->
    <div id="fullpage">

        <!-- begin section -->
        <?php include 'view/layouts/aboutme.php'; ?>
        <!-- end section -->

        <!-- begin section -->
        <?php include 'view/layouts/skills.php'; ?>
        <!-- end section -->

        <!-- begin section -->
        <?php include 'view/layouts/projects.php'; ?>
        <!-- end section -->

        <!-- begin section -->
        <?php include 'view/layouts/contact.php'; ?>
        <!-- end section -->

    </div>
    <!-- end fullpage -->

    <script src="https://s3-us-west-2.amazonaws.com/parallax-theme/assets/wow.min.js"></script>


    <!--footer-->
    <?php include 'view/modules/footer.php'; ?>
    <!--scripts-->
    <?php include 'view/modules/scripts.php'; ?>
    </body>
</html>
