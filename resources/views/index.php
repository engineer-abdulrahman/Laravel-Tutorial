<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi numquam impedit, fuga possimus reprehenderit nesciunt recusandae sed quis! Unde, consectetur ducimus natus adipisci laudantium doloremque autem reiciendis accusamus amet iste!</p>

    <fieldset>
        <legend>Client Information</legend>
        <div class="info">
            <h2>Name:</h2>
            <p><?php echo $name; ?></p>
            <h2>Email:</h2>
            <p><?php echo $email; ?></p>
            <h2>Address:</h2>
            <p><?php echo $address; ?></p>
        </div>
    </fieldset>

</body>

</html>