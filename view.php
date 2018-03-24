<DOCTYPE html>
    <head>
        <style>
            .Hello{
                background-color: #1c15ff;
                padding: 2em;
                text-align: center;
            }
        </style>
        <title>
            Hello, World!
        </title>
    </head>
    <body>
    <div class="Hello">
        <h1>
            <?= $greetings ?>
        </h1>
    </div>
    <div>
        <ul>
            <?php foreach ($persons as $key => $value) : ?>
                    <li><?= $key . ': ', $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    </body>
</DOCTYPE>
