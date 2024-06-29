@extends('backend.components.master')

@section('master')

<h1> Categories List </h1>

    <br>

    <table class="show-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Action</th>
        </tr>

        
        @foreach($categoryData as $category) 

            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category_name}}</td>
                
                
                <td>{{$category->slug}}</td>
                
                <td>
                    <div class="btns">
                        
                        
                            <a href="{{route('editcategory',$category->id)}}">
                            <button class="btn-edit">Edit</button>
                            </a>
                       
                        
                        <a href="{{route('deletecategory',$category->id)}}">
                            <button class="btn-delete">Delete</button>
                        </a>
                    </div>

                </td>
            </tr>

            @endforeach

        
    </table>

    @endsection