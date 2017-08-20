<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact->brand ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php foreach($employees as $employee): ?>
        <select name="employees">
            <option value="<?php echo $employee->employee_id ?>"><?php echo $employee->first_name?></option>
        </select>
        <?php endforeach; ?>
        <input type="submit" name="checkout" value="checkout">
    </form>
</body>
</html>