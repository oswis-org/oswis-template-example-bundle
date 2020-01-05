<?php

namespace Zakjakub\OswisTemplateExampleBundle\Exception;

use Exception;

class TemplateExampleException extends Exception
{
    public function __construct()
    {
        parent::__construct('Tohle je ukázka výjimky.');
    }
}