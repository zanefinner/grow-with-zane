<?php

namespace App\Policies;

use App\Models\GrowJournals;
use App\Models\User;

class GrowJournalsPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function delete(User $user, GrowJournals $growJournal)
    {
        return $user->id === $growJournal->user_id;
    }
    public function edit(User $user, GrowJournals $growJournal)
    {
        return $user->id === $growJournal->user_id;
    }
}
