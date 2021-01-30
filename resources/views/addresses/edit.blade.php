@extends('layouts.app')
@section('title','編集ページ')
@section('content')
            <div class="font title">編集ページ</div>
            <div class="form">
             <form>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $address->id }}">
                <label>会社名:<input type="type" name="delivery_companyname" placeholder="会社名"  
                    value={{ $address->companyname ?? ''}}></label><br>
                <label>住所：<input type="text" name="delivery_address" style="width:300px" placeholder="住所"
                    value={{ $address->address ?? '' }} ></label><br>
                <label>電話番号:<input type="text" name="delivery_tel" placeholder="電話番号"
                    value={{ $address->tel ?? '' }}></label><br>
                    <button class="middle_button"type="submit" formaction="{{ route('edit_update',['id' => $address->id])}}" formmethod="post">更新</button>
                    <button class="middle_button" type="submit" formaction="{{ route('edit_delete',['id' => $address->id])}}" formmethod="post">削除</button>
                    <a class="small_button" href="{{ route('edit_list')}}" >戻る</a>
             </form>
            </div>
@endsection