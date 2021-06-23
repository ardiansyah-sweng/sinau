<?php

class Rooms
{
    public $maxAvailabeRooms = 250;

    function availableRooms($rooms){
        if ($rooms == $this->maxAvailabeRooms){
            return 0;
        }
        return TRUE;
    }
}

$cekRoom = new Rooms;
echo $cekRoom->availableRooms(250);