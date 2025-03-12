<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('search') }}" method="Get">
        <input type="text" name="txt" value="{{ old('txt') }}" placeholder="Entrez un nom">
        <button type="submit">Rechercher</button>
    </form>
    <table>
        <tr>
            <th>NOM</th>
            <th>NOTE</th>
        </tr>
    </table>
    
</body>
</html>