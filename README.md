<h1>Job Lister Website</h1>
<hr>

<p>Job Lister website is built using simple bootstrap 4, php, and pdo with mysql. The project is another milestone of my learning process to become a full stack developer. It is based on a
<a href="https://www.youtube.com/watch?v=LEkjrQMmIK0">youtube tutorial</a>.</p><br>

<p>This project implements CRUD(Create, Read, Update, and Delete) method employing php with pdo.
Due to different years gap between the tutorial and the date of the project creation, there are 
some differences between this project and the original, in terms of php reserved words, for example.
</p><br>

<p>In order to run this project locally, first of all create a database named "job_lister", then
run the following query to set the database table and set a primary key:
    
        CREATE TABLE  categories (
            id int(11) NOT NULL,
            name varchar(255) NOT NULL
        ) ENGINE = INNODB DEFAULT CHARSET=latin1;

        CREATE TABLE jobs (
            id int(11) NOT NULL,
            category_id int(11) NOT NULL,
            post_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            company varchar(255) NOT NULL,
            job_title varchar(255) NOT NULL,
            job_description varchar(255) NOT NULL,
            salary varchar(255) NOT NULL,
            job_location varchar(255) NOT NULL,
            contact_user varchar(255) NOT NULL,
            contact_email varchar(255) NOT NULL
        ) ENGINE = INNODB DEFAULT CHARSET=latin1;

        ALTER TABLE categories
            ADD PRIMARY KEY (id);
        
        ALTER TABLE jobs
            ADD PRIMARY KEY (id);
        
        ALTER TABLE categories
            MODIFY id int(11) NOT NULL AUTO_INCREMENT;
        
        ALTER TABLE jobs
            MODIFY id int(11) NOT NULL AUTO_INCREMENT;    
</p><br>

<p>After that run this next query to set the categories:

        INSERT INTO `categories` (`id`, `name`) 
        VALUES (NULL, 'Business'),
               (NULL, 'Retail'),
               (NULL, 'Construction'),
               (NULL, 'Technology')
</p>

Enjoy!