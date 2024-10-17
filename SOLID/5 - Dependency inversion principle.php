<?php

/**
 * 5. DIP (Dependency inversion principle) - Принцип инверсии зависимостей
 *
 * Классы не должны зависить от других классов на прямую
 * Зависимости строяться на основе абстракций.
 * Абстракции не зависят от деталей, детали зависят от абстракций
 *
 * Модули верхнего уровне не зависят от модулей нижнего
 */

// Start data

class PasswordReminder {
    private $dbConnection;
    
    public function __construct(MySQLConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}

/**
 * MySQLConnection является низкоуровневым модулем, PasswordReminder - высокоуровневый.
 * Класс PasswordReminder не должен беспокоиться об используемой СУБД
 */
interface DBConnectionInterface {
    public function connect();
}

class MySQLConnection implements DBConnectionInterface {
    public function connect() {
        return "Database connection";
    }
}

class PasswordReminder {
    private $dbConnection;
    
    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}