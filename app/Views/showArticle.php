<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>authors</th>
        </tr>
        <tr>
            <td><?php echo htmlspecialchars($article['name']) ?></td>
            <td><?php echo htmlspecialchars($article['authors']) ?></td>
        </tr>
    </table>
</body>
</html>