<?php

namespace App\DataFixtures;

use App\Entity\Content;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Validator\Constraints\Date;

class ContentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i=0;$i<50;$i++) {
            $content = new Content();
            $content->setTitle($faker->sentence());
            $content->setArticle($faker->realText(1000));
            $content->setCreatedAt(new \DateTime('now'));
            $manager->persist($content);
        }

        $manager->flush();
    }
}
