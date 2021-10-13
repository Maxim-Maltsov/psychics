<?php


namespace controller;

require(__DIR__ . '/../model/Game.php');
require (__DIR__ . '/../model/SessStorage.php');
require (__DIR__ . '/../model/Psychic.php');

use model\Game;
use model\SessStorage;
use model\Psychic;


class Controller {

    private $storage;

    public function __construct() {

        $this->storage = new SessStorage();
    }

    public function startGame() {

        $game = new Game();
        $this->storage->saveGame($game);

        echo $this->render(__DIR__ . '/../view/startGame.php', [
        ]);
    }

    public function psychicsMove() {

        $game = $this->storage->loadGame();
        $game->askPsychicsGenerateNumber();
        $this->storage->saveGame($game);

        echo $this->render(__DIR__ . '/../view/gameRound.php', [
            'game' => $game
        ]);
    }

    public function userMove($userNumber) {

        $game = $this->storage->loadGame();
        $game->calculatePsychicsRating($userNumber);
        $this->storage->saveGame($game);

        header( "Location:" . $_SERVER['REQUEST_URI'], true, 303 );
        exit();
    }

    public function render($fileName, $params) {
        extract($params);
        ob_start();
        require($fileName);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}