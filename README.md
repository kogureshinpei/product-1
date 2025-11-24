# product-1
DB情報の更新(init.sqlの更新)
docker compose exec db sh
mysql -u root -proot posse < /docker-entrypoint-initdb.d/init.sql

mysql -u root -proot posse
use posse;
show tables;
select * from テーブル名;
