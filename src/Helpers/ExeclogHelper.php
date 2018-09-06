<?php

namespace Codebyray\LaravelExeclog\Helpers;

use Codebyray\LaravelExeclog\Models\Execlog;

class ExeclogHelper
{
    /**
     * Creates and entry for the users audits.
     *
     * @param $userId
     * @param $action
     * @param $entry
     *
     * @return int
     */
    public static function createUserLog($userId, $action, $entry) {
        $newAudit = new Execlog;
        $newAudit->user_id = $userId;
        $newAudit->action = $action;
        $newAudit->entry = $entry;
        $newAudit->save();

        return $newAudit->id;
    }

}