<?php
namespace model;

abstract class Storage {


    abstract public function saveGame($game);
    abstract public function loadGame();
    abstract public function clearStorage();
}


