select * FROM user;

call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
call insertList(10000);
select count(*) FROM user;

select * from user WHERE password='0.58214668611264';

drop index index_password on user;
CREATE index index_password on user(password);

drop index index_name_password on user;
create index index_name_password on user(name, password);

SELECT * FROM user WHERE name like '%1040%';

create index indexName on user(name(16));
drop index indexName on user;

SELECT * FROM user WHERE name like '%1040%' limit 1;

SELECT count(*) FROM user;

#全文索引
drop index fulltest_index_password on user;
create fulltext index fulltest_index_password on user(password);

DROP index fulltext_index_name on user;
create fulltext index fulltext_index_name on user(name);

select * from user WHERE match(name) AGAINST ('12');