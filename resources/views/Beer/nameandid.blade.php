@extends("master")
@section("subtitle","upload your recipe")


@section("content")
<html>
<form action="/insertname" method = "POST">
    @csrf
    <input type="text" name ="name" id ="name" placeholder = "name"/><br/>
    <button type = "submit">Submit</button>
</form>
</html>
@stop

