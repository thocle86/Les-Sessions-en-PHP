<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}
if(isset($_SESSION["cart"])) {
    foreach($_SESSION["cart"] as $idCookie) {
        $cart[$idCookie]["name"] = $catalog[$idCookie]["name"];
        $cart[$idCookie]["description"] = $catalog[$idCookie]["description"];
        $cart[$idCookie]["quantity"] += 1;
    }
}
?>
<section class="cookies container-fluid">
    <?php
    if(isset($_SESSION["cart"])) {
    ?>
        <table>
            <thead>
                <tr>
                    <th>Cookie</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $cookie) {
                    echo "<tr>";
                    echo "<td>" . $cookie["name"] . "</td>";
                    echo "<td>" . $cookie["description"] . "</td>";
                    echo "<td>" . $cookie["quantity"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <?php }?>
</section>
<?php require 'inc/foot.php'; ?>
