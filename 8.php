<?php
// Реализовать на PHP структуру классов, описывающих следующие
// сущности: Поставщики, Клиенты, Банковские счета Поставщиков,
// Банковские счета Клиентов. Поля класса на своё усмотрение.

class Person {
    private $name;
    private $age;
    public function getName() : string {
        return $this->name;
    }
    public function getAge() : int {
        return $this->age;
    }
    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
        else {
            echo "Bad name\n";
        }
    }
    public function setAge($age) {
        if (is_numeric($age)) {
            $this->age = $age;
        }
        else {
            echo "Bad age\n";
        }
    }
    public function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }
}

class Bank_account {
    private $account_id;
    private $bank_name;
    public function getBank() : string {
        return $this->bank_name;
    }
    public function getId() : int {
        return $this->account_id;
    }
    public function setBank($bank_name) {
        if (is_string($bank_name)) {
            $this->bank_name = $bank_name;
        }
        else {
            echo "Bad Bank\n";
        }
    }
    public function setId($account_id) {
        if (is_numeric($account_id)) {
            $this->account_id = $account_id;
        }
        else {
            echo "Bad account_id\n";
        }
    }
    public function __construct($bank_name, $account_id) {
        $this->setBank($bank_name);
        $this->setId($account_id);
    }
}

class Supplier extends Person{
    private $product;
    public function setProd($product) {
        if (is_string($product)) {
            $this->product = $product;
        }
        else {
            echo "Bad product\n";
        }
    }
    public function getProd() : string {
        return $this->product;
    }
    public function __construct($name, $age, $product) {
        parent::__construct($name, $age);
        $this->setProd($product);
    }
    public function getName() :string {
        return "ИП " . parent::getName();
    }
}

class Client extends Person{
    private $money;
    public function setMoney($money) {
        if (is_numeric($money)) {
            $this->money = $money;
        }
        else {
            echo "Bad money\n";
        }
    }
    public function getMoney() : int {
        return $this->money;
    }
    public function __construct($name, $age, $money) {
        parent::__construct($name, $age);
        $this->setMoney($money);
    }
    public function getName() :string {
        return "Уважаемый " . parent::getName();
    }
}

class Client_Bank_account extends Bank_account {
    private $phone;
    public function __construct($name, $age, $phone) {
        parent::__construct($name, $age);
        $this->setPhone($phone);
    }
    public function setPhone($phone) {
        if (is_string($phone)) {
            $this->phone = $phone;
        }
        else {
            echo "Bad phone\n";
        }
    }
    public function getPhone() : int {
        return $this->phone;
    }
}

class Supplier_Bank_account extends Bank_account {
    private $account;
    public function __construct($name, $age, $account) {
        parent::__construct($name, $age);
        $this->setAccount($account);
    }
    public function setAccount($account) {
        if (is_numeric($account)) {
            $this->account = $account;
        }
        else {
            echo "Bad account\n";
        }
    }
    public function getAccount() : int {
        return $this->account;
    }
}

$Tim = new Person("Tim", 21);
echo $Tim->getName(),' ', $Tim->getAge(), "\n";

$VTB = new Bank_account("VTB", 4002_2322_1232_1112);
echo $VTB->getBank(),' ', $VTB->getId(), "\n";

$oao_abc = new Supplier("Иванов", 34, "Хлеб");
echo $oao_abc->getName(),' ', $oao_abc->getAge(), ' ', $oao_abc->getProd(), "\n";

$client = new Client("Федор Павлович", 23, 1500);
echo $client->getName(),' ', $client->getAge(), ' ', $client->getMoney(), "\n";