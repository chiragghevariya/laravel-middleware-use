<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
</head>
<body>

<form method="POST" action="{{url('auth/login')}}">
    {!! csrf_field() !!}
    <input type="email" name="email" id="email" placeholder="Email Address" />
    <input type="password" name="password" id="password" placeholder="Password" />
                                <span>
                                    <input name="remember" id="remember" type="checkbox" class="checkbox">
                                    Keep me signed in
                                </span>
    <button type="submit" class="btn btn-default">Login</button>
</form>

</body>
</html>
