<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $xml = simplexml_load_file("companies.xml");
?>
</head>
<body>
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
    </tr>
</thead>
<tbody>
    <form action="salva.php" method="get">
            <tr>
    <?php foreach ($xml->company as $comp) : ?>
        <?php $modifica = $_GET["modifica"];
        if($comp->name == $modifica): ?>
    <td><input name="name" value="<?php echo($comp->name); ?>"></td>
    <td><input name="ceo" value="<?php echo($comp->ceo); ?>"></td>
    <td><input name="dateCreated" value="<?php echo($comp->dateCreated); ?>"></td>
    <td><input name="state" value="<?php echo($comp->address->state); ?>"></td>
    <td><input name="street" value="<?php echo($comp->address->street); ?>"></td>
    <td><input name="city" value="<?php echo($comp->address->city); ?>"></td>
    <td><input name="zip" value="<?php echo($comp->address->zip); ?>"></td>
        <?php break; endif; ?>
    <?php endforeach; ?>
    <td><button name="modifica" value="<?php echo $_GET["modifica"]; ?>">Invia</button></td>
    </tr>
        </form>
        </tbody>
        
</table>
</body>
</html>