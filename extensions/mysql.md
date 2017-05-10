#MySQL 扩展

##libmysql
##mysqlnd
    libmysql、mysqlnd 为PHP链接数据库的底层驱动
##mysql mysqli PDO
    三者为为链接数据库的不同方式，依赖libmysql或mysqlnd；PDO还需要pdo_mysql扩展
### 编译 
    --with-mysql=mysqlnd \
    --with-mysqli=mysqlnd \
    --with-pdo-mysql=mysqlnd 
