<?php

class OrderItem {
  public int $itemID;
  public string $description;
  public int $price;
  public int $quantity;
}

class Order
{
  const DELIVERED = "delivered";
  const ONSTOCK = "onstock";
  const DELIVERING = "delivering";

  public static int $orderID;
  public static OrderItem $descrition;
  public static string $status;
}

class Address
{
  protected static int $index;
  protected static string $street;
  protected static string $building;
  protected static int $flat;
  protected static string $city;
  protected static string $country;

  public function getIndex() : int
  {
    return $this->index;
  }

  public function setIndex(int $index)
  {
    $this->index = $index;
  }

  public function getStreet() : string
  {
    return $this->street;
  }

  public function setStreet(string $street)
  {
    $this->street = $street;
  }

  public function getBuilding() : string
  {
    return $this->building;
  }

  public function setBuilding(string $building)
  {
    $this->building = $building;
  }

  public function getFlat() : int
  {
    return $this->flat;
  }

  public function setFlat(int $flat)
  {
    $this->flat = $flat;
  }

  public function getCity() : string
  {
    return $this->city;
  }

  public function setCity(string $city)
  {
    $this->city = $city;
  }

  public function getCountry() : string
  {
    return $this->country;
  }

  public function setCountry(string $country)
  {
    $this->country = $country;
  }
}

class Person extends Address
{
  protected string $name;
  protected string $surname;
  protected string $birthdate;
  protected string $phone;
  protected string $email;

  public function getName() : string
    {
      return $this->name;
    }

  public function setName(string $name)
    {
      $this->name = $name;
    }

  public function getSurname() : string
    {
      return $this->surname;
    }

  public function setSurname(string $surname)
    {
      $this->surname = $surname;
    }

  public function getBirthdate() : string
    {
      return $this->birthdate;
    }

  public function setBirthdate(string $birthdate)
    {
      $this->birthdate = $birthdate;
    }

  public function getPhone() : string
    {
      return $this->phone;
    }

  public function setPhone(string $phone)
    {
      $this->phone = $phone;
    }

  public function getEmail() : string
    {
      return $this->email;
    }

  public function setEmail(string $email)
    {
      $this->email = $email;
    }

}

class Client extends Person
{
  private string $login;
  private string $passwordHash;
  private Order $orderList;

  public function getLogin() : string
    {
      return $this->login;
    }

  public function setLogin(string $login)
    {
      $this->login = $login;
    }

  public function getPasswordHash() : string
    {
      return $this->passwordHash;
    }

  public function getOrderList()
    {
      return $this->orderList;
    }

  public function addOrder(Order $order)
    {
      $this->orderList.push($order);
    }
}
