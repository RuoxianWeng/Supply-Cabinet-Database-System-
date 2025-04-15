<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h1>School Supplies Co.</h1>
        <div class="headericon">
            <img src="./images/notebook.png" class="icon" />
            <img src="./images/pencil.png" class="icon" />
            <img src="./images/backpack.png" class="icon" />
            <img src="./images/paint.png" class="icon" />
        </div>
        <form action="home.php" class="homebutton">
            <input type="submit" value="Back to Home" />
        </form>
        <hr>
        <h2><?php echo $title; ?></h2>
    </body>
</html>