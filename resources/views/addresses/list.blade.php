@extends('layouts.app')
@section('title','配送先一覧')
@section('content')
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
@endsection
