<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee</title>
</head>
<body>
    <h1>Items</h1>
   <table>
       <tr>
           <td>Item Serial</td>
           <td>Item Name</td>
           <td>Item Description</td>
       </tr>
       <?php foreach($contacts as $contact): ?>
       <tr>
           <td><?php echo $contact->asset_serial ?></td>
           <td><?php echo $contact->asset_name ?></td>
           <td><?php echo $contact->asset_description ?></td>
       </tr>
       <?php endforeach; ?>
   </table>

</body>
</html>