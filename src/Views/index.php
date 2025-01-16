<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Framework from Scratch</title>
</head>
<body>
<h1>Welcome to Simple PHP MVC Framework from Scratch</h1>
<p>For testing purposes, let's print out the users from the database. </p>
<div>
<?php 
    if (isset($users) && !empty($users)) {
        foreach ($users as $user) {
            echo "<p>firstname: {$user["first_name"]}</p>";
            echo "<p>lastname: {$user["last_name"]}</p>";
        }
    } else {
        echo "<p>Could not retrieve data. </p>";
    }
?>
</div>
</body>
</html>
