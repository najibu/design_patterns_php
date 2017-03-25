<?php 

class CustomersRepository {
  protected $customers;

  public function whoMatch($specification)
  {
    $customers = Customer::query();

    $customers = $specification->asScope($customers);

    return $customers->get();
  }

  public function all()
  {
    return Customer::all();
  }
}