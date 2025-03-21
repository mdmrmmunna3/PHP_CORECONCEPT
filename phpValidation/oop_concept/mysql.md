1. ### how to create database in mysql 

``` Syntax:
     CREATE DATABASE DATABASE_NAME: 
```
``` Example: 
    CREATE DATABASE Interview
```

2. ###  CREATING a Table IN DATABASE

``` Syntax: 
    CREATE TABLE TABLE_NAME (
        Column1 datatype [constraint],
        Column2 datatype [constraint],
        Column3 datatype [constraint],
    )
```
``` Example: 
    CREATE TABLE Users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR (255) NOT NULL,
        email VARCHAR (255) NOT NULL,
        contact_number VARCHAR(255) NOT NULL;
    )
```

3. ###  INSERT Data into a Table

``` Syntax:
    INSERT INTO TABLE_NAME (Column1, Column2, Column3, ...)
    VALUES(Value1, Value2, Value3, ...);
```
``` Example:
    INSERT INTO Users (name, email, contact_number)
    VALUES('MUNNA', 'munna2@gmail.com', '014245721332112');
```

4. ###  Updating Data in a Table
``` Syntax: 
    UPDATE table_name
    SET column1 = value1, column2 = value2, ...
    WHERE condition;
```
``` Example: 
    UPDATE Users
    SET email = 'munna@gmail.com'
    WHERE id = 1;
```

5. ### Adding a New Column to a Table

``` Syntax: 
    ALTER TABLE Table_name
    ADD Column_name Column_defination/data_type
```
``` Example: 
    ALTER TABLE Users
    ADD  Phone_number VARCHAR(100);
```

6. ### Changing the Data Type of a Column

``` Syntax: 
    ALTER TABLE Table_name
    MODIFY COLUMN Column_name New_Column_defination
```
``` Example: 
    ALTER TABLE Users
    MODIFY COLUMN Phone_number TEXT;
```

7. ### Rename a Column

``` Sytanx:
    ALTER TABLE TABLE_NAME
    CHANGE COLUMN Old_Column_Name New_Column_Name New_Column_defination 
```
``` Example: 
    ALTER TABLE Users
    CHANGE COLUMN Phone_number Contact_number VARCHAR(20);
```

8. ### Changing the tABLE NAME

``` Syntax: 
    RENAME Old_Table_name TO New_Table_Name
```
``` Example: 
    RENAME Users TO Customers
```

9. ### Deleting a Column from a Table

``` Syntax:
    ALTER TABLE TABLE_NAME
    DROP COLUMN Column_name;
```
``` Example: 
    ALTER TABLE Customers
    DROP COLUMN Contact_number;
```

10. ### Deleting a Table

``` Syntax:
    DROP TABLE TABLE_NAME
```
``` Example: 
    DROP TABLE Customers ;
```

11. ### Deleting a DATABASE

``` Syntax:
    DROP DATABASE DATABASE_NAME
```
``` Example: 
    DROP DATABASE Interview ;
```

12. ### how to get the top 10 rows;

``` Syntax:
    SELECT * FROM TABLE_NAME LIMIT (0, 10);
```

``` Example:
    SELECT * FROM customers LIMIT (0, 10);
 ```

``` ------------------------------- END OF THE BASIC MYSQL DATABSE QUERY -----------------------------```

13. ### HOW TO Remove THE DUPLICATE VALUE IN TABLE 

``` Syntax:
    SELECT DISTINCT Column1, Column2 ...
    FROM TABLE_NAME;
```

``` Example:
    SELECT DISTINCT name, contact ....
    FROM users;
 ```

 14. ### Write a statement to find duplicate rows In the MySQL table?

 ``` Syntax:
     SELECT COLUMN1, COLUMN2
     FROM TABLE_NAME
     GROUP BY COLUMN1, COLUMN2
     HAVING COUNT(*) > 1;
```

``` Example:
    SELECT name, email
    FROM users
    GROUP BY name, email
    HAVING COUNT (id) > 1;
 ```

 15. ### how to create a SIMPLE view?

``` Syntax:
     CREATE VIEW VIEW_NAME AS 
     SELECT COLUMN_NAME1, COLUMN2 ...
     FROM TABLE_NAME
     WHERE CONDITION;  
```

``` Example:
    CREATE VIEW order_details AS 
    SELECT name, email, contact 
    FROM users
    WHERE status = 'active';
 ```
 
 16. ### how to create a view with join statement?

``` Syntax:
    CREATE VIEW VIEW_NAME AS
    SELECT COLUMN1, COLUMN2 ...
    FROM TABLE_NAME1 T1 // change the table_name to t1
    JOIN TABLE_NAME2 T2 ON T1.Column = T2.Column;
```

``` Example:
    CREATE VIEW orders_details AS
    SELECT o.id o.name, o.price, o.quantity, o.date, o.user_id, u.name, u.email, u.contact, u.address  
    FROM orders o
    WHERE users u ON o.user_id = u.id;
 ```

17. ### how to create a store procedure in mysql

``` Example:
    DELIMITER $$
    CREATE PROCEDURE GETDATA() 
    BEGIN
        SELECT id, name, email, contact, address FROM users;
    END $$
    DELIMITER;
```
 ### CALL STORE PROCEDURE IN PHP

``` <?php
    $servername = 'localhost';
    $username = 'root';
    $userpass = '';
    $databasename = 'Interview';

    $conn = new mysqli($servername, $username, $userpass, $databasename);

    if($conn->connect_error) {
        die('database connection failed', . conn->connect_error);
    }else {
        echo "database connection successfully!";
    }

    $Sql = (CALL GETDATA());
    $result = conn->query($sql);
    if($reslut> num_rows > 0) {
        while ($row = $reslut->fetch_assoc()) {
            echo 'id:' . $row['id'] . 'name' . $row['name'] . 'email' . $row['email'] . '<br>'; 
        }
    }else {
        echo " no result found';
    }

    $conn->close();

    ?>
```

###  if your stored procedure requires an ID parameter
```   $sql = ('CALL GETDATA(?)'); ```
```   $smtp = $conn->prepare($sql); ```
```   $smtp->bind_param('id', $id); ```
```   $smtp->excute(); ```
```   $result = $smtp->get_result(); ```


### quesiton:

``` ---------------------- MYSQL ------------------------- ```

``` MySQL is an open-source relational database management system (RDBMS) that uses Structured Query Language (SQL) to manage and  interact with data. It is one of the most popular database systems used for web applications, especially for managing large volumes of data. ```

MySQL হলো একটি ওপেন সোর্স রিলেশনাল ডেটাবেস ম্যানেজমেন্ট সিস্টেম (RDBMS), যা ডেটা পরিচালনা এবং যোগাযোগ করতে স্ট্রাকচারড কুয়েরি ভাষা (SQL) ব্যবহার করে। এটি একটি জনপ্রিয় ডেটাবেস সিস্টেম, বিশেষ করে ওয়েব অ্যাপ্লিকেশনগুলির জন্য, যা বড় পরিমাণের ডেটা পরিচালনা করতে সহায়ক।

``` -------------------- stored procedure ----------------- ```

``` A stored procedure is a set of SQL statements that are stored and executed in the database. It is a precompiled collection of one or more SQL queries that can be executed to perform a specific task, often to improve performance, maintain consistency, and reduce redundancy. ```

স্টোরড প্রোসিজার হলো SQL স্টেটমেন্টের একটি সেট যা ডেটাবেসে সংরক্ষিত এবং কার্যকর করা হয়। এটি একটি প্রিপ্রসেসড SQL কোয়েরির সংগ্রহ যা একটি নির্দিষ্ট কাজ সম্পন্ন করতে কার্যকর করা হয়, যা সাধারণত কর্মক্ষমতা উন্নত করতে, স্থিতিশীলতা বজায় রাখতে এবং পুনরাবৃত্তি কমাতে সহায়ক।

```----------------------- trigger ------------------------ ```

``` A trigger is a set of SQL statements that automatically executes or triggers when a specific event occurs in the database. This event could be an insert, update, or delete operation. Triggers are commonly used for enforcing business rules, auditing, and maintaining data integrity.```


ট্রিগার হলো SQL স্টেটমেন্টের একটি সেট যা স্বয়ংক্রিয়ভাবে কার্যকর হয় যখন ডেটাবেসে একটি নির্দিষ্ট ইভেন্ট ঘটে। এই ইভেন্টটি একটি ইনসার্ট, আপডেট বা ডিলিট অপারেশন হতে পারে। ট্রিগার সাধারণত ব্যবসায়িক নিয়ম কার্যকর করতে, অডিটিং করতে এবং ডেটার অখণ্ডতা বজায় রাখতে ব্যবহৃত হয়।

```-----------------------= view ------------------------= ```

``` A view is a virtual table in MySQL that is composed of a stored query or SELECT statement. It does not store data itself but retrieves data from one or more tables. Views are used to simplify complex queries, improve security, and provide a customized way to present data ```

ভিউ হলো MySQL-এ একটি ভার্চুয়াল টেবিল যা একটি স্টোরড কুয়েরি বা SELECT স্টেটমেন্ট দ্বারা গঠিত। এটি নিজে ডেটা সংরক্ষণ করে না, বরং এক বা একাধিক টেবিল থেকে ডেটা উদ্ধার করে। ভিউ সাধারণত জটিল কোয়েরি সহজ করতে, নিরাপত্তা উন্নত করতে এবং ডেটা উপস্থাপনের একটি কাস্টমাইজড উপায় প্রদান করতে ব্যবহৃত হয়।


``` JOIN ```

``` 1. INNER JOIN ```
এটি উভয় টেবিলের মধ্যে মিল থাকা রেকর্ডগুলি ফেরত দেয়।

``` SYNTAX: 
    SELECT COLUMNS ...
    FROM TABLE1
    INNER JOIN TABLE2
    ON TABLE1.COLUMN = TABLE2.COLUMN;
```
``` EXAMPLE: 
    SELECT customer.name, departments.name
    FROM customers
    INNER JOIN departments
    ON customers.department_id = department.id;
```

``` 1. LEFT JOIN ```
এটি বাম টেবিলের সব রেকর্ড এবং ডান টেবিলের মিল থাকা রেকর্ডগুলি ফেরত দেয়। যদি মিল না পাওয়া যায়, তাহলে ডান টেবিলের কলামগুলোতে NULL প্রদর্শিত হবে।

``` SYNTAX: 
    SELECT COLUMNS ...
    FROM TABLE1
    LEFT JOIN TABLE2
    ON TABLE1.COLUMN = TABLE2.COLUMN;
```
``` EXAMPLE: 
    SELECT customer.name, departments.name
    FROM customers
    LEFT JOIN departments
    ON customers.department_id = department.id;
```

``` 1. RIGHT JOIN ```
এটি ডান টেবিলের সব রেকর্ড এবং বাম টেবিলের মিল থাকা রেকর্ডগুলি ফেরত দেয়। যদি মিল না পাওয়া যায়, তাহলে বাম টেবিলের কলামগুলোতে NULL প্রদর্শিত হবে।

``` SYNTAX: 
    SELECT COLUMNS ...
    FROM TABLE1
    RIGHT JOIN TABLE2
    ON TABLE1.COLUMN = TABLE2.COLUMN;
```
``` EXAMPLE: 
    SELECT customer.name, departments.name
    FROM customers
    RIGHT JOIN departments
    ON customers.department_id = department.id;
```

### Flow of MVC in Laravel:
A user request (e.g., accessing /posts) hits the route defined in web.php.
The route directs the request to a controller (e.g., PostController@index).
The controller retrieves the necessary data from the model (e.g., Post::all()).
The controller then passes the data to the view (e.g., view('posts.index', compact('posts'))).
The view renders the data and returns the HTML response to the user.