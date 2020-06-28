@extends('layouts.lokalne')

@section('title','Informacje Lokalne')
@section('Lokalne')
    <h5>Wiadomosci Lokalne</h5>
    <p>Kilka info z regionu</p>
    Info podane z parent: 
        {{ $data['title'] }}
       
@endsection


@section('stopka')
<p><strong>jesli znasz jakies info lokalne,chcesz sie podzielic -> daj znac</strong></p>
@endsection