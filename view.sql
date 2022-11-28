create view Supply_Replenishment
as select SupplyName as Supply, r.Quantity, ReplenishmentDatetime as ReplenishmentDate
from Replenish r, Supply s
where r.SupplyCode = s.SupplyCode;

Create View DEPT_INFO (Dept_name, No_of_emps)
As Select Dno, count(*)
From Work_On
Group By Dno;

CREATE VIEW School_Order_List
AS SELECT Sname, Saddress, SupplyName, Quantity
FROM School S, School_Order O
WHERE S.SchoolID = O.SchoolID;