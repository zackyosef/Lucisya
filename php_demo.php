<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP DEMO TEST</h1>
    <?php
        if (isset($_REQUEST['btnSubmit'])) {
            $input = $_REQUEST['text_input_name'];
            echo '<p>' . $input . '</p>';
        }
    ?>
</body>
</html>