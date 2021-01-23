<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addresses</title>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>

    <div class="font title">配送先選択ページ</div>
    <div class="form">
    <a class="middle_button" href=" {{ route('index')}}">新規配送先</a>   
    <p class="list font">■登録配送先一覧</p>
    <ul class="addresses">
    {{--住所データを取得--}}
    @foreach ($addresses as $address)
    <li><a href="{{ route('address',$address->id) }}">
      {{ $address->companyname }}</a></li>
    @endforeach
    </ul>
    <div class="pagination">
     {{ $addresses->links('vendor/pagination/semantic-ui')}}
    </div>
    <a class="middle_button" href="{{ route('edit_list')}}" >編集</a>
  </div>
  </body>

</html>