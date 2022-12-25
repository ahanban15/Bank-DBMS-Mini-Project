select distinct customer.cust_name
from customer, makes, payment
where customer.cust_id = makes.cust_id and makes.pmt_number =
(select payment.pmt_number
from payment
where pmt_mode = 'netbanking');

