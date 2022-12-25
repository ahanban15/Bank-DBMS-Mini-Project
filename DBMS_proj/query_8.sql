select * from bank.loan;
select count(loan_id)
from loan
where loan_amt >= 4000000;