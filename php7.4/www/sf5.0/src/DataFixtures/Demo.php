<?php

namespace App\DataFixtures;

use App\Entity\DemoReference;
use App\Repository\DemoReferenceRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Demo extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $ref=new DemoReference();
        $ref->setName('Ref Value');
        $manager->persist($ref);



        $names=['uday','bijay','sanjay'];
        foreach($names as $name){
            $obj=new \App\Entity\Demo();
            $obj->setName(ucfirst($name).' Shiwakoti');
            $obj->setRefrence($ref);
            $manager->persist($obj);

        }
        $manager->flush();
    }
}
