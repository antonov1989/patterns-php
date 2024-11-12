1. **Дотримання єдності інтерфейсу**

    Батьківський клас або інтерфейс повинен визначати загальний контракт, якого мають дотримуватися всі підкласи. Це означає, що підкласи не повинні змінювати інтерфейс батьківського класу або додавати до нього методи, які б суперечили очікуваній поведінці.

        interface Payment {
            public function processPayment(float $amount);
        }
            
        class CreditCardPayment implements Payment {
            public function processPayment(float $amount) {
                echo "Processing credit card payment of $amount";
            }
        }
            
        class PayPalPayment implements Payment {
            public function processPayment(float $amount) {
                echo "Processing PayPal payment of $amount";
            }
        }
    Виконання принципу Лісков:
    будь-який об'єкт, що реалізує інтерфейс Payment, може замінити інший без зміни логіки. Наприклад, можна легко замінити CreditCardPayment на PayPalPayment.

2. **Дотримання контракту поведінки**

    Підкласи повинні виконувати обіцянки, дані батьківським класом. Це означає, що поведінка методів у підкласах не повинна порушувати очікування від поведінки базового класу.


    class Bird {
        public function fly() {
            return "Flying";
        }
    }
    
    class Sparrow extends Bird {
        // Спадковість коректна, горобець може літати
    }
    
    class Ostrich extends Bird {
        public function fly() {
            throw new Exception("Ostriches cannot fly!");
        }
    }

Невиконання принципу Лісков: клас Ostrich порушує поведінковий контракт батьківського класу, оскільки він не може літати, хоча батьківський клас Bird визначає метод fly().

Як виправити:

Можна виділити інший інтерфейс або клас для нелітаючих птахів:


    interface CanFly {
        public function fly();
    }
    
    class Sparrow implements CanFly {
        public function fly() {
            return "Flying";
        }
    }
    
    class Ostrich {
        // Неможливість літати тут коректно обробляється
    }

3. **Уникайте надлишкового перевизначення методів**

   Якщо підклас повинен перевизначити метод батьківського класу, переконайтеся, що це не змінює його основну функцію. Новий метод повинен мати ту ж сигнатуру і забезпечувати відповідну поведінку.
   Невірно:


    class Rectangle {
        protected $width;
        protected $height;
    
        public function setWidth($width) {
            $this->width = $width;
        }
    
        public function setHeight($height) {
            $this->height = $height;
        }
    
        public function getArea() {
            return $this->width * $this->height;
        }
    }

    class Square extends Rectangle {
    // Квадрат порушує контракт батьківського класу

        public function setWidth($width) {
            $this->width = $width;
            $this->height = $width;
        }
    
        public function setHeight($height) {
            $this->height = $height;
            $this->width = $height;
        }
    }
Як виправити:

Створіть інший клас для квадрата і не наслідуйте його від прямокутника, або використовуйте композицію замість спадковості.


    class Square {
        protected $side;
    
        public function setSide($side) {
            $this->side = $side;
        }
    
        public function getArea() {
            return $this->side * $this->side;
        }
    }
4. **Дотримуйтеся специфікацій батьківських класів або інтерфейсів**

   Підклас не повинен змінювати специфікації батьківського класу. Якщо метод батьківського класу очікує на певний тип аргументів або повертає певний тип, підклас повинен дотримуватися цих специфікацій.
   Правильний приклад:


    class Animal {
        public function makeSound() {
            return "Some sound";
        }
    }
    
    class Dog extends Animal {
        public function makeSound() {
            return "Bark";
        }
    }

Обидва класи дотримуються однакової специфікації — вони повертають рядок, що відповідає звуку тварини.

5. **Застосовуйте інверсію залежностей та інтерфейси**

   Інверсія залежностей через інтерфейси допомагає забезпечити гнучкість і замінність об'єктів, дотримуючись LSP.


    interface FileWriter {
        public function write($data);
    }

    class TextFileWriter implements FileWriter {
        public function write($data) {
        // Запис даних у текстовий файл
        }
    }
    
    class JsonFileWriter implements FileWriter {
        public function write($data) {
        // Запис даних у JSON-файл
        }
    }
В цьому випадку TextFileWriter і JsonFileWriter реалізують один і той самий інтерфейс, тому вони можуть бути взаємозамінними.

## Висновок:

Щоб досягти виконання принципу Барбари Лісков у PHP:

1. Дотримуйтесь єдності інтерфейсів.
2. Переконайтеся, що підкласи не порушують поведінку батьківських класів.
3. Уникайте надмірного перевизначення методів.
4. Завжди дотримуйтесь контракту методів базових класів.
5. Використовуйте інтерфейси для інверсії залежностей.
6. Це забезпечить гнучкість і правильну роботу ваших PHP-додатків, дотримуючись принципів SOLID.