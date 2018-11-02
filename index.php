<!-- Распишите своё понимание инкапсуляции. 
Инкапсуляция - понятие в программировании, облегчающее классификацию данных и последующую работу с ними, а также позволяющее ограничить доступ к этим данным -->

<!-- В чём плюсы объектов, а в чём минусы 
Плюсы: 
- Возможность ограничить доступ к данным;
- Данные меняются в конкретном объекте, не затрагивая все остальные данные.
Минусы:
- Сложно работать с чужими объектами -->

<?php 
class Car 
{ 
	public $brand; 
	public $model; 
	public $color; 
	public $yearOfManufacture; 
	public function __construct() 
	{ 
		echo 'Был создан объект класса'; 
		echo PHP_EOL; 
	} 
	public function getColor() 
	{ 
		$this -> color = 'red'; 
	} 
} 
$audi = new Car(); 
$ferrary = new Car(); 
$ferrary->getColor('Красный'); 
echo $ferrary->color; 
class TV 
{ 
	public $brand; 
	public $tvDiagonal; 
	public $screenResolution; 
	public function __construct() 
	{ 
		echo 'Был создан объект класса'; 
		echo PHP_EOL; 
	} 
	public function echoBrend() 
	{ 
		echo 'Модель телевизора $this -> brand'; 
	} 
} 
$toshiba = new TV(); 
$toshiba->brand = 'Toshiba'; 
$toshiba->tvDiagonal = '50'; 
$toshiba->screenResolution = '1920 х 1080'; 
$toshiba->echoBrend(); 
$lg = new TV(); 
$lg->brand = 'LG'; 
$lg->tvDiagonal = '55'; 
$lg->screenResolution = '1920 х 1080'; 
$lg->echoBrend(); 
class BallpointPen 
{ 
	public $color; 
	public $material; 
	public $lineWidth; 
	public function __construct() 
	{ 
		echo 'Был создан объект класса'; 
		echo PHP_EOL; 
	} 
	public function changeWidth() 
	{ 
		$this->lineWidth = 0.7; 
	} 
} 
$pen1 = new BallpointPen(); 
$pen1->color = 'blue'; 
$pen1->material = 'plastic'; 
$pen1->lineWidth = '0.5'; 
$pen1->changeWidth(); 
echo $pen1->lineWidth; 
echo PHP_EOL; 
$pen2 = new BallpointPen(); 
$pen2->color = 'black'; 
$pen2->material = 'metal'; 
$pen2->lineWidth = '0.5'; 
class Duck 
{ 
	public $fullName; 
	public $creator; 
	public $firstAppearanceOnScreen; 
    public $age; 
	public function __construct() 
	{ 
		echo 'Был создан объект класса'; 
		echo PHP_EOL; 
	} 
	public function getAge() 
	{ 
		$this->age = 2018 - $this->firstAppearanceOnScreen; 
	} 
} 
$donaldDuck = new Duck(); 
$donaldDuck->fullName = 'Donald Fauntleroy Duck'; 
$donaldDuck->creator = 'Дик Ланди'; 
$donaldDuck->firstAppearanceOnScreen = '1934'; 
$donaldDuck->getAge(); 
echo $donaldDuck->age; 
echo PHP_EOL; 
$scroogeMcDuck = new Duck(); 
$scroogeMcDuck->fullName = 'Scrooge McDuck'; 
$scroogeMcDuck->creator = 'Карл Баркс'; 
$scroogeMcDuck->firstAppearanceOnScreen = '1967'; 
$scroogeMcDuck->getAge(); 
echo $scroogeMcDuck->age; 
echo PHP_EOL; 
class Product 
{ 
	public $name; 
	public $price; 
	public $quantity;
    
	public function __construct() 
	{ 
		echo 'Был создан объект класса'; 
		echo PHP_EOL; 
	} 
	public function notInStock() 
	{ 
		if ($this->quantity == 0) {
			echo 'Данного товара нет на складе';
                        echo PHP_EOL; 
		} else {
			echo "Количество товара на складе: ".$this->quantity;
			echo PHP_EOL; 
                }
	} 
} 
$milk = new Product (); 
$milk->name = 'Milk'; 
$milk->price = '50'; 
$milk->quantity = '0'; 
$milk->notInStock(); 
$bread = new Product (); 
$bread->name = 'bread'; 
$bread->price = '60'; 
$bread->quantity = '3'; 
$bread->notInStock();
?>