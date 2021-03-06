# activepj　App
javaSriptを学習し、いいね機能の参考にならないかと思い作り始めたアプリです。
ボタンを押した回数を数え、押した回数によって、ボタンの絵が変わるようになっています。
リセットもできます。

# DEMO
<img width="1430" alt="スクリーンショット 2022-05-25 22 30 56" src="https://user-images.githubusercontent.com/102650893/170274641-f38e8d55-b095-4605-9333-909208aef1e1.png">

* https://activepj.herokuapp.com/

※herokuの仕様上、ボタンを早く押しすぎると画像の変更が遅れてしまいます。お気をつけください。

# アプリを作った理由
友人や仕事仲間から、「運動って続かないよね」「ランニングしたいって思うけど、結局やらないよね」と言った話をよく聞いていたため、どうしたら続けられるかを考えました。
結論として、記録に残ること、誰かが見てくれること、褒めてもらえること、その３つが揃うと続くのではないかと思い、アプリを作成しました。

# 利用方法
運動したら、左のボタンを押します。  
休憩したら、右のボタンを押します。  
リセットしたい場合は、リセットボタンを押しますと、リセットできます。

# 機能一覧
* カウント機能  
 →カウントした数字によって、画像の表示が変わります。
* リセット機能
　
 
# 工夫したポイント
運動をしたら、ボタンを押すだけでカウントできるというシンプルな作りにしました。  
そのようにすることで、「記録する」ことに対して抵抗感がなく、継続しやすいと考えました。

# 使用技術（開発環境）
html/css/javascript/Github/heroku/Visual Studio Code

# 使ってもらった人からの感想
* 画像の変化があって、次はいつ変わるのかと楽しみになる。
* やはり画面を閉じても保存されていないと使いづらい。
* 誰かの記録を見て、比較できる機能は必須だと思う。

# 今後
* セッションか、データベースを使用し、activeとrestの回数を保存できるようにする。
* 複数人のデータを保管し、見比べることができるようにする。
* コメント機能やチャット機能などを搭載し、交流ができるようにする。

