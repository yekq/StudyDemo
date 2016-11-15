select * FROM user;

call insertList(3000);
call insertList(3000);
call insertList(3000);
call insertList(3000);
call insertList(3000);
select count(*) FROM user;

select * from user WHERE name = '自动插入5104';

SELECT * FROM user WHERE name like '%1040%';

create index indexName on user(name(16));
drop index indexName on user;

SELECT * FROM user WHERE name like '%1040%' limit 1;