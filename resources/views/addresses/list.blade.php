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
    
    <p class="new"><a href=" {{ route('index')}}">新規配送先</a></p>    
    <p class="list font">■登録配送先一覧</p>
    <button class="submit_button"><a href="{{ route('edit_list')}}" >編集</a></button>
    <button class="submit_button" type="button" formaction="{{ route('edit_list')}}" formmethod="post">
      PDF出力</button>
    <ul class="addresses">
    {{--住所データを取得--}}
    @foreach ($addresses as $address)
    <li><a href="{{ route('address',$address->id) }}">
      {{ $address->companyname }}</a></li>
    @endforeach
    </ul>
</body>

</html>