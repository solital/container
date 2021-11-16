<?php

namespace Solital\Core\Container\Test;

class MailTest
{
    public function setTransport($transport)
    {
        echo $transport . PHP_EOL;
    }
}
