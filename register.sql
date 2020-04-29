CREATE TABLE login (
 id int NOT NULL,
 username char(50) NOT NULL,
 email char(50) NOT NULL,
 password char(50) NOT NULL,
 PRIMARY KEY (id)
 );
 

 
 
 CREATE SEQUENCE login_sequence;
 
 CREATE OR REPLACE TRIGGER login_on_insert
  BEFORE INSERT ON login
  FOR EACH ROW
BEGIN
  SELECT login_sequence.nextval
  INTO :new.id
  FROM dual;
END;
/


 
INSERT INTO login ( username, password, email) VALUES ('namrata','ee','mehare.namarata1989@gmail.com');
grant select on login_sequence to nmehare;


INSERT INTO login (username, password, email) VALUES ('t','e358efa489f58062f10dd7316b65649e','test@gmail.com');
SELECT * FROM login WHERE username = 't' and password = 'e358efa489f58062f10dd7316b65649e';














