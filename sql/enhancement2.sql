-- Query uno
SELECT * FROM clients;
INSERT INTO clients (clientEmail, clientFirstname, clientLastname, clientPassword, comment)
VALUES ("tony@starknet.com", "Tony", "Stark", "IamIronM@n", "I am the real ironman")

-- Query dos
SELECT * FROM clients;
UPDATE clients
SET clientLevel = 3;

-- Query tres
SELECT * FROM inventory;
UPDATE inventory
SET invDescription - replace(invDescription, "small interior", "spacious interior")
WHERE invId = 12

-- Query cuatro
SELECT * FROM carclassification;
SELECT * FROM inventory;
INNER JOIN carclassification ON
inventory.classificationId = carclassification.classificationId
WHERE inventory.classificationId = 1;

-- Query cinco
SELECT * FROM inventory;
DELETE FROM inventory
WHERE invId = 1;

