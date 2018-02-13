<?php

namespace App\Service;

class Authentication extends \Globalis\PuppetSkilled\Auth\Authentication
{
    public function userCanEditUser($user)
    {
        if (!$user->isAdministrator()) {
            foreach ($user->companies as $company) {
                if ($this->userCan('backoffice.user', 'App\\Service\\Secure\\Company', $company->getKey())) {
                    return true;
                }
            }
        }
        return false;
    }
}
