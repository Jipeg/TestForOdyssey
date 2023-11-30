<?php 
// Напишите скрипт на PHP который выводит в консоли и в файл
// двумерный массив (Код номенклатуры, Штрих-коды). В качестве
// разделителя в строке используйте табуляцию

// Настройка БД
$env = parse_ini_file('.env');
$user = $env["USER"];
$password = $env["PASSWORD"];
$db = $env["DB"];
$host = $env["HOST"];

// Подключение к БД
$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);

// SQL запрос
$sql = 'SELECT nomenclatures.id, barcodes.code
FROM nomenclatures
LEFT JOIN barcodes
ON nomenclatures.id=barcodes.nomenclature_id
ORDER BY nomenclatures.id, barcodes.code; ';

// Выведем результат
$query = $pdo->query($sql);
$myfile = fopen("out.txt", "w");
echo "Код номенклатуры\tШтрих-коды\n";
while($row = $query->fetch(PDO::FETCH_OBJ)) {
    $txt = $row->id . "\t" . $row->code .  "\n";
    fwrite($myfile, $txt);
    echo $txt;
}
fclose($myfile);