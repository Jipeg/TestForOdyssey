-- Создание таблиц
CREATE TABLE `nomenclatures`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE KEY,
    `name` VARCHAR(255) NOT NULL,
    `chem_formula` VARCHAR(255) NOT NULL
);
CREATE TABLE `barcodes`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `code` BIGINT NOT NULL,
    `nomenclature_id` BIGINT NOT NULL
);


-- Заполняем их для тестирования следующих заданий
INSERT INTO `nomenclatures` (`id`, `name`, `chem_formula`) VALUES
(1, 'methane', 'CH4'),
(2, 'ethane', 'C2H6'),
(3, 'propane', 'C3H8'),
(4, 'butane', 'C4H10'),
(5, 'pentane', 'C5H12');

INSERT INTO `barcodes` (`id`, `code`, `nomenclature_id`) VALUES
(2, 123456, 1),
(3, 39792, 1),
(4, 3923792, 2),
(5, 2512, 3),
(6, 7121292, 3);