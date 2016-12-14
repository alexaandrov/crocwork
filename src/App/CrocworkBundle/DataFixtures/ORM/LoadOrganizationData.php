<?php

# src/App/CrocworkBundle/DataFixtures/ORM/LoadOrganizationData.php

namespace App\CrocworkBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use App\CrocworkBundle\Entity\Organization;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $org1 = new Organization();
        $org1->setDisplayName('ООО Аеро');
        $org1->setOgrn(2837463728123);
        $org1->setOktmo(84736253741);

        $org2 = new Organization();
        $org2->setDisplayName('ООО Ривела');
        $org2->setOgrn(23423423423423);
        $org2->setOktmo(634683823489);

        $org3 = new Organization();
        $org3->setDisplayName('ООО Милена');
        $org3->setOgrn(28947528947528);
        $org3->setOktmo(234247812772);

        $em->persist($org1);
        $em->persist($org2);
        $em->persist($org3);
        $em->flush();

        $this->addReference('organization-org1', $org1);
        $this->addReference('organization-org2', $org1);
        $this->addReference('organization-org3', $org1);
    }

    public function getOrder()
    {
        return 1;
    }
}