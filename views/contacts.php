<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>My website brah</h1>

    <ul>
        <?php foreach($contacts as $contact): ?>
        <li><?php echo $contact->first_name ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>