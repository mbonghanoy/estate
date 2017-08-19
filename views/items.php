<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="left-container">
        <div class=""><a href="dashboard">Assets</a></div>
        <div class=""><a href="signup">Add an Asset</a></div>
        <div class=""><a href="logout">Logout</a></div>
    </div>
    <div class="right-container">
        <table class="asset-table">
            <tr>
                <td></td>
                <td>Asset id</td>
                <td>Cost</td>
                <td>Brand</td>
            </tr>
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td></td>
                <td><?php echo $contact->asset_id ?></td>
                <td><?php echo $contact->cost ?></td>
                <td><?php echo $contact->brand ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>