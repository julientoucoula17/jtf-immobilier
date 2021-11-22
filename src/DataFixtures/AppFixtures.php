<?php

namespace App\DataFixtures;

use App\Entity\Ad;
//use Cocur\Slugify\Slugify;
use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('FR-fr');



        for($i=1;$i<=30;$i++){
            $title = $faker->sentence();
            $coverImage = $faker->imageUrl(1000,350);
            $introduction = $faker->paragraph(2);
            $content = '<p>' . join('</p><p>', $faker->paragraphs(5)). '</p>';

            $ad = new Ad();
            $ad->setTitle($title)
                ->setCoverImage($coverImage)
                ->setIntroduction($introduction)
                ->setContent($content)
                ->setPrice(mt_rand(40,200))
                ->setRooms(mt_rand(1,6));


            for ($j=1;$j<=mt_rand(2,5);$j++){
                $image = new Image();
                $image->setUrl($faker->imageUrl(1000,350))
                    ->setCaption($faker->sentence())
                    ->setAd($ad);
                $manager->persist($image);
            }




            $manager->persist($ad);


        }

        $manager->flush();
    }
}
