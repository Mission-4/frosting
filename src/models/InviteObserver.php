<?php

namespace Mission4\Frosting\Models;

use Mission4\Frosting\Models\Invite;

class InviteObserver
{
    public function creating(Invite $invite)
    {
        $pool = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        $length = 16;
        $id = substr(str_shuffle(str_repeat($pool, $length)), 0, $length);

        $invite->unique_id = $id;

        return $invite;
    }
}
