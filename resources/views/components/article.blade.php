<div>
    <p>titre : {{ $titre }}</p>
    <p>url : {{ $url }}</p>
    @if ($prixS!=0)
        <p style="color:red">prixN : {{ $prixN }}</p>
        <p>prixS : {{ $prixS }}</p>
    @else
        <p >prixN : {{ $prixN }}</p>
    @endif
    
</div>