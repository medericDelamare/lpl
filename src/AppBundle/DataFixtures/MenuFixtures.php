<?php


namespace AppBundle\DataFixtures;


use AppBundle\Entity\CategorieMenu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class MenuFixtures extends Fixture implements OrderedFixtureInterface
{
    private $categorieMenu = [
        [
            'code' => 'menu_evenement',
            'nom' => 'Menu Evênement'
        ]
    ];

    private $plats = [

    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->categorieMenu as $categorie){
            $instanceCategorie = new CategorieMenu();
            $instanceCategorie
                ->setNom($categorie['nom'])
                ->setCode($categorie['code']);
            $manager->persist($instanceCategorie);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}