<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor file XML</title>
</head>
<body>
<?php
    $xml = simplexml_load_file("companies.xml");
?>
<table>
<thead>
    <tr>
        <th>Company name</th>
        <th>Ceo</th>
        <th>Creation date</th>
        <th>State</th>
        <th>Street</th>
        <th>City</th>
        <th>ZIP</th>
        <th>Modifica</th>
    </tr>
</thead>
<tbody>
<?php foreach($xml->company as $comp) :?>
    <tr>
    <td><?php echo ($comp->name); ?></td>
    <td><?php echo ($comp->ceo); ?></td>
    <td><?php echo ($comp->dateCreated); ?></td>
    <td><?php echo($comp->address->state); ?></td>
    <td><?php echo($comp->address->street); ?></td>
    <td><?php echo($comp->address->city); ?></td>
    <td><?php echo($comp->address->zip); ?></td>
    <td>
            <form action='modifica.php' method="get">
                <button type="submit" name="modifica" value="<?php echo $comp->name; ?>">Modifica</button>
            </form>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</tbody>

</table>
    
</body>
</html>
