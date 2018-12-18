CREATE DATABASE test3;

CREATE table users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR (20) NOT NULL
);

CREATE TABLE messages (
    message_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    user_message VARCHAR(190),
    FOREIGN KEY (user_id) REFERENCES users (user_id)
);
    