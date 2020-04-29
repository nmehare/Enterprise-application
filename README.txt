Important Note:
PHP Application:
-------------------------------------------------------------------------------------------------
https://personal-sites.deakin.edu.au/~nmehare/ass2/code/login.php

Angular application:
----------------------------------------------------------------------------------------------------
https://personal-sites.deakin.edu.au/~nmehare/ass2/code/angularapp/myapp/index.html


Create below table to Register:
-------------------------------------------------------------------------------------------------------
CREATE TABLE users (
 id int NOT NULL,
 username char(50) NOT NULL,
 email char(50) NOT NULL,
 password char(50) NOT NULL
 PRIMARY KEY (id)
);

Settings to make Application work:
--------------------------------------------------------------------------------------------
Run bellow command for cross-origin error
Access-Control-Allow-Origin’ Error solution when using Chrome 

"C:\Program Files (x86)\Google\Chrome\Application\chrome.exe" --user-data-dir="C:\SIT\Scratch\nmehare" --disable-web-security  
ng build --baseHref=/~nmehare/ass2/code/angularapp/myapp/

