<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View asset</title>
</head>
<body>
    <div class="left-container">
        <div class=""><a href="items">Assets</a></div>
        <div class=""><a href="signup ">Add Asset</a></div>
        <div class=""><a href="logout">Logout</a></div>
    </div>
    <div class="right-container">
        <?php foreach($contacts as $contact): ?>
        <h1><?php echo $contact->description ?></h1>
        <table>
            <tr>
                <td>Asset Tag ID</td>
                <td><?php echo $contact->asset_tag_id ?></td>
            </tr>
            <tr>
                <td>Purchase Date</td>
                <td><?php echo $contact->purchase_date ?></td>
            </tr>
            <tr>
                <td>Cost</td>
                <td><?php echo $contact->cost ?></td>
            </tr>
            <tr>
                <td>Brand</td>
                <td><?php echo $contact->brand ?></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><?php echo $contact->model ?></td>
            </tr>
            <tr>
                <td>Serial No</td>
                <td><?php echo $contact->asset_serial ?></td>
            </tr>
            <tr>
                <td class="asset-action">
                    <a href="edit?id=<?php echo $contact->asset_id ?>">edit</a>
                    <a href="checkout?id=<?php echo $contact->asset_id ?>">checkout</a>
                    <a href="checkin?id=<?php echo $contact->asset_id ?>">checkin</a>
                </td>
            </tr>
        </table>
        <?php endforeach; ?>
    </div>
</body>
</html>