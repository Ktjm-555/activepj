<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sanitaize.css">
    <link rel="stylesheet" href="style.css">
    <title>active_record</title>
</head>
<body>
    <div class="main">
        <div class="button-cnt">
            <div class="active-area">
                <input type="image" id="active" alt="active" src="image/image01.png" onclick="counting()">
                <div class="active-display">
                    <span id="active-cnt">0</span>回
                </div>
                <div class="level">
                    <span id="level">初心者</span>
                </div>
            </div>
            <div class="rest-area">   
                <input type="image" id="rest" alt="rest" src="image/image02.png" onclick="counter()"> 
                <div class="rest-display">
                    <span id="rest-cnt">0</span>回 
                </div>       
            </div>             
        </div>
        </div>
    </div>
    <script>
        var active = 0;
        function counting(){
            active = active + 1;
            document.getElementById("active-cnt").innerHTML = active;
            if (active > 5){
                document.getElementById("level").innerHTML = "成長期";
                document.getElementById("level").innerHTML = "成長期";

                // var img;
                // img = document.createElement('img');
                // img.setAttribute('src', 'image/image03.png');
            }
        }
        var rest = 0;
        function counter(){
            rest++;
            document.getElementById("rest-cnt").innerHTML = rest;
        }

    </script>
</body>
</html>