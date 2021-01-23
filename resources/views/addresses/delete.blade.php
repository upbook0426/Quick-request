<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addresses</title>
   
</head>
        <body >
              <form>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $address->id }}">
                <input type="hidden" name="delivery_companyname" 
                    value={{ $address->companyname ?? ''}}>
                <input type="hidden" name="delivery_address"
                    value={{ $address->address ?? '' }} >
                <input type="hidden" name="delivery_tel"
                    value={{ $address->tel ?? '' }}>
            </form>
        </body>
</html>