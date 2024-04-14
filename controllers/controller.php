<?php

if (!isset($_GET['page']) || $_GET['page'] == "home") {
    include("views/welcome.php");
} else if ($_GET['page'] == "dashboard") {
    include("views/dashboard.php");
} else if ($_GET['page'] == "logout") {
    include("views/logout.php");
} else if ($_GET['page'] == "view-model") {
    include("views/view-model.php");
} else if ($_GET['page'] == "add-model") {
    include("views/add-model.php");
} else {
    include("views/404.php");
}
