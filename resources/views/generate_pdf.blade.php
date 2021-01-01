<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> a </title>
    <style type="text/css">
        @font-face {
            font-family: ipag;
            font-style: normal;
            font-weight: normal;
            src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
        }
        @font-face {
            font-family: ipag;
            font-style: bold;
            font-weight: bold;
            src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
            }
        body {
            font-family: ipag !important;
        }
        </style>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
    <header> 
        <h1 class="company-name"> 
            ABC株式会社 
        </h1> 
          <p class="transport-company"> 
            {{ $data1['request-to']}} 御中
          </p>
    </header> 
        <body> 
            
           <div class="directions"> 配送指示書</div>
             <div class="box">
             <span class="box-title">(引取日)</span>
             <p>{{ $data1['pickdate'] }}</p> 
             </div>  
             <div class="box-large">
                <span class="box-title">(引取先)</span>
                <p>{{ $data1['pickplace'] }}</p> 
            </div>
            <div class="box">
                <span class="box-title">(配送日時)</span>
                <p>{{ $data1['deliverydate'] }}</p> 
            </div> 
            <div class="box-large">
                <span class="box-title">(配送先)</span>
                <p>{{ $data1['deliveryplace'] }}</p> 
            </div> 
            <div class="box">
                <span class="box-title">(車種)</span>
                <p>{{ $data1['typetruck'] }}</p> 
            </div>
            <div class="box">
                <span class="box-title">(Package)</span>
                <p>{{ $data1['package'] }}</p> 
            </div>
            </div>
            <div class="box">
                <span class="box-title">(Weight)</span>
                <p>{{ $data1['weight'] }}</p> 
            </div>
            <div class="box">
                <span class="box-title">(M3)</span>
                <p>{{ $data1['M3'] }}</p> 
            </div>
           <div class="box-large">
                <span class="box-title">(備考欄)</span>
                <p>{{ $data1['remark'] }}</p> 
            </div>
        </body>
</html>
