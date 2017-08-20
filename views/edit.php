<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div class="left-container">
            <div class="">
                <li><a href="items">Assets</a></li>
                <li><a href="signup">Add Asset</a></li>
                <li><a href="logout">Logout</a></li>
            </div>
        </div>
        <div class="right-container">
            <?php foreach($contacts as $contact): ?>
            <div class="">
                Description*
                <input type="text" name="description" value="<?php echo $contact->description ?>">
            </div>
            <div class="">
                Serial No <input type="text" name="asset_serial" value="<?php echo $contact->asset_serial ?>">
            </div>
            <div class="">
                Brand <input type="text" name="brand" value="<?php echo $contact->brand ?>">
            </div>
            <div class="">
                Asset Tag ID* <input type="text" name="asset_tag_id" value="<?php echo $contact->asset_tag_id ?>">
            </div>
            <div>
                Purchase Date <input type="date" name="purchase_date" value="<?php echo $contact->purchase_date ?>">
            </div>
            <div>
                Model <input type="text" name="model" value="<?php echo $contact->model ?>">
            </div>
            <div>
                Cost <input type="text" name="cost" value="<?php echo $contact->cost ?>">
            </div>
            <div>
                <input type="submit" name="update" value="save">
            </div>
            <?php endforeach; ?>
        </div>
    </form>
</body>
</html>
