<?php
    include_once 'header.php';
?>
    
<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>

<h1>Front page</h1>
<h2>All articles</h2>

<div class="article-container">
    <?php
        $sql = "SELECT * FROM articles;";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);

        if ($rows > 0) 
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "
                    <div class='article-box'>
                        <h3>".$row['article_title']."</h3>
                        <p>".$row['article_text']."</p>
                        <p>".$row['article_date']."</p>
                        <p>".$row['article_author']."</p>
                    </div>";
            }
        }
    ?>
</div>

</body>
</html>