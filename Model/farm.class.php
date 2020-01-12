<?php

class Farm
{
  private $idFarm;
  private $nameFarm;
  private $socialState;
  private $city;
  private $CNPJ;
  private $CEP;
  private $telephone;
  private $email;

  public function __construct()
  {
  }

  public function __destruct()
  {
  }

  public function __get($attribute)
  {
    return $this->$attribute;
  }

  public function __set($attribute,$value)
  {
    $this->$attribute = $value;
  }

  public function __toString(): string
  {
    return nl2br("Codigo : $this->idFarm
    Nome : $this->nameFarm
    Razao Social : $this->socialState
    Cidade : $this->city
    CNPJ : $this->CNPJ
    CEP : $this->CEP
    Telefone : $this->telephone
    Email : $this->email");
  }
}
