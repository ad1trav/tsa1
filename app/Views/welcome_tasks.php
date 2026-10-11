
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today</title>
</head>
<body>
    <nav>
        <a href="/">Home</a> |
        <a href="/tasks">Task List</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>

    <h1>Welcome to Tasks for Today</h1>
    <h2>Today's Tasks (<?= date('F j, Y') ?>)</h2>

    <?php if (!empty($tasks)): ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No tasks scheduled for today.</p>
    <?php endif; ?>
</body>
</html>
