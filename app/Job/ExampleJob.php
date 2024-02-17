<?php

declare(strict_types=1);

namespace App\Job;

use Hyperf\AsyncQueue\Job;

class ExampleJob extends Job
{
    public $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function handle()
    {
        var_dump($this->params);
    }
}
