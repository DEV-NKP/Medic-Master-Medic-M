<?php


function createDB()
{
    
$servername="localhost";
$username="root";
$password="";
$dbname="MEDICM";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$checkQ= "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '".$dbname."'";


 $result=$conn->query($checkQ);
 if($result->num_rows>0)
 {
     
 }
else{

$createQ = "CREATE DATABASE ". $dbname .";";
if ($conn->query($createQ) === TRUE) {
  //echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

}
$conn->close();
}

function createTable()
{
    
$servername="localhost";
$username="root";
$password="";
$dbname="MEDICM";
$conn=new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$checkSIGNTQ="SHOW TABLES LIKE 'SIGNUP'";
$flagSIGNT=False;
if ($result = $conn->query($checkSIGNTQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagSIGNT=True;
    }
}
else {
   // echo "Table does not exist";
   $flagSIGNT=False;
}

if(!$flagSIGNT)
{
    $sql = "CREATE TABLE SIGNUP (
        USERNAME VARCHAR(100) NOT NULL,
        EMAIL VARCHAR(100) NOT NULL,
        PASSWORD VARCHAR(100) NOT NULL,
        POST VARCHAR(25) NOT NULL
        )";
        
        if ($conn->query($sql) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}


///CUSTOMER SIGN UP

$checkCUS_SIGNTQ="SHOW TABLES LIKE 'SIGNUP_CUSTOMER'";
$flagCUS_SIGNT=False;
if ($result = $conn->query($checkCUS_SIGNTQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagCUS_SIGNT=True;
    }
}
else {
   // echo "Table does not exist";
   $flagCUS_SIGNT=False;
}

if(!$flagCUS_SIGNT)
{
    $sql = "CREATE TABLE SIGNUP_CUSTOMER (
		PROFILE_PIC VARCHAR(150) NOT NULL,
		NAME VARCHAR(150) NOT NULL,
		EMAIL VARCHAR(100) NOT NULL,
		USERNAME VARCHAR(100) NOT NULL,
		PASSWORD VARCHAR(50) NOT NULL,
		MOBILE VARCHAR(20) NOT NULL,
		GENDER VARCHAR(20) NOT NULL,
		ADDRESS VARCHAR(300) NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}

///SELLER SIGN UP

$checkSELL_SIGNTQ="SHOW TABLES LIKE 'SIGNUP_SELLER'";
$flagSELL_SIGNT=False;
if ($result = $conn->query($checkSELL_SIGNTQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagSELL_SIGNT=True;
    }
}
else {
   // echo "Table does not exist";
   $flagSELL_SIGNT=False;
}

if(!$flagSELL_SIGNT)
{
    $sql = "CREATE TABLE SIGNUP_SELLER (
		PROFILE_PIC VARCHAR(150) NOT NULL,
		NAME VARCHAR(150) NOT NULL,
		EMAIL VARCHAR(100) NOT NULL,
		USERNAME VARCHAR(100) NOT NULL,
		PASSWORD VARCHAR(50) NOT NULL,
		MOBILE VARCHAR(20) NOT NULL,
		COMPANY_NAME VARCHAR(50) NOT NULL,
		GENDER VARCHAR(20) NOT NULL
		
        )";

        if ($conn->query($sql) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}



///ADMIN SIGN UP

$checkADMIN_SIGNTQ="SHOW TABLES LIKE 'SIGNUP_ADMIN'";
$flagADMIN_SIGNT=False;
if ($result = $conn->query($checkADMIN_SIGNTQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagADMIN_SIGNT=True;
    }
}
else {
   // echo "Table does not exist";
   $flagADMIN_SIGNT=False;
}

if(!$flagADMIN_SIGNT)
{
    $sql = "CREATE TABLE SIGNUP_ADMIN (
		PROFILE_PIC VARCHAR(150) NOT NULL,
		NAME VARCHAR(150) NOT NULL,
		EMAIL VARCHAR(100) NOT NULL,
		USERNAME VARCHAR(100) NOT NULL,
		PASSWORD VARCHAR(50) NOT NULL,
		MOBILE VARCHAR(20) NOT NULL,
		GENDER VARCHAR(20) NOT NULL,
		ADDRESS VARCHAR(300) NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}


///SELLER LOGIN

$checkLOGSEL_LOGINSELTQ="SHOW TABLES LIKE 'SELLER_LOGIN'";
$flagLOGSEL_LOGINSELT=False;
if ($result = $conn->query($checkLOGSEL_LOGINSELTQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagLOGSEL_LOGINSELT=True;
    }
}
else {
   // echo "Table does not exist";
   $flagLOGSEL_LOGINSELT=False;
}

if(!$flagLOGSEL_LOGINSELT)
{
    $sql = "CREATE TABLE SELLER_LOGIN (
		USERNAME VARCHAR(100) NOT NULL,
		PASSWORD VARCHAR(50) NOT NULL,
    TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}


///CUSTOMER LOGIN

$checkLOGCUS_LOGINCUSTQ="SHOW TABLES LIKE 'CUSTOMER_LOGIN'";
$flagLOGCUS_LOGINCUST=False;
if ($result = $conn->query($checkLOGCUS_LOGINCUSTQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagLOGCUS_LOGINCUST=True;
    }
}
else {
   // echo "Table does not exist";
   $flagLOGCUS_LOGINCUST=False;
}

if(!$flagLOGCUS_LOGINCUST)
{
    $sql = "CREATE TABLE CUSTOMER_LOGIN (
		USERNAME VARCHAR(100) NOT NULL,
		PASSWORD VARCHAR(50) NOT NULL,
    TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}


///ADMIN LOGIN

$checkLOGAD_LOGINADTQ="SHOW TABLES LIKE 'ADMIN_LOGIN'";
$flagLOGAD_LOGINADT=False;
if ($result = $conn->query($checkLOGAD_LOGINADTQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagLOGAD_LOGINADT=True;
    }
}
else {
   // echo "Table does not exist";
   $flagLOGAD_LOGINADT=False;
}

if(!$flagLOGAD_LOGINADT)
{
    $sql = "CREATE TABLE ADMIN_LOGIN (
		USERNAME VARCHAR(100) NOT NULL,
		PASSWORD VARCHAR(50) NOT NULL,
    TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}






///PRODUCT ENTRY

$checkPRODUCT_TQ="SHOW TABLES LIKE 'PRODUCT'";
$flagPRODUCT_T=False;
if ($result = $conn->query($checkPRODUCT_TQ)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagPRODUCT_T=True;
    }
}
else {
   // echo "Table does not exist";
   $flagPRODUCT_T=False;
}

if(!$flagPRODUCT_T)
{
    $sql1 = "CREATE TABLE PRODUCT (
		PRODUCT_PIC BLOB(1000),
		PRODUCT_NAME VARCHAR(150) NOT NULL,
		PRODUCT_ID INT(6) PRIMARY KEY,
		PRODUCT_PRICE INT(10) NOT NULL,
		PRODUCT_QUANTITY INT(10) NOT NULL,
		PRODUCT_WEIGHT VARCHAR(20) NOT NULL,
		PRODUCT_DETAILS VARCHAR(300) NOT NULL,
		PRODUCT_SELLER VARCHAR(50) NOT NULL,
		PRODUCT_COMPANY VARCHAR(50) NOT NULL,
		PRODUCT_POST_TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql1) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}





///BAnk account

$checkBANK="SHOW TABLES LIKE 'BANK'";
$flagBANK=False;
if ($result = $conn->query($checkBANK)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagBANK=True;
    }
}
else {
   // echo "Table does not exist";
   $flagBANK=False;
}

if(!$flagBANK)
{
    $sql1 = "CREATE TABLE BANK (
		USERNAME VARCHAR(100) NOT NULL,
		BALANCE INT,
		UPDATE_TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql1) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}


///cart

$checkCART="SHOW TABLES LIKE 'CART'";
$flagCART=False;
if ($result = $conn->query($checkCART)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagCART=True;
    }
}
else {
   // echo "Table does not exist";
   $flagCART=False;
}

if(!$flagCART)
{
    $sql1 = "CREATE TABLE CART (
    CID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		USERNAME VARCHAR(100) NOT NULL,
    PRODUCT_ID INT(6) ,
    PRODUCT_PRICE INT(10) NOT NULL,
    ORDER_QUANTITY INT(10) NOT NULL,
    TOTAL_PRICE INT(10) NOT NULL,
		UPDATE_TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql1) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}


///order

$checkORDER="SHOW TABLES LIKE 'ORDER_LIST'";
$flagORDER=False;
if ($result = $conn->query($checkORDER)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagORDER=True;
    }
}
else {
   // echo "Table does not exist";
   $flagORDER=False;
}

if(!$flagORDER)
{
    $sql1 = "CREATE TABLE ORDER_LIST (
    ORID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		CNAME VARCHAR(100) NOT NULL,
    SNAME VARCHAR(100) NOT NULL,
    PRODUCT_ID INT(6),
    ORDER_ID INT(6),
    PRODUCT_PRICE INT(10) NOT NULL,
    ORDER_QUANTITY INT(10) NOT NULL,
    TOTAL_PRICE INT(10) NOT NULL,
		UPDATE_TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql1) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}

$checkOLDORDER="SHOW TABLES LIKE 'OLD_ORDER'";
$flagOLDORDER=False;
if ($result = $conn->query($checkOLDORDER)) {
    if($result->num_rows == 1) {
       // echo "Table exists";
       $flagOLDORDER=True;
    }
}
else {
   // echo "Table does not exist";
   $flagOLDORDER=False;
}

if(!$flagOLDORDER)
{
    $sql1 = "CREATE TABLE OLD_ORDER (
    ORID INT,
		CNAME VARCHAR(100) NOT NULL,
    SNAME VARCHAR(100) NOT NULL,
    PRODUCT_ID INT(6) ,
    ORDER_ID INT(6) ,
    PRODUCT_PRICE INT(10) NOT NULL,
    ORDER_QUANTITY INT(10) NOT NULL,
    TOTAL_PRICE INT(10) NOT NULL,
		UPDATE_TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql1) === TRUE) {
          //echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
}


$checkad="SELECT * FROM SIGNUP_ADMIN WHERE USERNAME='admin'";
$flagad=False;
if ($result = $conn->query($checkad)) {
    if($result->num_rows>0) {
       // echo "Table exists";
       $flagad=True;
    }
}
else {
   // echo "Table does not exist";
   $flagad=False;
}
if(!$flagad)
{
  $sql1="INSERT INTO SIGNUP (USERNAME,EMAIL,PASSWORD,POST) VALUES ('admin','niloykantipaul.aiub@gmail.com','admin','Admin')";

        if ($conn->query($sql1) === TRUE) {
          $sql2="INSERT INTO SIGNUP_ADMIN (PROFILE_PIC,NAME,EMAIL,USERNAME,PASSWORD,MOBILE,GENDER,ADDRESS) VALUES ('','admin','niloykantipaul.aiub@gmail.com','admin','admin','00099999999','Male','AIUB')";

          if ($conn->query($sql2) === TRUE) {
            $sql3="INSERT INTO BANK (USERNAME,BALANCE) VALUES ('admin','100000')";

            if ($conn->query($sql3) === TRUE) {
    
    
            } else {
              echo "Error creating table: " . $conn->error;
            }
  
          } else {
            echo "Error creating table: " . $conn->error;
          }

        } else {
          echo "Error creating table: " . $conn->error;
        }
}


$conn->close();
}

createDB();
createTable();






?>