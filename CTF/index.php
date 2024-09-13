<!DOCTYPE html>
<html>
<head>
    <title>Ping Tool</title>
</head>
<body>
    <h1>Ping a Server</h1>
    <form method="GET">
        <label for="ip">Enter IP Address:</label>
        <input type="text" id="ip" name="ip">
        <input type="submit" value="Ping">
    </form>
    <?php
    if (isset($_GET['ip'])) {
        $ip = $_GET['ip'];
        echo "<pre>";
        system("ping -c 4 " . $ip);
        echo "</pre>";
    }
    ?>
</body>
</html>
