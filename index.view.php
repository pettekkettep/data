<html>
<head>
    <meta charset="UTF-8">
    <title>My webpage</title>
    <style>
        header{
            padding: 2em;
            text-align: center;
            background: teal;
            color: white;
            margin: 0;
        }
        body{
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <?= 'Hello!!!' ?>
    </header>
    <ul>
        <?php foreach($animals as $animal): ?>
        <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>