<?php
if (($_POST["inputIdentite"] && isset($_POST["inputIdentite"]) !== null) && ($_POST["inputEmail"] && isset($_POST["inputEmail"]) !== null) && ($_POST["inputObjet"] && isset($_POST["inputObjet"]) !== null) && ($_POST["inputMessage"] && isset($_POST["inputMessage"]) !== null)) {
    echo $_POST["inputIdentite"];
}
?>

<script src="index.js"></script>
