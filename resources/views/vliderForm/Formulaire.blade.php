<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Ajouter Film</h1>
    @if (session("msg"))
        <p>{{ session("msg") }}</p>
    @endif
    <form action="{{ route("film.store") }}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger"> 
            <ul> 
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> 
                @endforeach 
            </ul> 
        </div> 
        @endif
        <label >Titre</label>
        <input type="text" value="" name="Titre"><br/>
        <label >Pays</label>
        <input type="text" value="" name="Pays"><br/>
        <label >Annee</label>
        <input type="number" value="" name="Annee"><br/>
        <label >genre</label>
        <input type="text" value="" name="genre"><br/>
        <label >duree</label>
        <input type="number" value="" name="duree"><br/>
        <div class="mb-3"> 
            <label for="photo" class="form-label">Photo</label> 
            <input type="file" class="form-control" name= "photo" id="photo"/> 
        </div>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>