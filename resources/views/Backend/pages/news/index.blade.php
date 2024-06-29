@extends('backend.components.master')

@section('master')

<h1> News List </h1>

    <br>

    <table class="show-table">
        <tr>
            <th>ID</th>
            <th>Title:</th>
            <th>Category</th>
            
            <th>Slug</th>
            <th>Summary</th>
            <th>Meta Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        
        @foreach($newsData as $news) 

            <tr>
                <td>{{$news->id}}</td>
                <td>{{$news->title}}</td>
                <td>{{$news->title}}</td>
                
                <td>{{$news->slug}}</td>
                <td>{{$news->summary}}</td>
                <td>{{$news->meta_description}}</td>
                <td>@if($news->image)
                                        <img src="{{url($news->image)}}" alt="image"
                                             style="width: 50px;height: 50px">
                                    @else
                                        <span>No Image</span>
                                    @endif
                </td>
                <td>
                    <div class="btns">
                        
                        
                            <a href="{{route('editnews',$news->id)}}">
                            <button class="btn-edit">Edit</button>
                            </a>
                       
                        
                        <a href="{{route('deletenews',$news->id)}}">
                            <button class="btn-delete">Delete</button>
                        </a>
                    </div>

                </td>
            </tr>

            @endforeach

        
    </table>

    @endsection