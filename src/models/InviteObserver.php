<?php

namespace Mission4\Frosting\Models;

use Mission4\Frosting\Models\Invite;

class InviteObserver
{
    public function creating(Invite $invite)
    {
        $invite->unique_id = str_random(40);
        return $invite;
    }
}
