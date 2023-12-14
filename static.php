<?php 

class User {
    static $totalUsers = 0;
    public $totalBoys = 10;
  
    public function __construct() {
      self::$totalUsers++; // Increment total users on each object creation
    }
  
    public static function getTotalUsers() {
      return self::$totalUsers; // Access static property using scope resolution operator
    }

    public static function getTotalBoys() {
        return self::$totalBoys; // Access static property using scope resolution operator
      }
  }
  
  // Create new users
  $user1 = new User();
  $user2 = new User();
  
  // Access and print total users
  echo User::getTotalUsers(); // Outputs 2
  echo "\n";
  echo $user1->totalBoys;
  