<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Framework from Scratch</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="">
    <div class="container mx-auto">
        <div class="navbar">
            <div class="flex-1">
                <a href="/" class="">MVC Framework from scratch</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/news">News</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
    </div>

    <div class="hero">
        <div class="hero-content text-center">
            <div class="prose max-w-md">
                <h1>MVC Framework from Scratch</h1>
                <a href="" class="btn btn-primary">Source code</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-4 px-2">

    <?php
            if (isset($single) && !empty($single)) {
                foreach ($single as $s) {
                    echo "<article class=\"flex justify-center items-center\" id=\"article-{$s["id"]}\">";
                    echo "<div class=\"prose w-full max-w-lg\">";
                    echo "<h2>{$s["title"]}</h2>";
                    echo "<small>{$s["username"]} - {$s["date"]}</small>";
                    echo "<p>{$s["content"]}</p>";
                    echo "<p><a href=\"/news\" class=\"btn btn-primary\">Back</a></p>";
                    echo "</div>";
                    echo "</article>";
                }
            } else {
                echo "<article class=\"flex justify-center items-center\" id=\"article-error\">";
                echo "<div class=\"prose w-full max-w-lg\">";
                echo "<p>Could not retrieve data. </p>";
                echo "</div>";
                echo "</article>";
            }
    ?>

    </div>

    <div class="container mx-auto px-2 my-4">
        <div class="divider"></div>
        <footer class="footer">
            <nav>
                <h6 class="footer-title">Contact</h6>
                <a class="" href="mailto:jussi.jokinen@openinnovations.io">jussi.jokinen@openinnovations.io</a>
            </nav>
            <nav>
                <h6 class="footer-title">Social media</h6>
                <a class="" href="https://facebook.com/fi.open.innovations">Facebook</a>
            </nav>
            <nav>
                <h6 class="footer-title">More information</h6>
                <a class="" href="https://openinnovations.io">Openinnovations.io</a>
            </nav>
        </footer>
    </div>

    <script src="../assets/js/main.js"></script>
</body>
</html>
