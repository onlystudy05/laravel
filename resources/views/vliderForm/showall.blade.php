<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showall?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1> </h1>
    <a href="{{ route("film.create") }}" class="btn btn-primary">Ajouter un film</a>
    @if (session("msg"))
        <p class="">{{ session("msg") }}</p>
    @endif
    <table class="table table-bordered mt-3">
      <tr> 
        <th>Photo</th> 
        <th>Id</th> 
        <th>Titre</th> 
        <th>Pays </th> 
        <th>Annee </th> 
        <th>genre </th> 
        <th>duree </th>
        <th>Action</th> 
      </tr> 
        @foreach($films as $film) 
            <tr> 
                <td>
                    @if(!empty($film->photo)) 
                        <img src="{{asset("image/{$film->photo}") }}"  width="80px" height="80px">  
                    @else 
                        <img src="{{asset('image/default.jpg') }}"  width="80px">  
                    @endif 
                </td> 
                <td>{{ $film->id }}</td>
                <td>{{ $film->photo }}</td>
                <td>{{ $film->pays }}</td>
                <td>{{ $film->annee }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->duree }}</td>

            </tr> 
        @endforeach 
    </table> 

</body>
</html>