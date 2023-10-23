<?php

class TennisMatch
{
    protected $playerOne;

    public function playerOne()
    {
        return $this->playerOne;
    }

    public function score()
    {
        
    }

    // Could not be inherited
    private function hasWinner()
    {
        
    }

    // Could not be inherited
    private function hasAdvantage()
    {
        
    }

    // Could be inherited
    protected function isDeuce()
    {
        
    }
}