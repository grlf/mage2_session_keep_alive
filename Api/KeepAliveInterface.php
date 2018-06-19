<?php
namespace Greenleaf\SessionKeepAlive\Api;

interface KeepAliveInterface
{

    /**
     * @api
     * @return boolean
     */
    public function refreshSession();

}
