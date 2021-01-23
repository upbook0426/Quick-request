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
    <p class="title">編集選択ページ</table></p>
    <a class="edit_button" href="{{ route('addresses')}}" >戻る</a>
    <p class="listfont">■登録配送先一覧</p>
    <ul class="addresses">
    {{--住所データを取得--}}
    @foreach ($addresses as $address)
    <li><a href="{{ route('edit',$address->id) }}">
      {{ $address->companyname }}</a></li>
    @endforeach
    </ul>
    <div class="pagination">
      {{ $addresses->links('vendor/pagination/semantic-ui')}}
     </div>
</body>

</html>