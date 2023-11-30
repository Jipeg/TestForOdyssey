--Напишите SQL запрос, выбирающий все штрих-коды у заданной
--номенклатуры

SELECT * FROM `barcodes`
WHERE `nomenclature_id`=
(SELECT id FROM `nomenclatures`
WHERE name='propane');