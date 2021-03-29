<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Varga Tamás</title>
        <link href="stilus.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="feldolgoz.js" type="text/javascript"></script>
    </head>
    <body><main>
            <header>Teendők</header>
            <article>
                <button id="betolt">Betölt</button>
                <legend>TODO lista</legend>
                <form action="/action_page.php">
                    <input type="text" id="nev" name="nev" value="Tanév vége">
                    <input type="date" id="datum" name="datum" value="2021.03.29">
                    <input id="add" type="submit" value="Add">
                </form>
                <div id="tablazat">

                </div>
            </article>

            <footer>Varga Tamás</footer>
        </main>


        <?php
        ?>
    </body>
</html>
