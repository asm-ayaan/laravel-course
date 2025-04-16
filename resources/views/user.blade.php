<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <i>Name:</i> {{ $user->name }}
   <br>
   <i>Email:</i> {{ $user->email }}

   <h6>User Posts</h6>
   <div style="display: flex">
    @foreach($user->posts as $post)
        <div style="border: 1px solid black; height:300px; width:300px; margin-right:10px">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach
   </div>

</body>
</html>