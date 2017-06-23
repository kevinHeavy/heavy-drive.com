<?php
/**
 * Created by PhpStorm.
 * User: hd
 * Date: 23/06/17
 * Time: 11:59
 */

namespace AppBundle\DataFixtures\ORM\Reference;

use AppBundle\DataFixtures\BaseFixtureLoader;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Service;

class ServiceData extends BaseFixtureLoader implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $service = new Service();
        $service->setName($this->faker->name);
        $service->setCreatedAt($this->faker->dateTime);
        $service->setDescription($this->faker->text);
        $service->setEnabled(true);
        $service->setAgency(null);

        $manager->persist($service);
        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}