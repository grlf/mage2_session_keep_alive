<?php
namespace Greenleaf\SessionKeepAlive\Model;

use Greenleaf\SessionKeepAlive\Api\KeepAliveInterface;

class KeepAlive implements KeepAliveInterface
{
    public function refreshSession()
    {
        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['timeout_timer'] = microtime();
    }
}
