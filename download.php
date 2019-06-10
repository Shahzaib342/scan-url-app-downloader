<?php
if(isset($_POST["download-file"])) {
    foreach ($_POST["download-file"] as $file) {
        echo $file . "</br>";
    }
}