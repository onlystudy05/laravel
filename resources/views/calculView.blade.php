<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="/calcule" method="post"> 
        {{ csrf_field() }}  <br>
        <h1>calculatrice</h1>
              
            <input type="number" name="n1" /> 
            <select name="op" >
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
             
            <input type="number" name="n2" />
            <input type="submit" value="=" /> 
            <span>{{ $res }}</span> 
        </form>
</body>

</html>