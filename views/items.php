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
        <h1>Assets</h1>
        <table class="asset-table">
            <tr class="asset-table-title">
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
                <td><?php echo $contact->asset_tag_id ?></td>
                <td><?php echo $contact->description ?></td>
                <td><?php echo $contact->brand ?></td>
                <td><?php echo $contact->purchase_date ?></td>
                <td>&#8369;<?php echo $contact->cost ?></td>
                <td class="status">
                    <span style="<?php if($contact->status_id == 'Available'){
                        echo 'color:#008000';
                        }else{
                            echo 'color:#1aa3ff';
                        }?>">
                        <?php echo $contact->status_id ?>
                    </span>
                </td>
                <td class="asset-action">
                    <a href="view?id=<?php echo $contact->asset_id ?>">view</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>