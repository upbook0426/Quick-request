<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<p>テスト</p>
<form method="post" action="pdf" >
     @csrf
<input name="textbox1" type="text">
<input name="textbox2" type="text">
<input type="submit" value="送信ボタン">
</form>

</body>
</html>
