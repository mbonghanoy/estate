<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <script src="https://use.fontawesome.com/215138297b.js"></script>
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
        <h1>Employees</h1>
        <table class="employees">
            <tr class="employee-heading">
                <td colspan="2">Employees</td>
            </tr>
            <?php foreach($employees as $employee): ?>
            <tr>
                <td><?php echo "$employee->last_name, $employee->first_name" ?></td>
                <td><?php echo $employee->job_position?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <div class="employee-add">
            <a href="make">Add</a>
        </div>
    </div>
</body>
</html>