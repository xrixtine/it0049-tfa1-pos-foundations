<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PUIHAHA Page</title>
</head>
<body>
    <h1>This is PUIHAHA Page!</h1>

    <?php if (isset($id)): ?>
        <p>Welcome: <?= esc($id) ?></p>
    <?php endif; ?>
</body>
</html>