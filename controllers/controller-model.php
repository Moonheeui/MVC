<?php

ini_set('display_errors', 1);

include_once "models/model.php";
include_once 'controllers/connection.php';

class Controller
{
    private $model;
    private $brand;
    private $part;
    private $compatibility;
    public function __construct($connection)
    {
        $this->model = new userModel($connection);
        // $this->brand = new userBrand($connection);
        // $this->part = new userPart($connection);
        // $this->compatibility = new userCompatibility($connection);
    }
    public function showAll()
    {
        $models = $this->model->selectAll();
        include 'views/add-model.php';
    }

    public function getModel()
    {
        return $this->model->selectModel();
    }
    public function getPart()
    {
        return $this->model->selectPart();
    }
    public function getBrand()
    {
        return $this->model->selectBrand();
    }
    public function getCompatibility()
    {
        return $this->model->selectCompatibility();
    }
    public function showForm()
    {
        $models = $this->getModel();
        $parts = $this->getPart();
        $brands = $this->getBrand();
        $compatibilities = $this->getCompatibility();
        include 'views/form.php';
    }
    public function addModel()
    {
        $modelName = $_POST['modelName'];
        $partID = $_POST['partID'];
        $brandID = $_POST['brandID'];
        $compatibilityID = $_POST['compatibilityID'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        if (!$modelName || !$partID || !$brandID || !$compatibilityID || !$price || !$stock) {
            echo "<p>Missing infomation</p>";
            return;
        } else if ($this->model->insertModel($modelName, $partID, $brandID, $compatibilityID, $price, $stock)) {
            // header("Location: index.php?page=add-model");
            echo "<h4>Added a Model: <strong>$modelName</strong> successfully</h4><hr><br>";
            exit();
        } else {
            echo "<p>Could not add models</p><hr><br>";
        }
    }
    public function addPart()
    {
        $partName = $_POST['partName'];
        if (!$partName) {
            echo "<p>Missing info of Part Name</p>";
            return;
        } else if ($this->part->insertPart($partName)) {
            echo "<h4>Added a Part: <strong>$partName</strong> successfully</h4><hr><br>";
            exit();
        } else {
            echo "<p>Could not add parts</p><hr><br>";
        }
    }
    public function addBrand()
    {
        $brandName = $_POST['brandName'];
        if (!$brandName) {
            echo "<p>Missing info of Brand Name</p>";
            return;
        } else if ($this->brand->insertBrand($brandName)) {
            echo "<h4>Added a Brand: <strong>$brandName</strong> successfully</h4><hr><br>";
            exit();
        } else {
            echo "<p>Could not add brands</p><hr><br>";
        }
    }
    public function addCompatibility()
    {
        $compatibilityName = $_POST['compatibilityName'];
        if (!$compatibilityName) {
            echo "<p>Missing info of Compatibility</p>";
            return;
        } else if ($this->compatibility->insertCompatibility($compatibilityName)) {
            echo "<h4>Added a Compatibility: <strong>$compatibilityName<strong> successfully</h4><hr><br>";
            exit();
        } else {
            echo "<p>Could not add compatibilities</p><hr><br>";
        }
    }
}

include_once 'controllers/connection.php';
$connection = new connectionObject($host, $username, $password, $database);
$controller = new Controller($connection);

if (isset($_POST['submit'])) {
    $controller->addModel();
    $controller->showForm();
} else if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['modelID'])) {
    // $modelID = $_GET['modelID'];
    $controller->editModelByID($modelID);
} else {
    $controller->showForm();
}

if (isset($_POST['resubmit'])) {
    $modelID = $_POST['modelID'];
    $modelName = $_POST['modelName'];
    $partID = $_POST['partID'];
    $brandID = $_POST['brandID'];
    $compatibilityID = $_POST['compatibilityID'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $controller->updateModel($modelID, $modelName, $partID, $brandID, $compatibilityID, $price, $stock);
}
