<?php

/**
 * 5. DIP (Dependency inversion principle) - Принцип инверсии зависимостей
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