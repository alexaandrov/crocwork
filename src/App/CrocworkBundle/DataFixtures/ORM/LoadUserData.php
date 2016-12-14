<?php

# src/App/CrocworkBundle/DataFixtures/ORM/LoadUsernData.php

namespace App\CrocworkBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use App\CrocworkBundle\Entity\User;

class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $user1 = new User;
        $user1->setFirstname('Абрам');
        $user1->setLastname('Линкольн');
        $user1->setMiddlename('Абрамович');
        $user1->setOrganization($em->merge($this->getReference('organization-org1')));
        $user1->setBirthday(new \DateTime('-3453 days'));
        $user1->setInn(2837485746811);
        $user1->setSnils(374638273612);

        $user2 = new User;
        $user2->setFirstname('Мак');
        $user2->setLastname('Ел');
        $user2->setMiddlename('Ложкой');
        $user1->setOrganization($em->merge($this->getReference('organization-org2')));
        $user2->setBirthday(new \DateTime('-1200 days'));
        $user2->setInn(8234987434883);
        $user2->setSnils(324234234234);

        $user3 = new User;
        $user3->setFirstname('Архидея');
        $user3->setLastname('Лильева');
        $user3->setMiddlename('Ромашкович');
        $user1->setOrganization($em->merge($this->getReference('organization-org3')));
        $user3->setBirthday(new \DateTime('-365 days'));
        $user3->setInn(45645645645646);
        $user3->setSnils(2342342342342);

        $em->persist($user1);
        $em->persist($user2);
        $em->persist($user3);
        $em->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}