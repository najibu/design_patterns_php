<?php


interface Subject // Publisher
{
    public function attach($observable);
    public function detach($index);
    public function notify();
}

interface Observer // Subscriber
{
    public function handle();
}

// ---
/* Subject behaviour maybe extracted to a trait
 *   to DRY up your code.
*/
class Login implements Subject
{
    protected $observers = [];

    public function attach($observable)
    {
        if (is_array($observable)) {
            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    public function fire()
    {
        //perform the login
        $this->notify();
    }

    protected function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (! $observer instanceof Observer) {
                throw new Exception;
            }

            $this->attach($observer);
        }
    }
}

// ***

class LogHandler implements Observer
{
    public function handle()
    {
        var_dump('log something important');
    }
}

class EmailNotifier implements Observer
{
    public function handle()
    {
        var_dump('fire off an email');
    }
}

class LoginReporter implements Observer
{
    public function handle()
    {
        var_dump('do something form of reporting');
    }
}

$login = new Login;
$login->attach([
    new LogHandler,
    new EmailNotifier,
    new LoginReporter
]);

$login->fire();
