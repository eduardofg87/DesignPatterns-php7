<?php

namespace App\FactoryMethod;

require_once dirname(__DIR__).'HiringManager.php';

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}