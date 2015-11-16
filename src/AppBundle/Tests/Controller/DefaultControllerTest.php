<?php

namespace AppBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

/**
 * Class DefaultControllerTest
 * @package AppBundle\Tests\Controller
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * Index page test
     */
    public function testIndex()
    {
        $this->loadFixtures(array(
            'AppBundle\DataFixtures\ORM\LoadMovieData',
        ));

        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Movies Application', $crawler->filter('#container h1')->text());

        $this->assertTrue($crawler->filter('html:contains("12 Angry Men")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("Pulp Fiction")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("Forrest Gump")')->count() > 0);
    }
}
