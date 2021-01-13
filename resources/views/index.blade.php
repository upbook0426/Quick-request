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
<body #index>
 
      <div class="font title">依頼入力フォーム</div>
       <div class="form">
        <form >
           {{ csrf_field() }}
           <a href='{{ route('addresses') }}'>戻る</a>
           <br>
                <label>●依頼先運送会社:</label>
                <input type="text" name="request-to" style="width:200px;" list="carrier" 
                        placeholder="テキスト入力もしくは選択して下さい" 
                        autocomplete="off">
                    <datalist id="carrier">
                {{--テスト用データ--}}
                   <option value="hogehoge運輸㈱">
                   <option value="piyopiyo海陸輸送㈱">
                   <option value="fugafuga港湾運送㈱">
                    </datalist>
                <br>
                <label>●引取日時:
                    <input class="datepicker" name="pickdate" type="text" >
                </label><br>
                <label for="pickplace">●引取先:</label>
                    <textarea class="pickplace" name="pickplace" type="text" cols="35" rows="5">
                    </textarea> 
                <br>
                <label>●配送日時:
                    <input class="datepicker" name="deliverydate" type="text">
                </label><br>
                
                <label for="delivery">●配送先:</label>
                  <textarea name="deliveryplace" type="text" cols="35" rows="5">
                    @if(!isset($address))
                    
                    @else  
                    {{ $address->companyname }}
                     {{ $address->address }}
                     {{ $address->tel }}
                    @endif
                </textarea><br>
                <label>●車種:
                   <input type="text" name="typetruck" style="width:200px;" list="truck" 
                        placeholder="テキスト入力もしくは選択して下さい" 
                        autocomplete="off">
                    <datalist id="truck">
                   <option value="2ton車">
                   <option value="4ton車">
                   <option value="10ton車">
                    </datalist>
                </label><br>
                <label>●Package:
                    <input name="package" type="text">
                </label><br>
                <label>●重量:
                    <input name="weight" type="text">
                </label><br>
                <label>●M3:
                    <input name="M3" type="text">
                </label><br>
                <label for="remark">●備考欄:</label>
                <textarea name="remark" id="remark" cols="35" rows="3">
                </textarea>
                <br>
                <button class="submit_button" type="submit" formaction="/pdf" formmethod="post">
                    PDF出力</button>
                <br>
                <br>
                <label>送信先メールアドレス:
                    <input type="email" name="email" style="width:200px;" list="email" 
                         placeholder="テキスト入力もしくは選択して下さい" 
                         autocomplete="off">
                     <datalist id="email">
                    {{--テスト用データ--}}
                    <option value="upbook426@gmail.com">hohoge運送会社</option>
                    <option value="up_book26@yahoo.co.jp">piyopiyo海陸輸送㈱</option>
                     </datalist>
                 </label><br>
                    <button class="submit_button" type="submit" class="notrepeat" formaction="/mail" formmethod="post" 
                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> 
                        データ送信中ですしばらくお待ちください。 ...">PDF添付・メール送信 </button>
            </form>
        </div> 
    </body>
</html>

