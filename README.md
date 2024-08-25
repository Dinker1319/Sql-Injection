Creating a lab on SQL Injection with examples covering INSERT, UPDATE, DELETE, and SELECT operations requires a setup where you can experiment with SQL queries and potentially malicious inputs.

**Create a Database and Table**


CREATE DATABASE sql_injection_lab;
USE sql_injection_lab;



CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(100)
);
