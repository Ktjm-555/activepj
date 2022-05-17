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
        <div class="level_r">
          <span id="level_r">今日くらいゆっくり</span>
				</div>
      </div>             
    </div>
  </div>
	<div class="reset">
		<input type="button" value="リセット" id="reset" onclick="reset_do()">
	</div>
	<div class="cheer">
		<img src="image/image03.png" id="cheer" onclick="alert('ここは押すもんじゃありません')">
	</div>
    <script>
			window.onbeforeunload = function(reload) {
    		reload.returnValue = "カウントが消えてしまいますよ";
			}

			var active = 0;
			function counting(){
				active = active + 1;
				document.getElementById("active-cnt").innerHTML = active;
				if (active > 5){
					document.getElementById("level").innerHTML = "成長期";
					document.getElementById('active').src='image/active5.png';
				}
				if (active > 10){
					document.getElementById("level").innerHTML = "継続の天才";
					document.getElementById('active').src='image/active10.png';
				}
			}
			var rest = 0;
			function counter(){
				rest++;
				document.getElementById("rest-cnt").innerHTML = rest;
				if (rest > 5){
					document.getElementById("level_r").innerHTML = "適度にお休み";
					document.getElementById('rest').src='image/rest5.png';
				}
				if (rest > 10){
					document.getElementById("level_r").innerHTML = "ちょっと怠け者";
					document.getElementById('rest').src='image/rest10.png';
				}
			}

			function reset_do(){
				active = 0;
				rest   = 0; 
				document.getElementById("active-cnt").innerHTML = active;
				document.getElementById("rest-cnt").innerHTML = rest;
				document.getElementById("level").innerHTML = "回帰初心者";
				document.getElementById("level_r").innerHTML = "今日くらいゆっくりする？";
				document.getElementById('active').src='image/image01.png';
				document.getElementById('rest').src='image/image02.png';		
			}
    </script>
</body>
</html>