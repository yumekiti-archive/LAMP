# LAMP

## 使い方

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