<?php
// The todo items will be in this array
$items = [];

// If the todos.txt file exists, we load it
if (file_exists('todos.txt')) {
    $todos = file_get_contents('todos.txt');

    // Remove trailing spaces
    $todos = trim($todos);

    // Split the todos string at every new line (\n)
    $items = explode("\n", $todos);

    // Reverse the list so it starts with the latest todo
    $items = array_reverse($items);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
</head>

<body>
    <h1>Todos</h1>

    <form action="/save.php" method="POST">
        <label for="text">Text:</label>
        <input type="text" name="text" id="text" placeholder="Put PA pe frigider">

        <button type="submit">
            Save
        </button>
    </form>

    <ul>
        <?php foreach ($items as $item) : ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>