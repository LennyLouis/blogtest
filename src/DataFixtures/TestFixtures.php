<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TestFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $category = new Category();
        $category->setTitle("Test Cat")
            ->setDescription("ca c est la description");

        $manager->persist($category);

        $manager->flush();
    }
}
