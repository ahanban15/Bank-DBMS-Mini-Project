select emp_id, emp_name, emp_address
from employee
union
select cust_id, cust_name, cust_address
from customer;