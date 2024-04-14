<h3>Edit a Model</h3>
<form method="POST">
    <input type="hidden" name="modelID" value="<?php echo $modelInfo['modelID']; ?>">
    <input type="text" name="modelName" value="<?php echo $modelInfo['modelName']; ?>">
    <select name="partID" id="partID">
        <?php
        foreach ($parts as $part) {
            echo "<option value=" . $part['partID'] . " ";
            echo $part['partID'] == $part['partID'] ? "selected" : " ";
            echo ">" . $part['partName'] . "</option>";
        }
        ?>
    </select>
    <select name="brandID" id="brandID">
        <?php
        foreach ($brands as $brand) {
            echo "<option value=" . $brand['brandID'] . " ";
            echo $brand['brandID'] == $brand['brandID'] ? "selected" : " ";
            echo ">" . $brand['brandName'] . "</option>";
        }
        ?>
    </select>
    <select name="compatibilityID" id="compatibilityID">
        <?php
        foreach ($compatibilities as $compatibility) {
            echo "<option value=" . $compatibility['compatibilityID'] . " ";
            echo $compatibility['compatibilityID'] == $compatibility['compatibilityID'] ? "selected" : " ";
            echo ">" . $compatibility['compatibilityName'] . "</option>";
        }
        ?>
    </select>

    <input type="text" name="price" value="<?php echo $modelInfo['price']; ?>">
    <input type="text" name="stock" value="<?php echo $modelInfo['stock']; ?>">
    <div></div>
    <div class="button-flex">
        <input type="submit" name="resubmit" value="Change">
        <input type="button" onclick="window.location.href='index.php?page=view-model';" value="Cancel">
    </div>
    <div></div>
    <span></span>
    <span></span>
    <span></span>
</form>