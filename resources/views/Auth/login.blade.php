<!DOCTYPE html>
<html>

<head>
    <title>Slide Navbar</title>
    <link href="{{url('assets/css/authstyle.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">


        <div class="signup">
            <form action="{{route('login')}}" method="post">
                @csrf
                <h2 id="login" for="chk">Login</h2>

                <input type="email" name="email" placeholder="Email">
                <label><a style="color:red">{{$errors->first('email')}}</a><label>
                        <input type="password" name="password" placeholder="Password">
                        <label><a style="color:red">{{$errors->first('password')}}</a><label>
                                <button>Log In</button>
            </form>
        </div>


    </div>
</body>

</html>