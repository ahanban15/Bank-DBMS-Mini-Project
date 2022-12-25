select sum(pmt_amount)
from payment
group by pmt_mode;