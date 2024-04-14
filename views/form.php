<h3 class="btn"><i class="fa-solid fa-computer"></i>Add New Models</h3>
<form id="modelForm" method="POST">
    <input id="modelName" type="text" name="modelName" placeholder="Model Name">
    <!-- <articel id="modelResults"></articel> -->

    <select name="partID" id="partID">
        <option value="">Select a Part</option>
        <?php
        if ($parts) {
            foreach ($parts as $part) {
                echo "<option value=" . $part['partID'] . ">" . $part['partName'] . "</option>";
            }
        }
        ?>
    </select>
    <select name="brandID" id="brandID">
        <option value="">Select a Brand</option>
        <?php
        if ($brands) {
            foreach ($brands as $brand) {
                echo "<option value=" . $brand['brandID'] . ">" . $brand['brandName'] . "</option>";
            }
        }
        ?>
    </select>
    <select name="compatibilityID" id="compatibilityID">
        <option value="">Select Compatibility</option>
        <?php
        if ($compatibilities) {
            foreach ($compatibilities as $compatibility) {
                echo "<option value=" . $compatibility['compatibilityID'] . ">" . $compatibility['compatibilityName'] . "</option>";
            }
        }
        ?>
    </select>
    <input type="text" name="price" placeholder="Price">
    <input type="text" name="stock" placeholder="Stock">
    <div></div>
    <div class="button-flex">
        <input type="submit" name="submit" value="Submit">
        <input type="button" name="reset" onclick="window.location.href='index.php?page=add-model';" value="Reset">
    </div>
</form>