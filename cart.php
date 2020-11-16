<?php require 'inc/head.php'; ?>
<?php
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}
var_dump($_SESSION);
?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
