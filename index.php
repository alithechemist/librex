<?php require "misc/header.php"; ?>

    <title>LibreX For Icecat</title>
    </head>
    <body>
	<form class="search-container" action="search.php" method="get" autocomplete="off">
		<a href="https://icecatbrowser.org"><img src="static/images/Icecat1-300x300.png" width="150" height="150" alt="Download Gnu Icecat for your PC"></a>
                <h1>Libre<span class="X">X</span></h1>
                <input type="text" name="q" autofocus/>
                <input type="hidden" name="p" value="0"/>
                <input type="hidden" name="t" value="0"/>
                <input type="submit" class="hide"/>
                <div class="search-button-wrapper">
                    <button name="t" value="0" type="submit">Search with LibreX</button>
                    <button name="t" value="3" type="submit">Search torrents with LibreX</button>
		</div>
        </form>

<?php require "misc/footer.php"; ?>

