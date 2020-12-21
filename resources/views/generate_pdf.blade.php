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
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<header> 
    <h1 class="company-name"> 
        ABC株式会社 </h1> 
        <h2 class="transport-company"> 
            <p style="border-bottom: solid 2px #555"> 
                {{ $textbox1 ?? ''}} </p>
            </h2> 
</header> 
        <body> 
                <div class="directions"> 配送指示書</div>
                <ul > 
                    <li　style="display: inline-block;">（配送先）</li> 
                    <li style=
                    " margin-left:10px; 
                    width: 650px; 
                    height: 110px; 
                    font-weight: bold; 
                    border: solid 3px #000000; 
                    display: inline-block;" >
        Hello TechAcademy!! </li> </ul> 
        <ul > 
            <li　style="display: inline-block;">（配送先）</li> 
            <li style=" margin-left:10px;
             width: 80%; height: 50px; 
             font-weight: bold; 
             border: solid 3px #000000; 
             display: inline-block;" >Hello TechAcademy!!
             </li> 
            </ul> 
        </body>

</html>