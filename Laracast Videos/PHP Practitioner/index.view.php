<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Refresher</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>List of animals</h2>
        <ul>
            <?php foreach ($animals as $animal) : ?>
                <li><?= $animal; ?></li>
            <?php endforeach; ?>
        </ul> -->

    <!-- <h2>Features of a person</h2>
    <ul>
        <?php foreach ($person as $key => $feature) : ?>
            <li><?= $key. ":" . $feature; ?></li>
        <?php endforeach; ?>
    </ul> -->

    <!-- <h2>Tasks for the day</h2>
        <ul>
            <li>
                <strong>Name: </strong><?= $task['title']; ?>
            </li>
            <li>
                <strong>Due Date: </strong><?= $task['due']; ?>
            </li>
            <li>
                <strong>Person Responsible: </strong><?= $task['assigned_to']; ?>
            </li>
            <li> -->
                <!-- <strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete'; ?> -->

                <!-- <strong>Status: </strong>
                <?php if($task['completed']) :?>
                    <span class="icon">&#9989;</span>
                <?php else : ?>
                    <span class="icon">Incomplete</span>
                <?php endif; ?>
            </li>
            <li>
                <strong>Billable: </strong>
                <?php if($task['billable']) : ?>
                    <span class="icon">&#9989;</span>
                <?php else : ?>
                    <span class="icon">Not Billable</span>
                <?php endif ; ?>
            </li>
        </ul> -->
</body>
</html>
