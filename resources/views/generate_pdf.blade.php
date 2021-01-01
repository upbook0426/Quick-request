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
             <p>（引取日）<p><br>
                <p class="line">{{ $data1['pickdate'] }}</p> 
                
            <ul > 
                <li class="item">（引取先）</li> 
                <li class="box"><p>{{ $data1['pickplace'] }}</p> </li> 
            </ul> 
            <ul > 
                <li class="item">（配送日時）</li> 
                <li class="line"><p>{{ $data1['deliverydate'] }}</p></li> 
            </ul>
            <ul > 
                <li class="item">（配送先）</li> 
                <li class="box"><p>{{ $data1['deliveryplace'] }}</p></li> 
            </ul>
                
            <p>(車種){{ $data1['trucktype'] }}</p>
            <p>(本船名){{ $data1['vessel'] }}</p>
            <p>(Package){{ $data1['package'] }}</p>
            <p>(重量){{ $data1['weight'] }}</p>
            <p>(M3){{ $data1['M3'] }}</p>
            <p>(BL no){{ $data1['BL'] }}</p>
            <p>(備考欄){{ $data1['remark'] }}</p>
        </body>
</html>
