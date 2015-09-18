<?php
session_start();
?>
<!doctype html>
<?php
require 'template/_header.php';
?>
<body>
<?php if (isset($_SESSION['FBID'])) { 
    header('Location: dashboard.php');
} else { ?>
    <!-- Before login -->
    <img class="img-login" src="css/img/login.png">
    <div class="container">
        <div class="main-buttons">
            <div class="col-xs-12  text-center">
                <a href="facebookconnect/fbconfig.php" class="btn-fb">Connectez-vous avec Facebook</a>
            </div>

        </div>
    </div>

    <br><br><br>
    
    <div class="container skip">
        <div class="col-xs-8 col-xs-offset-2 text-center">
            <a href="dashboard.php" class="pass">Passer cette étape</a>
        </div>

    </div>

<?php }; ?>
</body>
</html>
