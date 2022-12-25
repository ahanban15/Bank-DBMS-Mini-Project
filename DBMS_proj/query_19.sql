use bank;
select customer.cust_name, account.acc_balance
from customer, depositor, account
where
( customer.cust_id = depositor.cust_id 
and 
depositor.acc_no = account.acc_no); 
