select user_name, user_email
from user
group by user_name
having user_name like'%a%';