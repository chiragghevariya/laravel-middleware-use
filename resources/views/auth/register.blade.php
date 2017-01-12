<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
</head>
<body>

<form method="POST" action="{{url('register')}}">
    {!! csrf_field() !!}
    <input type="text" name="name" id="name"  placeholder="Name">
    <input type="email" name="email" placeholder="Email Address"/>
    <input type="password" name="password" placeholder="Password">
    <button type="submit" class="btn btn-default">Signup</button>
</form>

</body>
</html>
