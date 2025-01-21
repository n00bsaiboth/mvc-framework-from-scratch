<?php
    require_once(__DIR__ . '/header.php');
?>

<div class="container mx-auto my-4">
    <div class="flex justify-center items-center">
        <div class="prose w-full max-w-lg">
            <h2>News</h2>
        </div>
    </div>
</div>

<div class="container mx-auto my-4">

<?php
    if (isset($news) && !empty($news)) {
        foreach($news as $article) {
            echo "<article class=\"flex justify-center items-center\" id=\"article-{$article["id"]}\">";
            echo "<div class=\"prose w-full max-w-lg\">";
            echo "<h3>{$article['title']}</h3>";
            echo "<small>Writer: {$article['username']} date: {$article['date']}</small>";
            echo "<p>{$article['excerpt']}</p>";
            echo "<p><a href=\"/news/{$article["id"]}\" class=\"btn btn-primary\">Read more</a></p>";
            echo "</div>";
            echo "</article>";
        } 
    } else {
        echo "<article class=\"flex justify-center items-center\" id=\"feedback-error\">";
        echo "<div class=\"prose w-full max-w-lg\">";
        echo "<p>Could not retrieve data. </p>";
        echo "</div>";
        echo "</article>";

    }
?>

</div>

<?php
    require_once(__DIR__ . '/footer.php');
?>