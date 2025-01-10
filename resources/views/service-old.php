<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 0 auto;
        }

        table th,
        table td {
            text-align: center;
            border: 1px solid #eee;
            border-collapse: collapse;
            padding: 5px;
        }

        table th {
            background-color: rgb(255, 75, 75);
            color: #fff;
        }

        h3 {
            background-color: #eee;
            padding: 10px;
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <table>
        <h1>All Services</h1>
        <thead>
            <tr>
                <th>Service No</th>
                <th>Service</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($services as $service) {
            ?>
                <tr>
                    <td>
                        <?php
                        if ($i == 0)
                            echo "<h3>FIRST</h3>";
                        else if ($i == count($services) - 1)
                            echo "<h3>LAST</h3>";
                        else
                            echo $service[0];
                        ?>
                    </td>
                    <td><?php echo $service[1] ?></td>
                    <td><?php echo $service[2] ?></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>