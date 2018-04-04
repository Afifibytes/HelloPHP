<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
    <div>
        <ul>
            <!--foreach loop that check first if the task is completed or not, if its complete then make a stroke!-->
            <?php foreach ($tasks as $task) : ?>
                <?php if ($task->isComplete()) : ?>
                    <li><stroke><?= $task->getTask() ?></stroke></li>
                <?php else  : ?>
                    <li><?= $task->getTask() ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>