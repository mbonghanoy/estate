<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <script src="https://use.fontawesome.com/215138297b.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <form action="" method="POST">
        <header></header>
        <div class="left-container">
            <div class="side-nav">
                <li><a href="reports">Reports</a></li>
                <li><a href="items">Assets</a></li>
                <li><a href="signup">Add Asset</a></li>
                <li><a href="logout">Logout</a></li>
            </div>
        </div>
        <div class="right-container">
            <h1>Add an Assets</h1>
            <h3>Asset Details</h3>
            <div class="sign-up-form">
                <div class="description">
                    Description* <input type="text" name="description" required>
                </div>
                <div class="asset-tag-id">
                    Asset Tag ID* <input type="text" name="asset_tag_id" required>
                </div>
                <div class="purchase-date">
                    Purchase Date <input type="date" name="purchase_date" required>
                </div>
                <div class="serial-number">
                    Serial No <input type="text" name="asset_serial" required>
                </div>
                <div class="brand">
                    Brand <input type="text" name="brand" required>
                </div>
                <div class="model">
                    Model <input type="text" name="model" required>
                </div>
                <div class="cost">
                    Cost <input type="text" name="cost" required>
                </div>
                <button type="submit" name="insert" class="submit-button">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>