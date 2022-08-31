TASK-2 :   TABLE SALES PERSON
 

a]     all orders for more than $1000.

->     select *from order_table where amt>1000;

b]     names and cities of all sales people in london with commission above 0.10.

->     select *from 'sales_person' where city='london' and comm> 0.10;

c]     all sales people either in barcelona or in london.

->     select *from sales_person where city in('barcelona','londone');

d]     all sales people with commission between 0.10 and 0.12. (boundary values should be excluded).

->     select *from sales_person where comm between 0.10 and 0.12;

e]     all customers with null values in city column.

->     select cname from customer where city is null;

f]      all orders taken on oct. 3rd and oct 4th 1994.

->     select *from order_table where odate in ('1994-10-03','1994-10-04');

g]     all customers serviced by peel or motika.

->     select *from sales_person right join customer on
         sales_person.sno=customer.sno where sname in('peel','motika');

h]     all customers whose names begin with a letter from a to b.

->     select *from customer where cname like 'a%' or cname like 'b%';

i]     all customers whose name begin with a letter from a to b 

->     select *from customer where rating<=100 and city='rome';

j]     all orders except those with 0 or null value in amt field.

->     select *from order_table where amt!=0 or amt is not null;

k]     count the number of sales people currently listing orders in the order table.

->     select count('cnm')cnm from order_table;




