## プラン変更時に制限を設けたい
+ スモールプランの新規受付を停止したので、スモールには変更出来ない
+ 同じコース間での変更は出来ない
+ メガプランからノーマルプランの変更は出来ない
+ 当然通常会員はメガプランには変更出来ない

```Bash
$ php controller.php 

your account? normal/premium : normal
current plan? small/normal/large(/mega) : normal
next plan? normal/large(/mega) : small

お知らせ：【プレミアム会員になりませんか】

ノーマルプランからスモールプランへの変更は不可能です。


$ php controller.php

your account? normal/premium : normal
current plan? small/normal/large(/mega) : normal
next plan? normal/large(/mega) : normal

お知らせ：【プレミアム会員になりませんか】

ノーマルプランからノーマルプランへの変更は不可能です。


$ php controller.php
your account? normal/premium : premium
current plan? small/normal/large(/mega) : mega
next plan? normal/large(/mega) : normal

お知らせ：【プレミアム会員の継続利用について】

メガプランからノーマルプランへの変更は不可能です。


$ php controller.php

your account? normal/premium : normal
current plan? small/normal/large(/mega) : large
next plan? normal/large(/mega) : mega
メガプランはプレミアム会員のみです


$ php controller.php

your account? normal/premium : premium
current plan? small/normal/large(/mega) : normal
next plan? normal/large(/mega) : mega

お知らせ：【プレミアム会員の継続利用について】

ノーマルプランからメガプランに変更しました。
選択したのはメガプランで月8000円、容量は7GBです。
```
  
[解答例](https://github.com/tenshiPure/php/tree/13a9e87f978157455fbd79058ec6b743e7422d21)
