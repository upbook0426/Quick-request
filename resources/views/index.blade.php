<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配送依頼書</title>
</head>
<body>
  <div>
     <p>依頼入力フォーム</p>
<form method="post" action="pdf" >
    @csrf
<label>依頼先運送会社:<input name="textbox1" type="text"></label><br>
<label>引取日時:<input name="textbox2" type="text"></label><br>
<label>引取先:<input name="textbox3" type="text"></label><br>
<label>配送日時:<input name="textbox4" type="text"></label><br>
<label>配送先:<input name="textbox5" type="text"></label><br>
<label>本船名:<input name="textbox6" type="text"></label><br>
<label>Package:<input name="textbox7" type="text"></label><br>
<label>重量:<input name="textbox8" type="text"></label><br>
<label>M3:<input name="textbox9" type="text"></label><br>
<label>BL no:<input name="textbox10" type="number"></label><br>
<label>備考欄:<input name="textbox11" type="text"></label><br>

<input type="submit" value="送信ボタン">
</form>
</div>
</body>
</html>
