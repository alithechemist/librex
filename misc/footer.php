<div class="footer-container">
    <a href="./">LibreX</a>
    <a href="https://github.com/hnhx/librex/" target="_blank">Source &amp; Instances</a>
    <a href="./settings.php">Settings</a>
    <a href="./donate.php">Donate ❤️</a>
    <a href="https://icecatbrowser.org">Icecat</a>
</div>
<div class="git-container">
    <?php
        $hash = file_get_contents(".git/refs/heads/main");
        echo "<a href=\"https://github.com/alithechemist/librex/commit/$hash\" target=\"_blank\">Latest commit: $hash</a>";
    ?>
</div>
</body>
</html>
