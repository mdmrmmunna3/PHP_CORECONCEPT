1. CREATE DATABASE Interview;
2. CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
);

2. INSERT INTO users (name, email, address) 
    VALUES('munna', 'munna1@gmail.com', 'dhaka');

4. UPDATE users SET address =   'Bangaldesh-Dhaka',
    WHERE id = 2;

5. ALTER TABLE users 
    ADD phone VARCHAR(255);

6. ALTER TABLE users
    MODIFY COLUMN phone VARCHAR(50);

7. ALTER TABLE users
    CHANGE COLUMN phone contact VARCHAR(20) NOT NULL;

8. RENAME users TO customers;

9. ALTER TABLE customers 
    DROP COLUMN contact; 

10. DROP TABLE customers;

11. DROP DATABASE Interview;

12. SELECT * FROM users LIMIT (0, 10);

13. SELECT DISTINCT name, email
    FROM users;

14. SELECT name, email, contact
    FROM users
    GROUP BY name, email, contact
    HAVING COUNT (id) > 1;

15. CREATE VIEW purches_detais As
    SELECT name, email,
    FROM users
    WHERE status = 'active';

16. CREATE VIEW purches_detais As
    SELECT user.name, user.email, purches.price, purcehs.quantity, purches.user_id
    FROM users, purches
    WHERE purches.user_id = user.id;

17. CREATE VIEW purches_details AS
    SELECT pur.id, pur.date, pur.price, pur.quantity, pur.cust_id, c.namne, c.email, c.addres, c.contact
    FROM purchaes pur
    JOIN customers c ON pur.cust_id = c.id;