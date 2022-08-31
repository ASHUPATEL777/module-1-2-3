TASK-1 :   SQL  [  TABLE EMPLOYEE   ]


a]     get first_name from emp. table using alias name "employee name"

->     select first_name as "employee name" from employee;

b]     get first_name,joining year,joining month and joining date from employee table.

->     select first_name,day(joining_date) as "joining_date",month(joining_date) as "joining month",year(joining_date) as "joining year" from employee;

c]     get all employee details from the employee table order by first name ascending and salary decending?

->     select*from employee order by first_name and salary desc;

d]     get employee details from employee table whose first name contains "o".

->     select *from employee where first_name like '%o%';

e]     get employee details from employee table whose joining month is "january".

->     select *from employee where monthname(joining_date)='january';

f]      get department,total salary with respect to a department from employee table order by total salary descending.

->     select department,sum(salary) as salary from employee group by department order by salary desc;

g]     det department wise maximum salary from employee table order by salary ascending.

->     select department,max(salary) maxsalary from employee group by department order by salary asc;

h]     select first_name,incentive amount from employee and incentives table for those employee who have incentive amount greater than 3000

->     select first_name from employee left join incentive on employee emp_id=incentive.emp_ref_id where incentive_amt>3000;

i]     select 2nd highest salary from employee table.

->     select *from employee order by salary desc limit 1,1;

j]     select first_name,incentive amount from employee and incentives table for all employee who got incentives using left join.

->     select first_name,insentive_id,emp_ref_id,incentive_amt,incentive_date from employee left join incentive on employee.emp_id=incentives.emp_ref_id;

k]     create view of employee table in which store first name,last name and salary only.

->     create view employee_date as select first_name,last_name,salary from employee;

l]     create procedure to find out department wise highest salary.

->     create procedure get_highest_sal(varchar(255))
                        delimiter//
                        begin
                        select department,max(salary)
                        from employee
                        where department=dept group by department;
                        end//
                        delimiter;

m]     create after insert trigger on employee table which insert records in view table.
  
->     select employee[id],[fiirst_name],[last_name],[salary],[joining_date],[department]  from [employeetable];
