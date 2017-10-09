<?php

namespace HTL3R\IceCream;

$myIce[] = new IceCup(
    "Super Schokoterminator",
    "Schokostreusel",
    2,
    5
);

$myIce[] = new IceLasagne(
    "Mega Vanille Schlachtschiff",
    "Vanillekugeln",
    15,
    30,
    10
);

foreach($myIce as $item){
    /* @var $item IceInterface */
    echo $item. " / ".$item->getVolume();
}