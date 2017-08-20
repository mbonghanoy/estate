<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reports.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <script src="https://use.fontawesome.com/215138297b.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <header></header>
    <div class="left-container">
        <div class="side-nav">
            <div><li><a href="reports">Reports</a></li></div>
            <div class=""><li><a href="items">Assets</a></li></div>
            <div class=""><li><a href="signup ">Add Asset</a></li></div>
            <div class=""><li><a href="logout">Logout</a></li></div>
        </div>
    </div>
    <div class="right-container">
        <div class="card card-3">
            <div class="card1">
                <?php foreach($contacts as $contact): ?>
                <p><?php echo $contact->num ?></p>
                <?php endforeach; ?>
                <p>Total Assets</p>
            </div>
        </div>
        <div class="card card-3">
            <div class="card2">
                <?php foreach($checkeout as $checkout): ?>
                <p><?php echo $checkout->checked ?></p>
                <?php endforeach; ?>
                <p>Checked out</p>
            </div>
        </div>
        <div class="card card-3">
            <div class="card3">
                <?php foreach($total as $sum): ?>
                <p>&#8369;<?php echo $sum->total ?></p>
                <?php endforeach; ?>
                <p>Value of Assets</p>
            </div>
        </div>
    </div>
</body>
</html>