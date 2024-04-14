<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="dashboard-flex">
                <div class="side-bar">
                    <?php
                    include_once("views/nav.php");
                    ?>
                </div>

                <div class="content">
                    <?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);

                    include_once("controllers/connection.php");
                    // include_once("controllers/controller.php");
                    ?>
                    <blockquote>------- You can build your own computer. -------</blockquote>
                </div>
            </div>
        </div>
    </main>
</body>

</html>