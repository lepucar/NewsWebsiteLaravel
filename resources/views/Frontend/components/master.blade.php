<!DOCTYPE html>

<html>

<head>
    <title> NewsWebsiteLaravel </title>
    <link href="{{url('assets/css/styles.css')}}" rel="stylesheet">



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
                        <li><a href="{{route('home')}}">Home</a></li>


                    </ul>
                </div>
            </div>


        </div>

        <div class="main">

            @yield('master');

        </div>

    </div>
    </div>
</body>

</html>