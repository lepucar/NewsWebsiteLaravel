<!DOCTYPE html>

<html>

<head>
    <title> Admin Panel </title>
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

  

</head>

<body>
    <div class="container-main">


        <div class="header">
            <div class="container">
                <div class="logo">
                    <h1 style="color:white">Logo</h1>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="">Home</a></li>
                        
                        <li><a href="{{route('logout')}}">Logout</a></li>

                    </ul>
                </div>
            </div>


        </div>
        <div class="sidebar-main">


            <div class="aside">
                <div class="sidebar-container">
                    <div class="user-profile">
                        <div class="image-box">
                            <img src="{{Auth::user()->image}}" alt="user" height="50px" width="50px">
                        </div>
                        <div class="name-box">
                            <h3>{{Auth::user()->name}}</h3>
                        </div>

                    </div>
                    <h2 id="txt-sidebar">Controls</h2>
                    <ul class="control-menu">
                        <li><a href="{{route('adduser')}}">Add User</a></li>
                        <li><a href="{{route('users')}}">Show User</a></li>
                        <li><a href="{{route('addcategory')}}">Add Category</a></li>
                        <li><a href="{{route('categories')}}">Show Category</a></li>
                        <li><a href="{{route('addnews')}}">Add News</a></li>
                        <li><a href="{{route('news')}}">Show News</a></li>
                        
                        <li><a href="">Logout</a></li>
                    </ul>

                </div>
            </div>

            <div class="main">

                @yield('master')

            </div>

        </div>
    </div>
</body>

</html>