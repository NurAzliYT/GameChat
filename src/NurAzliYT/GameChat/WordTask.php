<?php

namespace NurAzliYT\GameChat;

use pocketmine\scheduler\Task;
use NurAzliYT\GameChat\Main;

class WordTask extends Task {

    public function onRun(): void {
        Main::getInstance()->scrambleWord();
    }
}
