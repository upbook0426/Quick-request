<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addresses</title>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   
</head>
<body id="index">
    <h1 class="font" >配送先選択<h1>
    
    <p class="new"><a href=" {{ route('index')}}">新規配送先</a>
    
    <p class="list font">■登録配送先一覧</p>
    <button type="button" onclick="window.location='{{ route('edit')}}">編集</button>
    <a href="{{ route('edit')}}" class="btn btn-xs btn-info pull-right">Edit</a>
    {{--住所データを取得--}}
    @foreach ($addresses as $address)
    <li><a href="{{ route('address',$address->id) }}">
      {{ $address->companyname }}</a></li>
    @endforeach
    </ul>
</body>

</html>