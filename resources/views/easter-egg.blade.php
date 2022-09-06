<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elden Ring</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
        background: url(https://i.ibb.co/NYnbf8G/TUQw-Jnr-KO9-QL7c-Cl-Jh0-OMn-Er.webp),no-repeat center bottom;;
        display: block;
        }

        h2 {
        color: #D9BB84;
        text-shadow: 1px 1px 3px #495057;
        }
        .countdown1 {
        text-align:center;
        font-family: 'Noto Serif', serif;
        font-size: 34px;
        
        }
        .countdown {
        display: none;
        justify-content: center;
        align-items: center;
        }
        .year {
        align-items: center;
        position:relative;
        margin-top: -40px;
        }
        .title { 
        color: #D9BB84;
        text-shadow: 1px 1px 3px #495057;
        }
        .time {
        margin-top: -50px;
        font-size: 50px;
        }
        .small {
        font-size: 35px;
        margin:20px;
        margin-top:-40px;
        color: #D9BB84;
        }
        /* Preloader */
        .lds-ripple {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
        }
        .lds-ripple div {
        position: absolute;
        border: 4px solid #D9BB84;
        opacity: 1;
        border-radius: 50%;
        animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
        }
        .lds-ripple div:nth-child(2) {
        animation-delay: -0.5s;
        }
        @keyframes lds-ripple {
        0% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 1;
        }
        100% {
            top: 0px;
            left: 0px;
            width: 72px;
            height: 72px;
            opacity: 0;
        }
        }

    </style>
</head>
<body>
  <div class="countdown1">
    <h1 class="title">LARAVEL ASTRALE</h1>
    <div id="year" class="year"><img src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/00-page-setup/eldenring_new.png?twic=v1/cover=800x267/step=10/quality=80" alt=""></div>
    <div id="preloader" class="preloader">
            <div class="lds-ripple">
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
</body>

</html>