<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Movie;

/**
 * Class LoadMovieData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadMovieData implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $movie1 = new Movie();
        $movie1->setTitle('12 Angry Men');
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle('Pulp Fiction');
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle('Forrest Gump');
        $manager->persist($movie3);

        $manager->flush();
    }
}
