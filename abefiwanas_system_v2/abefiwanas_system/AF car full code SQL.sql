/* table : CUSTOMER */
CREATE TABLE CUSTOMER (
  Customer_ID VARCHAR(10) PRIMARY KEY,
  customerName VARCHAR(50) NOT NULL,
  customerTelNum VARCHAR(25)
);

/* table : MODEL */
CREATE TABLE MODEL (
  model_ID VARCHAR(10) PRIMARY KEY,
  modelName VARCHAR(50) NOT NULL
);

/* table : CAR */
CREATE TABLE CAR (
  numPlate VARCHAR(10) PRIMARY KEY,
  carName VARCHAR(50) NOT NULL,
  carType VARCHAR(50),
  color VARCHAR(20),
  yearManufac VARCHAR(20),
  initialPrice DECIMAL(10, 2) NOT NULL,
  description VARCHAR(50),
  model_ID VARCHAR(10),
  FOREIGN KEY (model_ID) REFERENCES MODEL(model_ID)
);

/* table : PURCHASE (BRIDGE) */
CREATE TABLE PURCHASE (
  purchase_ID VARCHAR(10) PRIMARY KEY,
  customer_ID VARCHAR(10),
  numPlate VARCHAR(10),
  purchaseDate DATE NOT NULL,
  deposit DECIMAL(10, 2) NOT NULL,
  balancePayment DECIMAL(10, 2) NOT NULL,
  INDEX (customer_ID),
  INDEX (numPlate),
  FOREIGN KEY (customer_ID) REFERENCES CUSTOMER(Customer_ID),
  FOREIGN KEY (numPlate) REFERENCES CAR(numPlate)
);

/* table : POSTCODE */
CREATE TABLE POSTCODE (
  postCode VARCHAR(50) PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);
