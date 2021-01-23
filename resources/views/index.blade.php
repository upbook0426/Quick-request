<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
    {{-- 送信中の表示 --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <script src="{{ asset('js/sending.js') }}"></script>
    {{-- 日程の選択 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="/js/datepicker-ja.js"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    
    <title>配送依頼書</title>
</head>
<body>
 
      <div class="font title">依頼書入力フォーム</div>
       <div class="form">
        <form >
           {{ csrf_field() }}
           <a class="small_button" href='{{ route('addresses') }}'>戻る</a>
           <br>
                <label>●依頼先運送会社:</label>
                <input type="text" name="request-to" style="width:200px;" list="carrier" 
                        placeholder="テキスト入力もしくは選択して下さい" value= "{{ $post_data['request-to'] ?? '' }}"
                        autocomplete="off">
                    <datalist id="carrier">
                {{--テスト用データ--}}
                   <option value="hogehoge運輸㈱">
                   <option value="piyopiyo海陸輸送㈱">
                   <option value="fugafuga港湾運送㈱">
                    </datalist>
                <br>
                <label>●引取日時:
                    <input class="datepicker" name="pickdate" type="text" placeholder="日時を指定して下さい"
                    value={{ $post_data['pickdate'] ??''}}>
                    </label><br>
                <label for="pickplace">●引取先:</label>
                    <textarea class="pickplace" name="pickplace" type="text" cols="35" rows="3"
                    value= {{ $post_data['pickplace'] ?? ''}}>
                    </textarea> 
                <br>
                <label>●配送日時:
                    <input class="datepicker" name="deliverydate" type="text" placeholder="日時を指定して下さい"
                    value= {{ $post_data['deliverydate'] ?? ''}}>
                </label><br>
                
                <label>●配送先:
                    <input type="text" name="delivery_companyname" placeholder="会社名"  
                    value="{{ old('delivery_companyname', isset($address->companyname) ? $address->companyname : '')}}"><br>
                    <input type="text" name="delivery_address" style="width:300px; margin-left:75px" placeholder="住所"
                    value="{{ old('delivery_address', isset($address->address) ? $address->address : '')}}" ><br>
                    <input type="text" name="delivery_tel"  style="margin-left:75px" placeholder="電話番号"
                    value={{ $address->tel ?? '' }}>
                </label><br>
                @if (count($errors)> 0 )
                        <ul class="error_coment">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                @endif
                <button  class="middle_button" type="submit" formaction="/addresses/add" formmethod="post" style="margin-left:75px">
                    配送先を一覧に登録</button>
                @if(isset($msg))
                 {{ $msg }}
                @endif
                <br>
                <label>●車種:
                   <input type="text" name="typetruck" style="width:200px;" list="truck" 
                        placeholder="テキスト入力もしくは選択して下さい" 
                        autocomplete="off"
                        value= {{ $post_data['typetruck'] ?? ''}}>
                    <datalist id="truck">
                   <option value="2ton車">
                   <option value="4ton車">
                   <option value="10ton車">
                    </datalist>
                </label><br>
                <label>●Package:
                    <input name="package" type="text" value= {{ $post_data['package'] ?? ''}}>
                </label><br>
                <label>●重量:
                    <input name="weight" type="text" value= {{ $post_data['weight'] ?? ''}}>
                </label><br>
                <label>●M3:
                    <input name="M3" type="text" value= {{ $post_data['M3'] ?? ''}}>
                </label><br>
                <label for="remark">●備考欄:</label>
                <textarea name="remark" id="remark" cols="35" rows="3" value= {{ $post_data['remark'] ?? ''}}>
                </textarea>
                <br>
                <button class="middle_button" type="submit" formaction="/pdf" formmethod="post">
                    PDF出力</button>
                <br>
                <br>
                <label>送信先メールアドレス:
                    <input type="email" name="email" style="width:200px;" list="email" 
                         placeholder="入力もしくは選択して下さい" 
                         autocomplete="off">
                     <datalist id="email">
                    {{--テスト用データ--}}
                    <option value="xxxxxxxxxxxxx@gmail.com">hohoge運送会社</option>
                    <option value="xxxxxxxxxxxxx@yahoo.co.jp">piyopiyo海陸輸送㈱</option>
                     </datalist>
                 </label><br>
                    <button class="middle_button" class="notrepeat" {{-- type="submit" formaction="/mail" formmethod="post"
                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> 
                        データ送信中ですしばらくお待ちください。 ..."> --}}> PDF添付・メール送信 </button>
                    <p class="coment">↑ポートフォリオ用の為、送信元メールサーバのセキュリティ上、使用出来なくしております。</p>
            </form>
        </div> 
    </body>
</html>

