<?php

namespace ConnectFour\Player;

class SingleMovePlayer implements PlayerInterface
{

    /**
     * @var int
     */
    private $nextMove = 0;

    /**
     * @param int $move
     */
    public function __construct($move)
    {
        $this->nextMove = $move;
    }

    /**
     * {@inheritdoc}
     */
    public function move($grid)
    {
        return $this->nextMove;
    }
}
