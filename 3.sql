-- Выведите список Номенклатура.Штрих-коды с сортировкой по
-- номенклатурам и штрих-кодам.

SELECT nomenclatures.name, barcodes.code
FROM nomenclatures
LEFT JOIN barcodes
ON nomenclatures.id=barcodes.nomenclature_id
ORDER BY nomenclatures.name, barcodes.code;