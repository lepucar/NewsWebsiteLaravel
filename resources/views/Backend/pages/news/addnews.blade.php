@extends('backend.components.master')

@section('master')
    <div>

        <form method="post" action="{{route('storenews')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:<a style="color:red">{{$errors->first('title')}}</a>
                </label>
                <input type="text" id="title" class="form-css" name="title" value="{{old('title')}}"><br>
            </div>


            


            <div class="form-group">
                <label for="summary">Summary:<a style="color:red">{{$errors->first('summary')}}</a></label>
                <input type="text" id="summary" class="form-css" name="summary" value="{{old('summary')}}"><br>
            </div>

            <div class="form-group">
                <label for="slug">Slug:<a style="color:red">{{$errors->first('slug')}}</a></label>
                <input type="text" id="slug" class="form-css" name="slug" value="{{old('slug')}}"><br>
            </div>
            <div class="form-group">
                <label for="Description">Description:<a style="color:red">{{$errors->first('description')}}</a></label>
                <textarea style="height:300px" id="description" class="form-css" name="description" value="{{old('description')}}"></textarea><br>
            </div>

            <div class="form-group">
                <label for="meta_description">Meta Description:<a style="color:red">{{$errors->first('meta_description')}}</a></label>
                <input type="text" id="meta_description" class="form-css" name="meta_description" value="{{old('meta_description')}}"><br>
            </div>


            

            <div class="form-group">
                <label for="category">Category:<a style="color:red">{{$errors->first('category_id')}}</a></label>
               
                            <select name="category_id" id="category_id" class="form-css">
                                <option value="">Select Section</option>
                                @foreach ($categoryData as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                                    >{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                       
            </div>


            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" value="{{old('image')}}" id="btn-upload" class="form-css"><br><br>
            </div>


            <div class="form-group">
                <button id="btn-add">Add Record</button>
            </div>





        </form>

    </div>
@endsection