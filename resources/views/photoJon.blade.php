@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    @foreach ($photos as $photo)
    <div class="col-sm-3">
      <img src="{{$photo->lien}}" class="img-fluid" alt="{{$photo->nom}}">
    </div>
    @endforeach
  </div>

</div>
{{ $photos->links() }}
@endsection
