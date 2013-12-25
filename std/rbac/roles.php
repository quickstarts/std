<?php

require_once(APPROOT. "rbac/role.php");

class EveryOne implements Role {

    protected $roleName = "EveryOne";
    protected $parentName = null;

    public function getRoleName() {
        return $this->roleName;
    }

    public function getParentName() {
        return $this->parentName;
    }

    public function authenticate(User $user=null) {
        return true;
    }

}

class LocalUser extends EveryOne {

    protected $roleName = "LocalUser";
    protected $parentName = "EveryOne";

    public function getRoleName() {
        return $this->roleName;
    }

    public function getParentName() {
        return $this->parentName;
    }

    public function authenticate(User $user=null) {
        return $user != null;
    }

}

class Administrator extends LocalUser {

    protected $roleName = "Administrator";
    protected $parentName = "LocalUser";

    public function getParentName() {
        return $this->parentName;
    }

    public function getRoleName() {
        return $this->roleName;        
    }

    public function authenticate(User $user=null) {
        return $user != null && $user->getLevel() >= 15;
    }
}
