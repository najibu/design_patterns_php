<?php 

namespace Acme;

class VeggieSub extends Sub {

  public function addPrimaryToppings()
  {
    var_dump('Add some veggies');

    return $this;
  }

}

