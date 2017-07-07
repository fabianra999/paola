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

		<!--footer-->
		<?php include 'view/modules/footer.php'; ?>
    </div>
    <!-- end fullpage -->


    <!--scripts-->
    <?php include 'view/modules/scripts.php'; ?>
    </body>
</html>
