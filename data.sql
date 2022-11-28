insert into School 
values ('1', 'Canyon High School', '1155 Lake Dr Dallas TX 75004', '3459998888', 'Dallas ISD', 'Smith');

insert into School
values (2, 'Liberty Elementary', '432 Main Street, Richardson, TX 75080', '9725551234', 'Richardson', 'John Smith');

INSERT INTO School
VALUES(3, 'Pearson High', '135 Learning Lane, Dallas, TX 75202', '4695558642', 'Dallas', 'Amy Lee');

INSERT INTO School
VALUES(4, 'Liberty Elementary', '432 Main Street, Richardson, TX 75080', '9725551234', 'Richardson', 'John Smith');

INSERT INTO School
VALUES(5, 'Jackson Middle', '4401 Sandy Drive, Houston, TX 77057', '7135556721', 'Houston', 'Randy Brooks');

INSERT INTO School
VALUES(6, 'Fairview High', '958 Luna Avenue, Austin, TX 73344', '5125558476', 'Round Rock', 'Chad Dinh');

INSERT INTO School
VALUES(7, 'Meadow Hills Middle', '21 Berry Place, Sugar Land, TX 77479', '2815554124', 'Fort Bend', 'Mallory West');

insert into Vendor
values ('1', 'Walmart', '17227 Main St Dallas Tx 75500', '9036549823');

insert into Vendor
values ('2', 'Office Depot', '6401 W Plano Pkwy, Plano, TX 75093', '9723784998');

insert into Vendor
values ('3', 'Target', '16731 Coit Rd, Dallas, TX 75248', '2147750206');

insert into Supply
values ('1', 'paper', '100', '3.99');

insert into Supply
values ('2', 'marker', '100', '4.99');

insert into Supply
values ('3', 'pencil', '70', '3.99');

insert into Supply
values ('4', 'pen', '90', '3.99');

insert into Supply
values ('5', 'notebook', '100', '7.99');

insert into Employee
values ('222888999', 'Michelle Chu', '1982-04-03', '2230 N Coit Rd, Richardson, TX 75080', '9729456260', NULL);

insert into Employee
values ('489977011', 'Jeff Sal', '1980-12-11', '2230 N Coit Rd, Richardson, TX 75080', '9729072260', '222888999');

insert into Employee
values ('666977018', 'Jordan Sam', '1981-07-13', '5435 NW 1st , Amarillo, TX 75080', '9729033260', '222888999');

INSERT INTO Department
VALUES(1, 'Client Administration');

INSERT INTO Department
VALUES(2, 'Inventory');

INSERT INTO Department
VALUES(3, 'Management');

INSERT INTO Dept_Location
VALUES(1, 'Richardson');

INSERT INTO Dept_Location
VALUES(2, 'Grand Prairie');

INSERT INTO Dept_Location
VALUES(3, 'Dallas');

insert into Replenishment_Request
values ('1', '1', '2', 'paper', '50', '2022-10-25');

insert into Replenishment_Request
values ('2', '1', '2', 'pencil', '100', '2022-10-27');

insert into Replenishment_Request
values ('3', '2', '2', 'marker', '45', '2022-11-01');

insert into Replenishment_Request
values ('4', '3', '2', 'pen', '200', '2022-11-11');

insert into Replenishment_Shipment
values ('1', '1', '2', '2022-10-31');

insert into Replenishment_Shipment
values ('2', '1', '2', '2022-10-31');

insert into Replenishment_Shipment
values ('3', '2', '2', '2022-11-08');

insert into Replenishment_Shipment
values ('4', '3', '2', NULL);

insert into Replenish
values ('1', '2', '2022-11-02 10:00:00', '50');

insert into Replenish
values ('3', '2', '2022-11-02 10:00:00', '100');

insert into Replenish
values ('2', '2', '2022-11-11 08:50:05', '45');

INSERT INTO Work_On
VALUES('489977011', 2);

INSERT INTO Work_On
VALUES('666977018', 2);

INSERT INTO Package
VALUES(3, 1, '2022-06-15 12:31:39', 20);

INSERT INTO Package
VALUES(4, 1, '2022-06-15 16:17:44', 40);

INSERT INTO Package
VALUES(5, 1, '2022-06-10 10:48:22', 30);

INSERT INTO School_Shipment
VALUES (12, 2, 1, '2022-11-11');

INSERT INTO School_Shipment
VALUES (11, 3, 1, '2022-10-24');

INSERT INTO School_Shipment
VALUES (10, 1, 1, '2022-10-20');

INSERT INTO School_Order
VALUES(108, 2, 1, 'marker', 5, '2022-11-07');	

INSERT INTO School_Order
VALUES(102, 3, 1, 'notebook', 10, '2022-10-18');

INSERT INTO School_Order
VALUES(95, 1, 1, 'pen', 20, '2022-10-17');