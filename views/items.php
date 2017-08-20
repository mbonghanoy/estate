<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/items.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <script src="https://use.fontawesome.com/215138297b.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="left-container">
        <div class="side-nav">
            <div class=""><li><a href="items">Assets</a></li></div>
            <div class=""><li><a href="signup ">Add Asset</a></li></div>
            <div class=""><li><a href="logout">Logout</a></li></div>
        </div>
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
            <tr class="asset-table-details">
                <td></td>
                <td><?php echo $contact->asset_tag_id ?></td>
                <td><?php echo $contact->description ?></td>
                <td><?php echo $contact->brand ?></td>
                <td><?php echo $contact->purchase_date ?></td>
                <td><?php echo $contact->cost ?></td>
                <td><?php echo $contact->status ?></td>
                <td class="asset-action">
                    <a href="view?id=<?php echo $contact->asset_id ?>">view</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>