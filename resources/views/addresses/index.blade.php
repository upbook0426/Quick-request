<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addresses</title>
</head>
<body>
    <h1>配送先選択<h1>
    
    <ul>
    <li><a href=" {{ route('index')}}">新規配送先</a></li>
    @foreach ($addresses as $address)
    <li><a href="{{ route('address',$address->id) }}">
      {{ $address->companyname }}</a></li>
    @endforeach
    </ul>
    
</body>
</html>