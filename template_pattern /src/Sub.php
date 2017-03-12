<?php 

namespace Acme;

abstract class Sub {

  public function make()
  {
    return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
  }

  protected function layBread()
  {
    var_dump('Laying down the bread');

    return $this;
  }

  protected function addLettuce()
  {
    var_dump('Add some lettuce');

    return $this;
  }

  protected function addSauces()
  {
    var_dump('add oil and vinegar');

    return $this;
  }

  protected abstract function addPrimaryToppings();
}