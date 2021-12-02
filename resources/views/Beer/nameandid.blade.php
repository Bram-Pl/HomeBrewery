@extends("master")
@section("subtitle","upload your recipe")


@section("content")
<html>
<form action="/insertname" method = "post">
    @csrf
    <input type="text" name ="name" id = "name" placeholder = "name"/><br/>
    <button type = "submit">Submit</button>
    <button type ="button" onclick = "uploadNameAsync()"><strong>upload via javascript</strong></button>
</form>
</html>
@stop

