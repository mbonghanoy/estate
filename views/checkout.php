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
        <nav>
            <li>
                <a href="reports">
                    <i class="fa fa-envelope" aria-hidden="true"></i> Reports
                </a></li>
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
            <h1>Assign To:</h1>
            <div class="option-button">
                <select name="employees">
                    <?php foreach($employees as $employee): ?>
                    <option value="<?php echo $employee->employee_id ?>"><?php echo $employee->first_name?></option>
                    <?php endforeach; ?>
                </select>
                <input type="date" name="checkout_date" required>
                <button type="submit" name="checkout">Checkout</button>
            </div>
            <?php foreach($contacts as $contact): ?>
            <h3><?php echo $contact->description ?></h3>
            <table class="asset-checkout">
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
                    <td>Status</td>
                    <td>
                        <span style="<?php if($contact->status_id == 'Available'){
                            echo 'color:#008000';
                            }else{
                                echo 'color:#1aa3ff';
                            }?>">
                            <?php echo $contact->status_id ?>
                        </span>
                    </td>
                </tr>
            </table>
            <?php endforeach; ?>
        </div>
    </form>
</body>
</html>