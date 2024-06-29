@extends('frontend.components.master')

@section('master')

<div class="news-list">
               @foreach ($newsResult as $news) 
                    <div class="news-box">

                         @if ($news->image) 
                            <img src="{{url($news->image)}}" alt="">
                            @endif
                       
                        <a href="{{route('news-details',$news->id)}}">
                            <h1>{{$news->title}}</h1>
                        </a>
                        <p>{{$news->summary}}</p>
                        <a href="{{route('news-details',$news->id)}}" id="read-more">Read More</a>
                        <span>Category: {{$news->category_name}}</span>
                        

                    </div>

                    @endforeach
                
            </div>


@endsection