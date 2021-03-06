<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Hashids\Traits\Hashids;
use Litepie\User\Traits\CheckPermission;
use Litepie\User\Traits\Users\UserProfile;

class User extends Authenticatable
{
    use CheckPermission, UserProfile, SoftDeletes, Hashids, Slugger;

     /**
      * Configuartion for the model.
      *
      * @var array
      */
     protected $config = 'user.user';

    /**
     * Initialiaze page modal.
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
        $config = config($this->config);
        foreach ($config as $key => $val) {
            if (property_exists(get_called_class(), $key)) {
                $this->$key = $val;
            }
        }
    }
}
