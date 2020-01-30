@extends('layouts.app')

@section('content')
@foreach ($photos as $photo)
    <img class="img-fluid" src="{{$photo->lien}}">
@endforeach
{{ $photos->links() }}
@endsection
