<?php

namespace Mission4\Frosting\Models;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    public function send()
    {
        dd('Sending the Invitation');
    }

    public function jsonApi()
    {
        return [
            'id' => $this->id,
            'type' => "invites",
            'attributes' => collect($this->attributes)->except($this->hidden)->except(['id']),
        ];
    }
}
