use bank;

 select distinct customer.Cust_ID
 from customer, account, nri_acc, depositor
 where customer.Cust_ID = depositor.Cust_ID and depositor.Acc_no = 
   (    
    select account.Acc_no
	from account, nri_acc 	
 	where account.Acc_no = nri_acc.Acc_no and country = 'norway' );
    	