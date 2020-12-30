<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
    {{-- 送信中の表示 --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <script src="{{ asset('js/sending.js') }}"></script>
    {{-- 引取日時の選択 --}}
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
           <input class="datepicker" type="text" />
           <input class="datepicker" type="text" />
          
           <br>
                <label>●依頼先運送会社:</label>
                <input type="text" name="request-to" style="width:200px;" list="carrier" 
                        placeholder="テキスト入力もしくは選択して下さい" 
                        autocomplete="off">
                    <datalist id="carrier">
                   <option value="hogehoge運輸㈱">
                   <option value="piyopiyo海陸輸送㈱">
                   <option value="fugafuga港湾運送㈱">
                    </datalist>
                <br>
                <label>●引取日時:
                    <input id="datepicker" type="text" />
                    <input id="datepicker" name="pick-date" type="text"/>
                </label><br>
                <label>●引取先:
                    <input name="pickplace" type="text"/>
                </label><br>
                <label>●配送日時:
                    <input name="textbox4" type="text">
                </label><br>
                
                <label for="delivery">●配送先:</label>
                  <textarea name="textbox11" id="delivery" cols="40" rows="3">
                    @if(!isset($address))
                    
                    @else  
                    {{ $address->companyname }}
                     {{ $address->address }}
                     {{ $address->tel }}
                    @endif
                </textarea><br>
                <label>●車種:
                   <input name="type-of-truck" type="text">
                </label><br>
                <label>●本船名:
                   <input name="textbox6" type="text">
                </label><br>
                <label>●Package:
                    <input name="textbox7" type="text">
                </label><br>
                <label>●重量:
                    <input name="textbox8" type="text">
                </label><br>
                <label>●M3:
                    <input name="textbox9" type="text">
                </label><br>
                <label>●BL no:
                    <input name="textbox10" type="number">
                </label><br>

                <label for="comment">●備考欄:</label>
                <textarea name="textbox11" id="comment" cols="40" rows="3">
                </textarea>
                <br>
        
                <input type="submit" value="PDFで確認" formaction="pdf" formmethod="POST"/>
                <br>
                <br>
                <label>メールアドレス：
                    <input type="email" name="email" size="30" maxlength="40">
                </label>
                <br>
                    <button type="submit" class="notrepeat" formaction="mail" formmethod="POST" 
                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> 
                        データ送信中ですしばらくお待ちください。 ...">データ送信 </button>
            </form>
        </div> 
    </body>
</html>

