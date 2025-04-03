<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>update Film</h1>
    
    <form action="{{ route("film.update") }}" method="post" >
        @csrf
    
        <label >Titre</label>
        <input type="text" value="{{ $film->titre }}" name="Titre"><br/>
        <label >Pays</label>
        <input type="text" value="{{ $film->pays }}" name="Pays"><br/>
        <label >Annee</label>
        <input type="number" value="{{ $film->annee }}" name="Annee"><br/>
        <label >genre</label>
        <input type="text" value="{{ $film->genre }}" name="genre"><br/>
        <label >duree</label>
        <input type="number" value="{{ $film->duree }}" name="duree"><br/>
        
        <input type="submit" value="Modifier">
    </form>
</body>
</html>