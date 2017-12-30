<?php

namespace Engine\Core\Auth;

use Engine\Helper\Cookie;

class Auth
{
    /**
     * @var bool
     */
    private $authorize = false;

    /**
     * @return bool
     */
    public function authorized()
    {
        if($_COOKIE['user_authorize']) return true;
    }

    /**
     * @param $id
     * @param $name
     */
    public function authorize($id, $name)
    {
        $this->authorize = true;

        Cookie::set('user_authorize', true);
        Cookie::set('user_hash', self::hashUser($id, $name));
    }

    /**
     * @return bool
     */
    public function unAuthorize()
    {
        $this->authorize = false;

        Cookie::delete('user_authorize');
        Cookie::delete('user_hash');

        return true;
    }

    /**
     * @param $id
     * @param $name
     * @return string
     */
    private static function hashUser($id, $name)
    {
        return md5($id . $name);
    }
}