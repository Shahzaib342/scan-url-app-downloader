<?php
   if(!isset($_POST['url'])) {
       die();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Url Scanner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/Bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="/assets/js/jQuery.min.js"></script>
    <script src="/assets/js/Bootstrap.min.js"></script>
</head>
<body onload="move();">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="assets/images/SenseIT.jpg" alt="Sesnse It" width="100">
        </div>
    </div>
</nav>
<div class="row">
<div class="container">
    <p class="scanning-url-text">Scanning: <?php echo $_POST['url'] ?> (scan id: 85)</p>
    <div id="myProgress">
        <div id="myBar">not started</div>
    </div>
    <form method="post" action="download.php" id="scanner-complete-form">
        <p class="scan-type">Download results</p>
        <ul style="list-style: none">
            <li>Word:<input type="checkbox" name="download-file[]" value="word"></li>
            <li>Csv:<input type="checkbox" name="download-file[]" value="csv"></li>
            <li>Json:<input type="checkbox" name="download-file[]" value="json"></li>
        </ul>
        <input type="submit" value="Submit">
    </form>
</div>
</div>

</body>
</html>

<script>
    function move() {
        var elem = document.getElementById("myBar");
        elem.style.background = "#08a4b0";
        var width = 10;
        var id = setInterval(frame, 50);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                var form = document.getElementById("scanner-complete-form");
                form.style.display = "block";
                elem.innerHTML = 'Complete';
            } else {
                width++;
                elem.style.width = width + '%';
                elem.innerHTML = width * 1  + '%';
            }
        }
    }
</script>