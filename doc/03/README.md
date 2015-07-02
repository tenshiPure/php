## 通常会員、プレミアム会員それぞれにお知らせを見せたい
+ 通常会員：プレミアム会員への勧誘
+ プレミアム会員：継続利用について

```Bash
$ php controller.php 

your account? normal/premium : normal
plan? small/normal/large(/mega) : small

お知らせ：【プレミアム会員になりませんか】

選択したのはスモールプランで月3000円、容量は1GBです。


$ php controller.php

your account? normal/premium : premium
plan? small/normal/large(/mega) : small

お知らせ：【プレミアム会員の継続利用について】

選択したのはスモールプランで月2000円、容量は1GBです。
```
  
[解答例](https://github.com/tenshiPure/php/tree/af08139363919cebc893ff62186cd49bcd78abd0)
