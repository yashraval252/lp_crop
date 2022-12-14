<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
@isset($users)
<table class="table table-striped">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Image</th>
   </tr>
    @foreach($users as $user)
    <tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td><img src="{{ $user->image }}"/></td>
   </tr>
    @endforeach
<table>    
@endisset
</body>
</html>