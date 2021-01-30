@extends('layouts.app')
@section('title','編集先選択')
@section('content')
  <div class="font title">編集選択ページ</div>
    <div class="form">
       <p class="list font">■登録配送先一覧</p>
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
       <a class="small_button" href="{{ route('addresses')}}" >戻る</a>
      </div>
@endsection
