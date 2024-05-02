<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail content</title>
</head>
<body>
   <h1>Nouvel article disponible sur le site de l'ONG APIS</h1>
   <p><b>Titre de l'article:</b> {{ $title }}</p>

    {{-- <img src="{{Storage::url($image )}}" alt="{{$title}}"/> --}}

   <div style="border: 1px solid #11579c; padding: 10px;" >
       <p><b>Message:</b></p>
       <p>{{ $content }}</p>
   </div>
 
  
</body>
</html>