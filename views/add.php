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
            <h1>Add Employee</h1>
            <h3>Employee Details</h3>
            <div class="employee-sign-up">
                <div class="first-name">
                    First Name <input type="text" name="first_name">
                </div>
                <div class="last-name">
                    Last Name <input type="text" name="last_name">
                </div>
                <div class="position">
                    Job Postion <input type="text" name="position">
                </div>
                <div>
                    <button type="submit" name="save">Save</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>