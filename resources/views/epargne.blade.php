<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/simuler" method="post">
        {{ csrf_field() }}

        <input type="number" name="montantObj" placeholder="Entre votre montantObj"><br>
        <input type="number" name="capital" placeholder="Entre votre capital"><br>
        <input type="submit" value="calculer">
    </form>
    @yield('cc')
</body>
</html>
