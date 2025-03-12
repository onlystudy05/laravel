@extends("controle1.modele");
@section('main')
<div>
    @if ($note>=12)
        <h1 style="color: green;">
    @elseif($note<10)
        <h1 style="color: red;">
    @else
        <h1 style="color: orange;">
    @endif
    {{ $email }}</h1>
    <h1>{{ $note }}</h1>
</div>
@endsection

