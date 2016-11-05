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
        <?= 'Użytkownicy' ?>
    </header>
    <ul>
        <?php foreach($users as $user): ?>
        <li>
            <?php if($user->verified) : ?>
                <span style="color: green"><?= $user->login ?></span>
            <?php else : ?>
                <span style="color: red"><?= $user->login ?></span>
            <?php endif ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>