<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая заявка</title>
</head>
<body>
<h1>Новая заявка</h1>
<p><strong>Имя:</strong> {{ $name }}</p>
<p><strong>Телефон:</strong> {{ $phone }}</p>
@if($sku)
    <p><strong>Артикул:</strong> {{ $sku }}</p>
@endif
@if($email)
    <p><strong>Email:</strong> {{ $email }}</p>
@endif
@if($comment)
    <p><strong>Комментарий:</strong> {{ $comment }}</p>
@endif
</body>
</html>
