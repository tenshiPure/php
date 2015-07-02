## プラン変更が出来る様にしたい
+ 既存プランの選択後、変更後のプランを選択させる
+ 変更後の情報を表示する

```Bash
$ php controller.php 

your account? normal/premium : normal
current plan? small/normal/large(/mega) : small
next plan? small/normal/large(/mega) : normal

お知らせ：【プレミアム会員になりませんか】

スモールプランからノーマルプランに変更しました。
選択したのはノーマルプランで月5000円、容量は3GBです。


$ php controller.php

your account? normal/premium : premium
current plan? small/normal/large(/mega) : large
next plan? small/normal/large(/mega) : mega

お知らせ：【プレミアム会員の継続利用について】

ラージプランからメガプランに変更しました。
選択したのはメガプランで月8000円、容量は7GBです。
```
  
[解答例](https://github.com/tenshiPure/php/tree/39aac97c8757c9799701d948499816cd4c83625a)
