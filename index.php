<!DOCTYPE html>
<html ng-app="myApp">

<?php include('./inc/head.php');?>

<body>

    <?php include('./inc/header.php');?>

    <div class="container">
        <div ng-view></div>
    </div>
    <!-- /.container -->
    <!-- END OF THE MAIN CONTENT -->
    <?php include('./inc/footer.php');?>

    <!-- Script to Activate Soundcloud -->
    <script src="http://connect.soundcloud.com/sdk.js"></script>

    <!-- Script to add jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Script to add Angular-->
    <script src="js/angular.min.js"></script>

    <!-- Script to add Angular Routes-->
    <script src="js/angular-route.min.js"></script>
    <!-- MY JS FILE -->
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
