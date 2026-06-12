<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('Mail content')}}</title>
</head>
<body>
   <h1>{{__('Nouvel article disponible sur le site de lONG APIS')}}</h1>
   <p><b>{{__('Titre de larticle:')}}</b> {{ $title }}</p>

    {{-- <img src="{{Storage::url($image )}}" alt="{{$title}}"/> --}}

   <div style="border: 1px solid #11579c; padding: 10px;" >
       <p><b>{{__('Message:')}}</b></p>
       <p>{!! $content !!}</p>
   </div>
 
  
</body>
</html>