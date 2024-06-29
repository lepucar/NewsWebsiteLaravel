@extends('backend.components.master')

@section('master')

<h1> Users List </h1>

    <br>

    <table class="show-table">
        <tr>
            <th>ID</th>
            <th>Name:</th>
            
            <th>Email</th>
            <th>Gender</th>
            <th>Role</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        
        @foreach($userData as $user) 

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                
                <td style="word-break: break-all;">{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->role}}</td>
                <td>@if($user->image)
                                        <img src="{{url($user->image)}}" alt="image"
                                             style="width: 50px;height: 50px">
                                    @else
                                        <span>No Image</span>
                                    @endif
                </td>
                <td>
                    <div class="btns">
                        
                        
                            <a href="{{route('edituser',$user->id)}}">
                            <button class="btn-edit">Edit</button>
                            </a>
                       
                        
                        <a href="{{route('deleteuser',$user->id)}}">
                            <button class="btn-delete">Delete</button>
                        </a>
                    </div>

                </td>
            </tr>

            @endforeach

        
    </table>

    @endsection