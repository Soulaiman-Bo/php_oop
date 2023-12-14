<?php 

// Data Abstraction:
class BankAccount {
    private $balance;
    public function __construct($initial_balance) {
        $this->balance = $initial_balance;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function deposit(float $amount): void {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void {
        if ($amount > $this->balance) {
            throw new Exception("Insufficient funds.");
        }
        $this->balance -= $amount;
    }
}

$account = new BankAccount(1000);

echo "Balance: $" . $account->getBalance(); // Output: Balance: $1000

$account->deposit(500);

echo "Balance after deposit: $" . $account->getBalance(); // Output: Balance after deposit: $1500

$account->withdraw(200);
echo "Balance after withdrawal: $" . $account->getBalance(); // Output: Balance after withdrawal: $1300


// Behavioral Abstraction
class Car {
    private function startEngine(): void {
        // Complex code to start the engine
    }

    public function drive(): void {
        $this->startEngine();
        echo "The car is driving.";
    }

    public function stop(): void {
        echo "The car is stopped.";
    }
}

$car = new Car();

$car->drive(); // Output: The car is driving.
$car->stop(); // Output: The car is stopped.
