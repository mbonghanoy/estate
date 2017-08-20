<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
            <div class="">
                Description* <input type="text" name="description">
            </div>
            <div class="">
                Serial No <input type="text" name="asset_serial">
            </div>
            <div class="">
                Brand <input type="text" name="brand">
            </div>
            <div class="">
                Asset Tag ID* <input type="text" name="asset_tag_id">
            </div>
            <div>
                Purchase Date <input type="date" name="purchase_date">
            </div>
            <div>
                Model <input type="text" name="model">
            </div>
            <div>
                Cost <input type="text" name="cost">
            </div>
            <div>
                <input type="submit" name="insert" value="save">
            </div>
        </div>
    </form>
</body>
</html>