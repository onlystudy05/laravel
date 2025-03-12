@extends("controle1.modele");
@section('main')
<div>
    <form action="/login" method="post">
        {{ csrf_field() }}
        @if (session("msg"))
            <p style="color: red;">{{session("msg")}}</p>
        @endif
        <input type="text" name="email" placeholder="Entre votre Email"><br>
        <input type="password" name="pass" placeholder="Entre votre password"><br>
        <input type="submit" value="Login">
    </form>
    <x-article titre="iPhone14128Go s" url="images/telephones/iphone14.jpg" 
    prixN="9000dhs" prixS="8700dhs"  />
</div>
@endsection