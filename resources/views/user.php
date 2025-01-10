<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <h1>User</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi numquam impedit, fuga possimus reprehenderit nesciunt recusandae sed quis! Unde, consectetur ducimus natus adipisci laudantium doloremque autem reiciendis accusamus amet iste!</p>

    <fieldset>
        <legend>User Information</legend>
        <div class="info">
            <h2>Name:</h2>
            <p><?php echo $name; ?></p>
            <h2>Age:</h2>
            <p><?php echo $age; ?> years</p>
            <p><?php echo $age * 12; ?> months</p>
            <p><?php echo $age * 12 * 4; ?> weeks</p>
            <p><?php echo $age * 12 * 4 * 7; ?> days</p>
        </div>
    </fieldset>

</body>

</html>