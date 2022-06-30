<?php
include './components/connection.php';
$_SESSION['NAVIGATION'] = 'home';
include './components/head.php';
echo '<body class="body">';
include './components/header.php';
while($homeRow = mysqli_fetch_array($homeResult, MYSQLI_ASSOC) ){
include './components/main_home.php';
}
include './components/footer.php';
echo '</body>';


?>
