<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role List</title>
</head>
<body>
    <h1>List</h1>
    <?php
        $db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
        $result = $db->query("SELECT * FROM roles");
        $roles = $result->fetchAll();
    ?>

    <ul>
        <?php foreach($roles as $role): ?>
            <li>
                <a href="del.php?id=<?= $role['id']?>">Delete</a>
                <a href="edit.php?id=<?= $role['id']?>">Edit</a>
                <?= htmlspecialchars($role['name']) ?>
                (<?= $role['value'] ?>)
            </li>
        <?php endforeach ?>
    </ul>
    <a href="new.php">New Role</a>
</body>
</html>