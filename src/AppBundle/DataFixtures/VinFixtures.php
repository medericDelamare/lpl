<?php

namespace AppBundle\DataFixtures;


use AppBundle\Entity\Vin\TypeVin;
use AppBundle\Entity\Vin\Vin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class VinFixtures extends Fixture implements OrderedFixtureInterface
{
    private $types = [
        [
            'code' => 'vin_blanc',
            'nom' => 'Vin Blanc'
        ],
        [
            'code' => 'vin_rouge',
            'nom' => 'Vin Rouge'
        ],
        [
            'code' => 'vin_rose',
            'nom' => 'Vin Rosé'
        ],
        [
            'code' => 'champagne',
            'nom' => 'Champagne'
        ],
        [
            'code' => 'pichet',
            'nom' => 'Vin au Pichet'
        ]
    ];

    private $vins = [
        [
            'nom' => 'Sauvignon de touraine AOC "Les Gênets"',
            'prix1' => 12.00,
            'prix2' => 7,
            'type' => 'vin_blanc'
        ],
        [
            'nom' => 'Muscadet sur lie AOC "La Sancive"',
            'prix1' => 14.00,
            'prix2' => 8,
            'type' => 'vin_blanc'
        ],
        [
            'nom' => 'Riesling AOC "Klipfel"',
            'prix1' => 17.00,
            'prix2' => 9.50,
            'type' => 'vin_blanc'
        ],
        [
            'nom' => 'Blanc sauvignon',
            'prix1' => 10.00,
            'prix2' => null,
            'type' => 'vin_blanc'
        ],
        [
            'nom' => 'Rosé de Loire AOC "Sourire"',
            'prix1' => 12.00,
            'prix2' => 8.50,
            'type' => 'vin_rose'
        ],
        [
            'nom' => 'Côtes de Provence AOC "Le village"',
            'prix1' => 14.50,
            'prix2' => 10.00,
            'type' => 'vin_rose'
        ],
        [
            'nom' => 'Tavel AOC "Cuvée Royal"',
            'prix1' => 20.50,
            'prix2' => 14.50,
            'type' => 'vin_rose'
        ],
        [
            'nom' => 'Rosé cinsault',
            'prix1' => 10.00,
            'prix2' => null,
            'type' => 'vin_rose'
        ],
        [
            'nom' => 'Bordeaux AOC "Les Puits st Martin "',
            'prix1' => 12.00,
            'prix2' => 7.00,
            'type' => 'vin_rouge'
        ],
        [
            'nom' => 'Bordeaux AOC Supérieur "Chateau de Braque"',
            'prix1' => 16.00,
            'prix2' => null,
            'type' => 'vin_rouge'
        ],
        [
            'nom' => '1ères côtes de blayes AOC "Chateau Mazerolles"',
            'prix1' => 19.00,
            'prix2' => 12.50,
            'type' => 'vin_rouge'
        ],
        [
            'nom' => 'Saint Nicolas de Bourgeuil AOC "L\'Aulnay"',
            'prix1' => 17.00,
            'prix2' => 11.00,
            'type' => 'vin_rouge'
        ],
        [
            'nom' => 'Saumur Champigny AOC "Les Loges"',
            'prix1' => 16.00,
            'prix2' => 10.50,
            'type' => 'vin_rouge'
        ],
        [
            'nom' => 'Côtes du rhone "Bouquet du comtat"',
            'prix1' => 14.00,
            'prix2' => 8.50,
            'type' => 'vin_rouge'
        ],
        [
            'nom' => 'Rouge merlot',
            'prix1' => 10.00,
            'prix2' => null,
            'type' => 'vin_rouge'
        ],
        [
            'nom' => 'Champagne AOC "Nicolas Feuillatte"',
            'prix1' => 40.00,
            'prix2' => null,
            'type' => 'champagne'
        ],
        [
            'nom' => 'Royal st charles',
            'prix1' => 15.00,
            'prix2' => null,
            'type' => 'champagne'
        ],
        [
            'nom' => 'Cidre fermier de la region',
            'prix1' => 10.00,
            'prix2' => null,
            'type' => 'champagne'
        ],
        [
            'nom' => 'Verre 12cl (Rouge, Rosé, Blanc)',
            'prix1' => 2.00,
            'prix2' => null,
            'type' => 'pichet'
        ],
        [
            'nom' => '1/4 Vin 25cl (Rouge, Rosé, Blanc)',
            'prix1' => 3.00,
            'prix2' => null,
            'type' => 'pichet'
        ],
        [
            'nom' => '1/2 Vin 25cl (Rouge, Rosé, Blanc)',
            'prix1' => 5.00,
            'prix2' => null,
            'type' => 'pichet'
        ],
        [
            'nom' => '1/4 Cidre 25cl',
            'prix1' => 2.50,
            'prix2' => null,
            'type' => 'pichet'
        ]
    ];
    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach ($this->types as $type){
            dump($type);
            $typeVin = new TypeVin();
            $typeVin
                ->setCode($type['code'])
                ->setNom($type['nom'])
                ->setPosition($i);
            $manager->persist($typeVin);
            $i++;
        }
        $manager->flush();

        $i = 0;
        foreach ($this->vins as $vin){
            $instanceVin = new Vin();
            $instanceVin
                ->setPosition($i)
                ->setNom($vin['nom'])
                ->setAffiche(true)
                ->setPrix1($vin['prix1'])
                ->setPrix2($vin['prix2'])
                ->setType($manager->getRepository(TypeVin::class)->findOneByCode($vin['type']));
            $manager->persist($instanceVin);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}