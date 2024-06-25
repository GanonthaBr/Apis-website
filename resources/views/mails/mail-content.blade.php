<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
   <h1>{{__('Contenu du message')}}</h1>
   <p><b>{{__('Nom de lexpéditeur:')}}</b> {{ $name }}</p>
   <p><b>{{__('Objet:')}}</b>  {{ $subject }} </p>
   <p> <b>{{__('Mail ou Numéro de Téléphone:')}} </b>  {{ $email }}</p>
   <div style="border: 1px solid #11579c; padding: 10px;" >
       <p><b>{{__('Message:')}}</b></p>
       <p>{!! $user_message !!}</p>
   </div>
 
  
</body>
</html>