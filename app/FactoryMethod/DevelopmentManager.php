<?php

namespace App\FactoryMethod;

require_once dirname(__DIR__) .'.HiringManager.php';
//Now any child can extend it and provide the required interviewer

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}
