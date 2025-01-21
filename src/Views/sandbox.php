<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
</head>
<body>
    <h1>Welcome to the sandbox</h1>
    <p></p>
    <?php 
        if (isset($email) && !empty($email)) {
            echo "email: $email .";
        }

        echo "<br>";

        if (isset($url) && !empty($url)) {
            echo "url: $url";
        }
    ?>
</body>
</html>