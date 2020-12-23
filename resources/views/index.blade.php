<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>配送依頼書</title>
</head>
    <body>
  　    <div class="title">依頼入力フォーム</div>
　　        <form >
　           {{ csrf_field() }}
                <label>●依頼先運送会社:</label>
                 <input type="text" name="request-to" list="carrier" 
                        placeholder="テキスト入力もしくは選択して下さい" 
                        autocomplete="off">
                    <datalist id="carrier">
                     <option value="三信運輸㈱">
  　                 <option value="東和海陸輸送㈱">
  　                 <option value="川之江港湾運送㈱">
                    </datalist>
                <br>
                <label>●引取日時:
                　　 <input name="pick-date" type="text">
                </label><br>
                <label>●引取先:
                　　 <input name="pickplace" type="text">
                </label><br>
                <label>●配送日時:
                    <input name="textbox4" type="text">
                </label><br>
                <label>●配送先:
                　　<input name="textbox5" type="text">
                </label><br>
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
                <label for="comment">●備考欄:
                </label><br>
                <textarea name="textbox11" id="comment" cols="40" rows="3">
                </textarea><br>
        
                <input type="submit" value="PDFで確認" formaction="pdf" formmethod="POST"/>
                <br>
                <br>
                <label>メールアドレス：
                    <input type="email" name="email" size="30" maxlength="40">
                </label>
                <br>
                <input type="submit" value="送信する" 
                    formaction="mail" formmethod="POST"/>
            </form>
    </body>
</html>
