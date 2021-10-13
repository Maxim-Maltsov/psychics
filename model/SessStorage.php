<?php

namespace model;

require (__DIR__ . '/../model/Storage.php');

class SessStorage extends Storage {


    public function __construct() {

        session_start();
    }

    public function saveGame($game)
    {

        $_SESSION['game'] = serialize($game);
    }

    public function loadGame()
    {

        return unserialize($_SESSION['game']);
    }

    public function clearStorage() {
        unset($_SESSION);
        session_destroy();
    }
}
