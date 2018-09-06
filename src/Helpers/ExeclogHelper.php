<?php

namespace Codebyray\LaravelExeclog\Helpers;

use Codebyray\LaravelExeclog\Models\Execlog;

class ExeclogHelper
{
    public $execlog;

    public function __construct(Execlog $execlog)
    {
        $this->execlog = $execlog;
    }

    public function createLog($userId, $action, $entry)
    {
        $newLog = new $this->execlog;
        $newLog->user_id = $userId;
        $newLog->action = $action;
        $newLog->entry = $entry;

        return true;
    }

}