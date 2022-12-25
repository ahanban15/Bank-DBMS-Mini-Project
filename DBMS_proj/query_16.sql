select borrows.loan_id 
    from borrows
    where borrows.cust_id=
 (select customer.cust_id 
 from customer
 where locker_no=123)