SHOW DATABASES; คำสั่ง show database
ีuse databasename; 
CREATE DATABASE DATABASENAME ; คำสั่ง สร้าง database
DROP DATABASE DATABASENAME; คำสั่ง ลบ database
คำสั่งสร้าง table
CREATE TABLE customer(
    -> c_id int(10) PRIMARY KEY,
    -> c_name varchar(20),
    -> c_lastname varchar(30),
    -> c_email varchar(20),
    -> c_tel int(10)
    -> );
show tables; คำสั่ง show table
desc tablename ; จะแสดงข้อมูลโดยละเอียด
drop table tablename; ลบตาราง

//การสร้างตารางที่เชื่อมต่อกัน แบบมี FK
create table employee (
    -> e_id int(10) PRIMARY KEY,
    -> e_name varchar(50),
    -> e_salary decimal(10,2),
    -> e_tel varchar(20)
    -> ); 
// ตารางที่ 2 ที่เราต้องการเชื่อม
create table employee (
    -> e_id int(5) PRIMARY KEY,
    -> e_name varchar(20),
    -> e_salary decimal(10,2),
    -> d_id int(5) references department(d_id) //เป็นคำสั่งเชื่อม
    -> );
//จากโค๊ดข้างต้น ตารางทั้ง 2 จะถูกเชื่อมโดย d_id 

//คำสั่งเพิ่มข้อมูล ลงตาราง
insert into customer(c_id,c_name,c_lastname,c_email,c_tel) 
values (2332,'jakrit','pongkorntrakul','jakrit000333@gmail.com',0929906085);

//คำสั่งเรียกดึงข้อมูลจากตาราง
select * from customer;
select c_id,c_email from customer;
select c_tel from customer;
select * from customer where c_id = 2342;
นอกจากนี้ยังมีการใช้ and และ or อีก

//คำสั่ง update สามารถใช้ and or ได้
update customer
    -> set c_id = 1
    -> where c_id = 2332;
update customer
    -> set c_id = 2
    -> where c_name = 'natpairin';

//คำสั่งลบข้อมูลในตาราง
delete from customer
    -> where c_name = 'lufy';

// คำสั่ง like จะใช้คู่กับ % 
    ถ้า a% ในลักษณะนี้ จะทำการเลือกคำที่ขึ้นต้นด้วยตัว a ทั้งหมดมาแสดง
    ถ้า %a ในลักษณะนี้ จะทำการเลือกคำที่ลงท้ายด้วยตัว a ทั้งหมดมาแสดง
    select * from customer
    -> where c_name like'j%';
    select * from customer
    -> where c_name like'%u';
//การเลือกตำแหน่งของข้อมูล จากบนสุดของตารางมาเเสดงด้วยคำสั่ง top
    select * from customer
    -> limit 2;

// คำสั่ง order by คือการเรียงลำดับจากมากไปน้อยDESC กับน้อยไปมากASC
    select * from customer
    -> order by c_id asc;
    select * from customer
    -> order by c_id desc;

// คำสั่ง in ในการเปรียบเทียบเรียกข้อมูลหลายๆค่าจากตัวแปรหนึ่ง
    select * from customer
    -> where c_id in(3,1);
// คำสั่ง between จะเป็นการเรียกค่าระหว่างกัน เช่น เงินเดือนตั่งแต่ 2000-10000 มาแสดง
    select * from customer
    -> where c_id between 1 and 3;
//คำสั่ง จอย ตาราง inner join
    select e_name,d_name
    -> from employee
    -> inner join department
    -> on employee.d_id=department.d_id;
//คำสั่ง จอย ตาราง left join
    select e_name,e_salary,d_name
    -> from employee
    -> left join department
    -> on employee.d_id=department.d_id;
//คำสั่ง จอย ตาราง right join
    select e_id,e_name,e_salary,d_name,department.d_id
    -> from employee
    -> right join department
    -> on employee.d_id=department.d_id;
//คำสั่ง sql ต่างๆ
select avg(e_salary) from employee;
select count(e_salary) from employee;
select max(e_salary) from employee;
select min(e_salary) from employee;
select sum(e_salary) from employee;
//คำสั่ง group by ใส่ where ได้
select d_id,sum(e_salary)
    -> from employee
    -> group by d_id;
//คำสั่ง having
    select d_id,sum(e_salary)
    -> from employee
    -> group by d_id
    -> having sum(e_salary)>160000;