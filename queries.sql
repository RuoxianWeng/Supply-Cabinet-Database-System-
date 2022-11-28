# get the supply name, vendor name, and quantity of all replenishment request we made on November 
select SupplyName Supply, Vname Vendor, quantity
from (Replenishment_Request natural join Vendor)
where month(OrderDate) = 11;

# get the sum of quantity of all supplies requested in October
select sum(quantity) TotalQty
from Replenishment_Request
where month(OrderDate) = 10;

-- Employee
Select Ename
From Employee
Where Ephone = '9729456260';

-- Vendor
Select Vname, Vaddress, Vphone
From Vendor
Where VendorID = 2;

-- Supply
Select Quantity, UnitPrice
From Supply
Where SupplyName = "pen";

-- Work_On
Select SSN
From Work_On
Where Dno = 2;

-- Package
Select PackageDatetime
From Package
Where SupplyCode = 3;

SELECT ShipmentDate
FROM School_Shipment
WHERE SchoolID = 3;

SELECT RepresentativeName
FROM School
WHERE District = 'Richardson';

SELECT Quantity
FROM School_Order
WHERE SchoolID = 1;