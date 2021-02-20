<?php

namespace App\Repositories;

use App\Models\User;
use Silber\Bouncer\BouncerFacade as Bouncer;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function assignRole(User $user, array $roles = null)
    {
        if(!is_null($roles)) {
            foreach($roles as $role) {
                Bouncer::assign($role)->to($user);
            }
        }
    }
}
