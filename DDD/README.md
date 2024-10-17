Domain-Driven Design (DDD) — це підхід до розробки програмного забезпечення, зосереджений на глибокому розумінні і моделюванні домену (предметної області), що дозволяє створювати архітектуру, яка тісно пов'язана з бізнес-логікою і потребами бізнесу.

Основні положення DDD
Уніфікована мова (Ubiquitous Language):

Це мова, яку використовують як розробники, так і бізнес-аналітики. Вона описує всі аспекти домену і допомагає забезпечити єдність між різними командами.
Вся термінологія та моделі повинні бути зрозумілими і використовуватися в коді, документації та при спілкуванні між командами.
Bounded Context (Обмежений контекст):

Це чітко визначена межа, в рамках якої моделі мають сенс. Різні контексти можуть мати різні моделі для одного й того ж терміну.
Наприклад, термін "Order" (Замовлення) у контексті продажів може означати замовлення товарів, а в контексті складу — відправлення товарів.
Контекстна карта (Context Map):

Це інструмент для візуалізації відносин між різними bounded context і пояснення, як дані передаються між ними.
Domain Model (Модель домену):

Описує реальний світ бізнес-логіки та створюється в рамках bounded context.
Тактичні патерни DDD
Тактичні патерни допомагають розробляти рішення в рамках bounded context.

1. Сутності (Entities)
   Сутність — це об'єкт із унікальною ідентичністю, яка визначає його протягом усього життєвого циклу.

       class Order
       {
            private $id;
            private $items = [];
    
            public function __construct($id)
            {
                $this->id = $id;
            }
    
            public function addItem($item)
            {
                $this->items[] = $item;
            }
    
            public function getId()
            {
                return $this->id;
            }
       }

   У цьому прикладі Order — це сутність, яка має унікальний ідентифікатор.


2. Value Objects (Об'єкти значень)
   Об'єкти, що не мають унікальної ідентичності і характеризуються лише своїми властивостями.

        class Money
        {
            private $amount;
            private $currency;

           public function __construct($amount, $currency)
           {
               $this->amount = $amount;
               $this->currency = $currency;
           }
        
           public function getAmount()
           {
                return $this->amount;
           }
        
           public function getCurrency()
           {
                return $this->currency;
           }
        }

   Тут Money — це об'єкт значення, який визначається тільки кількістю і валютою.


4. Aggregates (Агрегати)
   Агрегат — це кластер пов'язаних об'єктів, які мають одну точку доступу (Aggregate Root).

       class Order
       {
           private $id;
           private $items = [];
        
           public function __construct($id)
           {
                $this->id = $id;
           }
        
           public function addItem(Item $item)
           {
                $this->items[] = $item;
           }
        
           public function getItems()
           {
                return $this->items;
           }
       }
    
        class Item
        {
            private $name;
            private $price;
        
            public function __construct($name, Money $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
        }
Order є агрегаційним коренем, а об'єкти Item належать до цього агрегату.


4. Repositories (Репозиторії)
   Репозиторій відповідає за збереження й отримання агрегатів із бази даних або іншого сховища.

       class OrderRepository
       {
           public function save(Order $order)
           {
           // Логіка для збереження замовлення у базі даних
           }
        
           public function findById($id)
           {
           // Логіка для пошуку замовлення за ідентифікатором
           }
       }

   Репозиторії приховують складність роботи з базою даних, дозволяючи працювати на рівні домену.


5. Domain Services (Доменні сервіси)
   Доменний сервіс містить бізнес-логіку, яка не може бути прив'язана до конкретної сутності або об'єкта значення.

       class ShippingService
       {
           public function calculateShippingCost(Order $order)
           {
           // Логіка для розрахунку вартості доставки
           }
       }


6. Factories (Фабрики)
   Фабрики допомагають створювати складні об'єкти або агрегати.

       class OrderFactory
       {
           public static function create($id, array $items)
           {
           $order = new Order($id);
        
                foreach ($items as $item) {
                    $order->addItem(new Item($item['name'], new Money($item['price'], 'USD')));
                }
                
                return $order;
           }
       }


7. Domain Events (Доменні події)
   Події, що сигналізують про значущу зміну стану системи.

       class OrderPlaced
       {
           private $orderId;
        
           public function __construct($orderId)
           {
                $this->orderId = $orderId;
           }
        
           public function getOrderId()
           {
                return $this->orderId;
           }
       }


#    **Висновок**

   DDD спрямований на побудову системи, яка тісно відображає бізнес-логіку та взаємодії.
   Стратегічні патерни, такі як Bounded Context і Ubiquitous Language, допомагають організувати архітектуру на високому рівні. Тактичні патерни, такі як Entities, Value Objects, Aggregates та інші, допомагають структурувати код і моделювати бізнес-логіку на рівні домену.

   Цей підхід зосереджений на співпраці між розробниками і бізнесом для досягнення кращого розуміння та побудови ефективних систем.