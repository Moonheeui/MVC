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
                include_once("controllers/controller-view.php");


                $connection = new connectionObject("localhost", "moonhee42_adv_web_user", "3V3o8u3^d", "moonhee42_adv_web");
                $model = new userModel($connection);
                $models = $model->selectAll();
                ?>

                <article>
                    <div class="icons">
                        <h3>View All models</h3>
                        <i class="fa-solid fa-computer"></i>
                    </div>
                    <?php
                    if ($models) {
                        foreach ($models as $model) {
                            echo "<div class='card-grid'>
                                    <div class='model-list'>
                                        <p class='id'>" . $model['modelID'] . "</p>
                                        <p class='name'>" . $model['modelName'] . "</p>
                                        <p class='part'>" . $model['partName'] . "</p>
                                        <p class='brand'>" . $model['brandName'] . "</p>
                                        <p class='compatibility'>" . $model['compatibilityName'] . "</p>
                                        <p class='price'>" . $model['price'] . "</p>
                                        <p class='stock'>" . $model['stock'] . "</p>

                                        <form method='POST'>
                                            <input type='hidden' name='modelID' value='" . $model['modelID'] . "'>
                                            <div class='btn-flex'>
                                                <input type='submit' name='edit' value='Edit' id='edit-btn'>
                                                <input type='submit' name='delete' value='Delete' id='delete-btn'>
                                            </div>
                                        </form>
                                    </div>
                                </div>";
                        }
                    } else {
                        echo 'No models found';
                    }
                    ?>
                </article>
            </div>
        </div>
    </div>
</main>