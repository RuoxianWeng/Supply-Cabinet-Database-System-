Create table School
	(SchoolID				int					not null,
     Sname					varchar(45),
     Saddress				varchar(60), 
     Sphone					char(10), 
     District				varchar(45),
     RepresentativeName		varchar(45),
     primary key(SchoolID) );
     
Create table Department
	(DeptNo					int					not null,
     Dname					varchar(45),
     primary key(DeptNo) );	
     
Create table Dept_Location
	(Dno					int					not null,
     Location				varchar(45)			not null,
     primary key(Dno, Location),
     constraint DEPT_LOCATION_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete cascade	on update cascade );
            
Create table Employee
	(SSN					char(9)				not null,
     Ename					varchar(45),
     DOB					Date, 
     Eaddress				varchar(60), 
     Ephone					char(10),
     Super_SSN				char(9),
     primary key(SSN) );
     
Alter table Employee add
	(constraint EMPLOYEE_SUPER_SSN_FK
		foreign key(Super_SSN) references Employee(SSN)
			on delete cascade	on update cascade );
            
CREATE TABLE Vendor 
	(VendorID				int					not null,
     Vname					varchar(45), 
     Vaddress 				varchar(60),
     Vphone 				char(10), 
     primary key(VendorID) );
     
CREATE TABLE Supply 
	(SupplyCode				int					not null,
     SupplyName				varchar(45), 
     Quantity 				int,
     UnitPrice 				dec(3,2), 
     primary key(SupplyCode) );
     
CREATE TABLE Work_On 
	(SSN					char(9)				not null,
     Dno					int					not null, 
     primary key(SSN, Dno),
     constraint WORK_ON_SSN_FK
		foreign key(SSN) references Employee(SSN)
			on delete cascade	on update cascade,
	 constraint WORK_ON_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete restrict	on update cascade );
            
CREATE TABLE School_Shipment 
	(ShipmentNo				int					not null,
     SchoolID				int					not null, 
     Dno					int,
     ShipmentDate			Date,
     primary key(ShipmentNo),
     constraint SCHOOL_SHIPMENT_SCHOOLID_FK
		foreign key(SchoolID) references School(SchoolID)
			on delete restrict	on update cascade,
	 constraint SCHOOL_SHIPMENT_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete restrict	on update cascade );

CREATE TABLE School_Order 
	(OrderNo				int					not null,
     SchoolID				int					not null, 
     Dno					int,
     SupplyName				varchar(45),
     Quantity				int,
     OrderDate				date,
     primary key(OrderNo),
     constraint SCHOOL_ORDER_SCHOOLID_FK
		foreign key(SchoolID) references School(SchoolID)
			on delete restrict	on update cascade,
	 constraint SCHOOL_ORDER_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete restrict	on update cascade );

CREATE TABLE Replenishment_Request 
	(OrderNo				int					not null,
     VendorID				int					not null, 
     Dno					int,
     SupplyName				varchar(45),
     quantity				int,
     OrderDate				date,
     primary key(OrderNo),
     constraint REPLENISHMENT_REQUEST_VENDORID_FK
		foreign key(VendorID) references Vendor(VendorID)
			on delete restrict	on update cascade,
	 constraint REPLENISHMENT_REQUEST_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete restrict	on update cascade );
            
CREATE TABLE Replenishment_Shipment 
	(ShipmentNo				int					not null,
     VendorID				int					not null, 
     Dno					int,
     ShipmentDate			date,
     primary key(ShipmentNo),
     constraint REPLENISHMENT_SHIPMENT_VENDORID_FK
		foreign key(VendorID) references Vendor(VendorID)
			on delete restrict	on update cascade,
	 constraint REPLENISHMENT_SHIPMENT_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete restrict	on update cascade );
            
CREATE TABLE Replenish
	(SupplyCode					int					not null,
     Dno						int					not null,
     ReplenishmentDatetime		datetime			not null,
     Quantity					int,
     primary key(SupplyCode, Dno, ReplenishmentDatetime),
     constraint REPLENISH_SUPPLYCODE_FK
		foreign key(SupplyCode) references Supply(SupplyCode)
			on delete restrict	on update cascade,
	 constraint REPLENISH_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete restrict	on update cascade );
            
CREATE TABLE Package
	(SupplyCode					int					not null,
     Dno						int					not null,
     PackageDatetime			datetime			not null,
     Quantity					int,
     primary key(SupplyCode, Dno, PackageDatetime),
     constraint PACKAGE_SUPPLYCODE_FK
		foreign key(SupplyCode) references Supply(SupplyCode)
			on delete restrict	on update cascade,
	 constraint PACKAGE_DEPTNO_FK
		foreign key(Dno) references Department(DeptNo)
			on delete restrict	on update cascade );

     