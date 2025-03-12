@extends('layout')
    @section('content')
    <form action="/notes/show" method="post"> 
        {{ csrf_field() }}  <br>
        <h1>Liste des notes</h1>
              
            <input type="text" name="prenom" placeholder="Entrez un nom"/>
            
            <input type="submit" value="Rechercher" /> <br>
            
        </form>
        <table  style="border-collapse:collapse" class="table caption-top">
            <tr>
                <th>Nom </th>
                <th>Note </th>
            </tr>
            @forelse ($notes as $Nom=>$note)
            <tr
            @if ($theme==="all")
            style="background-color:white"

            @elseif($theme==="color")
             style= "background-color:
                @if ($note > 10)
                
                green 

                @elseif($note <8)
                    
                    red
                    
                @else
                    
                    orange
                @endif 
            @elseif($theme==="decorate")
                @if($loop->even)
                    style="background-color:white"
                @elseif($loop -> odd)
                    style="background-color:black;color:white"
                @endif 
            @endif 
            
                ">
                <td>{{ $Nom }}</td>
                <td>{{ $note }}</td>
            </tr>
            @empty
                <td colspan="2" style="background-color:yellow ">Cet élève ne figure pas dans le tableau </td>
            @endforelse
            
        </table>
        <!-- @if (!empty($prenom))
            <div>
                <p>Votre prenom {{ $prenom }}</p>
                <p>Votre nom {{ $nom }}</p>
                <p>Votre Sexe {{ $sexe }}</p>
                <p>Votre email {{ $email }}</p>
            </div>
        @endif -->
    @endsection   