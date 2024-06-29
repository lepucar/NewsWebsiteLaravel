@extends('frontend.components.master');

@section('master')
<div class="news-display">

        <h1>{{$newsDetails->title}}</h1>
        @if ($newsDetails->image)
        <img src="{{url($newsDetails->image)}}" alt="">
       @endif
        <p>{{$newsDetails->description}}</p>

</div>

@endsection