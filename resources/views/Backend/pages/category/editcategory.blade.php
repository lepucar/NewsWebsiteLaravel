@extends('backend.components.master')

@section('master')
    <div>

        <form method="post" action="{{route('updatecategory',$category->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Category Name:<a style="color:red">{{$errors->first('category_name')}}</a>
                </label>
                <input type="text" id="name" class="form-css" name="category_name" value="{{$category->category_name}}"><br>
            </div>


            


            <div class="form-group">
                <label for="slug">Slug:<a style="color:red">{{$errors->first('slug')}}</a></label>
                <input type="text" id="slug" class="form-css" name="slug" value="{{$category->slug}}"><br>
            </div>


            

            

            <div class="form-group">
                <button id="btn-add">Add Record</button>
            </div>





        </form>

    </div>
@endsection