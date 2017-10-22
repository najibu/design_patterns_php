<?php

class CustomersRepository
{
    protected $customers;

    public function __construct($customers)
    {
        $this->customers = $customers;
    }

    public function matchingSpecification($specification)
    {
        $matches = [];

        foreach ($this->all() as $customers) {
            if ($specification->isSatisfiedBy($customer)) {
                $matches[] = $customer;
            }
        }

        return $matches;
    }

    public function all()
    {
        return $this->customers;
    }
}
