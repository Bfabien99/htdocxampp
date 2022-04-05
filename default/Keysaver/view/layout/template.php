<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/icon/favicon.ico" type="image/x-icon">
    <title><?= !empty(trim($title)) ? $title:'document';?></title>
</head>
<body>
    <header>

    </header>

    <div class="container">
        <?= !empty(trim($content)) ? $content:'<h1>Nothing to show</h1>';?>
    </div>
    
</body>
</html>