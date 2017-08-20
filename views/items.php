<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="left-container">
        <div class=""><a href="items">Assets</a></div>
        <div class=""><a href="signup ">Add Asset</a></div>
        <div class=""><a href="logout">Logout</a></div>
    </div>
    <div class="right-container">
        <h1>Assets</h1>
        <table class="asset-table">
            <tr class="asset-table-title">
                <td></td>
                <td>Asset Tag ID</td>
                <td>Description</td>
                <td>Brand</td>
                <td>Purchase Date</td>
                <td>Cost</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td></td>
                <td><?php echo $contact->asset_tag_id ?></td>
                <td><?php echo $contact->description ?></td>
                <td><?php echo $contact->brand ?></td>
                <td><?php echo $contact->purchase_date ?></td>
                <td><?php echo $contact->cost ?></td>
                <td><?php echo $contact->status ?></td>
                <td><a href="view?id=<?php echo $contact->asset_id ?>">view</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>