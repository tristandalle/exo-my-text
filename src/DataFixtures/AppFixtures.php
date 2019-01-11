<?php

namespace App\DataFixtures;

use App\Entity\Users;
use App\Entity\Posts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new Users();
        $user
            ->setPseudo('Lily')
            ->setUserMail('lilymail@lily.com');

        $manager->persist($user);

        $post = new Posts();
        $post
            ->setTitle('Mon premier post')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ullamcorper tellus. Vivamus non magna id ex venenatis ultrices imperdiet vitae erat. Sed rutrum enim at urna viverra tempus. Pellentesque fringilla nec sapien imperdiet pulvinar. In hac habitasse platea dictumst. Ut ac luctus odio. Curabitur luctus pretium gravida. Nam luctus, metus at aliquam luctus, mauris neque mollis enim, a tincidunt ante erat sed sem. Proin venenatis purus malesuada, aliquet augue in, pretium justo.')
            ->setUserId('1')
            ->setCreatedAt(new \DateTime());

        $manager->persist($post);


        $manager->flush();
    }
}
