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
        <nav>
            <li>
                <a href="reports">
                    <i class="fa fa-envelope" aria-hidden="true"></i> Reports
                </a>
            </li>
            <li>
                <a href="items">
                    <i class="fa fa-list" aria-hidden="true"></i> Assets
                </a>
            </li>
            <li>
                <a href="signup ">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Asset
                </a>
            </li>
            <li>
                <a href="employee">
                    <i class="fa fa-users" aria-hidden="true"></i> Employees
                </a>
            </li>
            <li>
                <a href="logout">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                </a>
            </li>
        </nav>
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
                <p>Total Cost of Assets</p>
            </div>
        </div>
        <div class="checkout-table">
            <table>
                <tr class="title">
                    <td colspan="3">Checkout</td>
                </tr>
                <tr class="mini-title">
                    <td>Name</td>
                    <td>Item Description</td>
                    <td>Checkout date</td>
                </tr>
                <?php foreach($viewCheckedout as $viewCheckout): ?>
                <tr>
                    <td><?php echo $viewCheckout->first_name ?></td>
                    <td><?php echo $viewCheckout->description ?></td>
                    <td>
                        <?php echo $viewCheckout->checkout_date ?>
                        <a href="view?id=<?php echo $viewCheckout->asset_id ?>">view</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>