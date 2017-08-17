<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee</title>
</head>
<body>
    <h1>Employee</h1>
   <table>
       <tr>
           <td>First Name</td>
           <td>Last Name</td>
       </tr>
       <?php foreach($contacts as $contact): ?>
       <tr>
           <td><?php echo $contact->first_name ?></td>
           <td><?php echo $contact->last_name ?></td>
       </tr>
       <?php endforeach; ?>
   </table>

</body>
</html>