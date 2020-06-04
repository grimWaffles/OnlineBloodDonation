CREATE TABLE donorlist (

    username VARCHAR(11) PRIMARY KEY NOT NULL,
    pass VARCHAR(11) NOT NULL,
    fname CHAR(11) NOT NULL,
    lname CHAR(11) NOT NULL,
    email VARCHAR(11) NOT NULL,
    phone INT(11) NOT NULL,
    houseno VARCHAR(11) NOT NULL,
    street CHAR(11) NOT NULL,
    area CHAR(11) NOT NULL,
    city CHAR(11) NOT NULL,
    postal INT(11) NOT NULL,
    bloodgroup VARCHAR(11) NOT NULL,
 
);

CREATE TABLE organization(

    username VARCHAR(11) PRIMARY KEY NOT NULL,
    pass VARCHAR(11) NOT NULL,
    fname CHAR(11) NOT NULL,
    lname CHAR(11) NOT NULL,
    ophone INT(11) NOT NULL,
    cname VARCHAR(11) not NULL,
    cphone INT(11) NOT NULL,
    houseno VARCHAR(11) NOT NULL,
    street CHAR(11) NOT NULL,
    area CHAR(11) NOT NULL,
    city CHAR(11) NOT NULL,
    postal INT(11) NOT NULL

);

CREATE TABLE adminstrator(

    username VARCHAR(11) PRIMARY KEY NOT NULL,
    pass VARCHAR(11) NOT NULL,
    fname CHAR(11) NOT NULL,
    lname CHAR(11) NOT NULL,
    email VARCHAR(11) NOT NULL,
    scode INT(6) NOT NULL
);

CREATE TABLE posts(

    postid INT(8) NOT NULL PRIMARY KEY,
    fname VARCHAR(11) NOT NULL,
    lname VARCHAR(11) NOT NULL,
    phone INT(11) NOT NULL,
    email VARCHAR(20) NOT NULL,
    location VARCHAR(11) NOT NULL,
    quantity INT(2) NOT NULL,
    status CHAR(11) NOT NULL,
    date DATE NOT NULL
);

CREATE TABLE userlogin (

    username VARCHAR(11),
    pass varchar(10) NOT NULL,
    astatus CHAR(11) NOT NULL,
    type CHAR (11) NOT NULL,
    

);


