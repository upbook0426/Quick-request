<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>配送依頼書</title>
</head>
<body>
  <div>
     <div class="title">依頼入力フォーム</div>
<form >
    @csrf
<label>●依頼先運送会社:<input name="textbox1" type="text"></label><br>
<label>●引取日時:<input name="pickdate" type="text"></label><br>
<label>●引取先:<input name="pickplace" type="text"></label><br>
<label>●配送日時:<input name="textbox4" type="text"></label><br>
<label>●配送先:<input name="textbox5" type="text"></label><br>
<label>●本船名:<input name="textbox6" type="text"></label><br>
<label>●Package:<input name="textbox7" type="text"></label><br>
<label>●重量:<input name="textbox8" type="text"></label><br>
<label>●M3:<input name="textbox9" type="text"></label><br>
<label>●BL no:<input name="textbox10" type="number"></label><br>
<label for="comment">●備考欄:</label><br>
<textarea name="textbox11" id="comment" cols="40" rows="3"></textarea><br>

<input type="submit" value="PDFで確認" formaction="pdf" formmethod="POST"/>
<br>
<br>

<label>メールアドレス：<input type="email" name="email" size="30" maxlength="40"></label>
<br>
<input type="submit" value="送信する" formaction="mail" formmethod="POST"/>

</form>
</div>
</body>
</html>
