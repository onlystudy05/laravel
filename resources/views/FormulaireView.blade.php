<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="/submit" method="post"> 
        {{ csrf_field() }}  <br>
        <h1>Formulaire d'inscription des etudiants</h1>
              
            <input type="text" name="prenom" placeholder="prenom"/> <br>
            <input type="text" name="nom" placeholder="nom"/> <br>
            <select name="sexe" >
                <option value="Femme">Femme</option>
                <option value="Male">Male</option>
            </select><br>
            <input type="email" name="email" placeholder="email"/><br>
            <input type="submit" value="Soumetter l'inscription" /> <br>
            
        </form>
        @if (!empty($prenom))
            <div>
                <p>Votre prenom {{ $prenom }}</p>
                <p>Votre nom {{ $nom }}</p>
                <p>Votre Sexe {{ $sexe }}</p>
                <p>Votre email {{ $email }}</p>
            </div>
        @endif
        
</body>

</html>