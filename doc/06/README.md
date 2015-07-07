## ギガプランとリッチプレミアム会員というのが出来た
+ ギガプランはリッチプレミアム会員だけが選択できる
+ リッチプレミアム会員は値引き額が2000円である
+ メガプランからしかギガプランには変更できない
+ ギガプランからはスモールプラン以外へ変更できる
+ リッチプレミアム会員のお知らせを別に用意する

```Bash
$ php controller.php                                                                                                                                                                                 master

your account? normal/premium/rich : rich
current plan? small/normal/large(/mega)(/giga) : mega 
next plan? normal/large(/mega)(/giga) : giga

お知らせ：【リッチプレミアム会員の継続利用について】

メガプランからギガプランに変更しました。
選択したのはギガプランで月9000円、容量は9GBです。


$ php controller.php                                                                                                                                                                                 master

your account? normal/premium/rich : premium
current plan? small/normal/large(/mega)(/giga) : giga
ギガプランはリッチプレミアム会員のみです


$ php controller.php                                                                                                                                                                                 master

your account? normal/premium/rich : normal
current plan? small/normal/large(/mega)(/giga) : small
next plan? normal/large(/mega)(/giga) : normal

お知らせ：【プレミアム会員になりませんか】

スモールプランからノーマルプランに変更しました。
選択したのはノーマルプランで月5000円、容量は3GBです。


$ php controller.php                                                                                                                                                                                 master

your account? normal/premium/rich : rich
current plan? small/normal/large(/mega)(/giga) : small
next plan? normal/large(/mega)(/giga) : normal

お知らせ：【リッチプレミアム会員の継続利用について】

スモールプランからノーマルプランに変更しました。
選択したのはノーマルプランで月3000円、容量は3GBです。


$ php controller.php                                                                                                                                                                                 master

your account? normal/premium/rich : rich
current plan? small/normal/large(/mega)(/giga) : normal
next plan? normal/large(/mega)(/giga) : giga

お知らせ：【リッチプレミアム会員の継続利用について】

ノーマルプランからギガプランへの変更は不可能です。
```
  
[解答例](https://github.com/tenshiPure/php/tree/70e62d86526426875121348841e02c4f544da626)
