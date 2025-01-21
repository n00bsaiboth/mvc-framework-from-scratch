<?php
    require_once('header.php');
?>

<div class="container mx-auto my-4">
    <div class="flex justify-center items-center">
        <div class="prose">
            <h2>Received feedback</h2>
        </div>
    </div>
</div>

<div class="container mx-auto my-4">
    <?php 
        if (isset($feedbacks) && !empty($feedbacks)) {
            foreach ($feedbacks as $feedback) {
                echo "<article class=\"flex justify-center items-center\" id=\"feedback-{$feedback["id"]}\">";
                echo "<div class=\"prose w-full max-w-lg\">";
                echo "<h3>Reviewer</h3>";
                echo "<p>{$feedback["name"]}</p>";
                echo "<h3>Feedback</h3>";
                echo "<p>{$feedback["feedback"]}</p>";
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

<div class="container mx-auto my-4">
    <div class="flex justify-center items-center">
        <div class="prose">
            <h2>Send us a feedback</h2>
        </div>
    </div>
</div>

<div class="container mx-auto my-8">
    <div class="flex justify-center items-center">
        <form action="/feedback" method="post" class="form-control w-full max-w-md">
            <label class="label" for="name">Name</label>
            <input type="text" name="name" id="name" class="input input-bordered w-full max-w-md" required>
            <label class="label" for="email">Email</label>
            <input type="email" name="email" id="email" class="input input-bordered w-full max-w-md" required>
            <label class="label" for="feedback">Feedback</label>
            <textarea name="feedback" id="feedback" class="textarea textarea-bordered" required></textarea>
            <input type="submit" value="submit" class="btn btn-primary my-2">
        </form>
    </div>
</div>
<?php
    require_once('footer.php');
?>