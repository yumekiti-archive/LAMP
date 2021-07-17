# LAMP

## 使い方

### docker

起動
```
make up
```

停止
```
make down
```

削除
```
make rm
```

その他。
```
make logs       ログ見る
make restart    再起動
make db         dbのshellに入る
```

### php

使い方がわかりにくかったので実際に書いてみました。

./php/index.php
```
mysql -u test_user -p test_db
password test_ps

select * from meibo
```

./php/create.php
```
mysql -u root -p 
password root

CREATE TABLE test_db.meibo (id INT,name TEXT)
```

./php/delete.php
```
mysql -u root -p 
password root

DELETE FROM test_db.meibo WHERE id = 1
```

これをphpで行っている。