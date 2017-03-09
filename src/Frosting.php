<?php

namespace Mission4\Frosting;

use Mission4\Frosting\Models\Invite;
use Mission4\Frosting\Models\InviteObserver;

class Frosting
{
    /**
     * Create a new Invitation
     * @param  string $email The email of the person you want to invite
     * @return Invite        Return the Created Invite
     */
    public static function invite($email)
    {
        $invitation = new Invite();
        $invitation->email = $email;
        $invitation->user_id = auth()->id();
        $invitation->save();

        return $invitation;
    }

    /**
     * Resolve an Invite by the Unique Identifier
     * @param  string $id The Invite::unique_id
     * @return Intive     The found Invite
     */
    public static function resolveInvite($id)
    {
        return Invite::whereUniqueId($id)->firstOrFail();
    }

    /**
     * Get a collection of all Invites
     * @return Illuminate\Collection Collection of Invites
     */
    public static function listInvites()
    {
        return Invite::latest()->get();
    }

    public static function invalidateInvitesForEmail($email)
    {
        $invites = Invite::whereEmail($email)->get();
        $invites->each->delete();
    }

    public static function confirmEmail($email)
    {
        return Invite::whereEmail($email)->firstOrFail();
    }

    /**
     * Register the Observer for the Invite Model
     * @return null
     */
    public static function registerInviteObserver()
    {
        Invite::observe(InviteObserver::class);
    }
}
