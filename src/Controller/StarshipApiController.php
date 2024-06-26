<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $starships =
        [

            $starships = [

                    new Starship(1, 'USS BuckBeak (NCC-0003)', 'Explorer', 'Hagrid', 'under construction'),
                    new Starship(2, 'USS Dumbledoor (NCC-0003)', 'Fighter', 'Harry Kirk', 'stolen'),
                    new Starship(3, 'USS Gryffindor (NCC-0004)', 'Explorer', 'James T. Potter', 'in service'),
                    new Starship(4, 'USS Slytherin (NCC-0005)', 'Science Vessel', 'Severus Spock', 'in service'),
                    new Starship(5, 'USS Ravenclaw (NCC-0006)', 'Research Vessel', 'Luna Uhura', 'on mission'),
                    new Starship(6, 'USS Hufflepuff (NCC-0007)', 'Cargo Ship', 'Cedric Sulu', 'under maintenance'),
                    new Starship(7, 'USS Phoenix (NCC-0008)', 'Battleship', 'Albus Janeway', 'destroyed'),
                    new Starship(8, 'USS Patronus (NCC-0009)', 'Diplomatic Ship', 'Hermione Picard', 'on diplomatic mission'),
                    new Starship(9, 'USS Basilisk (NCC-0010)', 'Stealth Ship', 'Draco Worf', 'cloaked'),
                    new Starship(10, 'USS PhoenixFeather (NCC-0011)', 'Medical Ship', 'Poppy McCoy', 'in service'),
                    new Starship(11, 'USS Muggleborn (NCC-0012)', 'Transport', 'Arthur Chekov', 'on mission'),
                    new Starship(12, 'USS Horcrux (NCC-0013)', 'Experimental', 'Tom Riddle', 'lost'),

        ]



        ];

        return $this->json($starships);
    }
}