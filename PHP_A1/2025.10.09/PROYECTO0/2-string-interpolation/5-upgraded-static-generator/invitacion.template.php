<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dear <?= htmlspecialchars($friend) ?>!</h1>
    <p>I would like to invite you to my birthday party!
        Please come <?= htmlspecialchars($event_date) ?> to <?= htmlspecialchars($location)?>.</p>
    <p>Sincerely,</p>
    <p>Your friend <?= htmlspecialchars($my_name) ?>.</p>
</body>
</html>