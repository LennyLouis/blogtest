<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //$faker = Factory::create();

//        // Créer 3 catégorie fake
//        for($i=1;$i<=3;$i++) {
//
//            $category = new Category();
//            /*$category->setTitle($faker->sentence())
//                     ->setDescription($faker->paragraph());*/
//            $category->setTitle("Un titre")
//                     ->setDescription("Une description");
//
//            $manager->persist($category);
//            // Créer entre 4 et 6 articles fake
//            for($j=1; $j <= mt_rand(4,6); $j++){
//                $article = new Article();
//
//                /*$content = '<p>' . join("</p><p>", $faker->paragraphs(5)) . '</p>';
//
//                $article->setTitle($faker->sentence())
//                        ->setContent($content)
//                        ->setImage($faker->imageUrl())
//                        ->setCreatedAt($faker->dateTimeBetween('-6 months'))
//                        ->setCategory($category);*/
//
//                $article->setTitle("Mon titre")
//                        ->setContent("Mon contenue")
//                        ->setImage("http://www.google.fr/")
//                        ->setCreatedAt(new \DateTime())
//                        ->setCategory($category);
//
//                $manager->persist($article);
//
//                // Créer entre 4 et 10 commentaire fake
//                for($k=1; $k<=mt_rand(4,10); $k++){
//                    $comment = new Comment();
//
//                    /*$days = (new \DateTime())->diff($article->getCreatedAt())->days;
//
//                    $content = '<p>' . join("</p><p>", $faker->paragraphs(2)) . '</p>';
//
//                    $comment->setAuthor($faker->name())
//                        ->setContent($content)
//                        ->setCreatedAt($faker->dateTimeBetween('-' . $days . ' days'))
//                        ->setArticle($article);*/
//
//                    $comment->setAuthor("Un auteur")
//                        ->setContent("Un commentaire")
//                        ->setCreatedAt(new \DateTime())
//                        ->setArticle($article);
//
//                    $manager->persist($comment);
//                }
//            }
//
//        }

        /*$manager->flush();

        //$em = $this->getDoctrine()->getManager();
        $manager->getConnection()->connect();
        $connected = $manager->getConnection()->isConnected();

        dd($connected);*/
    }
}
