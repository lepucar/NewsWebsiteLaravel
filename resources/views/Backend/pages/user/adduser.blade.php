@extends('backend.components.master')

@section('master')
    <div>

        <form method="post" action="{{route('storeuser')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:<a style="color:red">{{$errors->first('name')}}</a>
                </label>
                <input type="text" id="name" class="form-css" name="name" value="{{old('name')}}"><br>
            </div>


            


            <div class="form-group">
                <label for="email">Email:<a style="color:red">{{$errors->first('email')}}</a></label>
                <input type="text" id="email" class="form-css" name="email" value="{{old('email')}}"><br>
            </div>


            <div class="form-group">
                <label for="password">Password:<a style="color:red">{{$errors->first('password')}}</a></label>
                <input type="password" id="password" class="form-css" name="password"><br>

            </div>

            <div class="form-group">
                <label for="gender">Gender: <a style="color:red">{{$errors->first('gender')}}</a></label>
                <label class="form-css"><input type="radio" value="male" {{old('gender') == 'male' ? 'checked' : '' }} name="gender" >Male</label>
                <label class="form-css"><input type="radio" value="female" {{old('gender') == 'female' ? 'checked' : '' }}name="gender" >Female</label><br>
            </div>


            <div class="form-group">
                <label for="role">Role:<a style="color:red">{{$errors->first('role')}}</a></label>
                <select class="form-css" name="role" id="role">
                    <option value="">Select Role</option>
                    <option {{old('role') == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                    <option {{old('role') == 'user' ? 'selected' : '' }} value="user">User</option>
                </select><br>
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