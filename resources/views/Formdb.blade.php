<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($type=="add")
        <form action="/addfilm" method="post"> 
            {{ csrf_field() }}  <br>
            <h1> Formulaire d'ajoute un film</h1>
                <input type="text" name="titre" placeholder="titre"/> <br>
                <input type="text" name="pays" placeholder="pays"/> <br>
                <input type="text" name="annee" placeholder="annee"/> <br>
                <input type="text" name="genre" placeholder="genre"/> <br>
                <input type="text" name="duree" placeholder="duree"/> <br>
                <input type="submit" value="ajout"/><br>
                @isset ($msg)
                    <p>{{ $msg }}</p>
                @endisset
                
        </form>
    @elseif ($type=="all")
    <h1> Liste des films</h1>
    <a href="{{ route("addfilm")}}"> ajouter film</a>
    <div style="display:flex; gap: 50px;flex-wrap:wrap">
        @foreach ($films as $film)
            <div style="background-color:aliceblue; min-width: 150px; min-height: 250px;">
                <h3>Titre : {{ $film->titre }} </h3>
                <p>pays : {{ $film->pays }} </p>
                <p>annee : {{ $film->annee }} </p>
                <p>genre : {{ $film->genre }} </p>
                <p>duree : {{ $film->duree }} </p>
    <a href="{{ route('showfil', ['id' => $film->id]) }}">update {{ $film->id }}</a>         
    <a href="{{ route('delete', ['id' => $film->id]) }}" style=" margin-left: 10px;">delete {{ $film->id }}</a>            </div>
        @endforeach
    </div>
    @elseif ($type=="update")
        <form action="{{ route('updatefilm', ['id' => $film->id]) }}" method="post"> 
            {{ csrf_field() }}  <br>
            <h1> update film</h1>
                <input type="text" name="titre" placeholder="titre" value="{{ $film->titre }}"/> <br>
                <input type="text" name="pays" placeholder="pays" value="{{ $film->pays }}"/> <br>
                <input type="text" name="annee" placeholder="annee" value="{{ $film->annee }}"/> <br>
                <input type="text" name="genre" placeholder="genre" value="{{ $film->genre }}"/> <br>
                <input type="text" name="duree" placeholder="duree" value="{{ $film->duree }}"/> <br>
                <input type="submit" value="update"/>
        </form>
    @endif

</body>
</html>