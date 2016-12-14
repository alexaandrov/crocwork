<?php
namespace App\CrocworkBundle\Entity;

use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class File
{
    /**
     * File path
     *
     * @var string
     *
     * @ORM\Column(type="text", length=255, nullable=false)
     */
    protected $path;

    /**
     * Uploaded file
     *
     * @var file
     *
     * @Assert\File(
     *     maxSize = "1024k",
     *     mimeTypes = {"application/xml", "text/xml"},
     *     mimeTypesMessage = "Please upload a valid XML"
     * )
     */
    protected $file;

    /**
     * Checks whether a file exists
     * and save data to $this->file if true
     *
     * @param $path
     * @return bool
     */
    private function checkFile($path)
    {
        if (file_exists($path)) {
            $this->file = simplexml_load_file($path);
            return true;
        } else {
            throw new FileException('');
        }
    }

    /**
     * Upload data from xml file to database
     *
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if ($this->checkFile($this->path)) {
            // Upload data to organization
            foreach ($this->file->org as $org) {
                $organization = new Organization();
                $organization->setDisplayName($org['displayName']);
                $organization->setOgrn($org['ogrn']);
                $organization->setOktmo($org['oktmo']);

                // Upload data to users
                foreach ($org->user as $user) {
                    $user = new User();
                    $user->setFirstname($user['firstname']);
                    $user->setLastname($user['lastname']);
                    $user->setMiddlename($user['middlename']);
                    $user->setInn($user['inn']);
                    $user->setSnils($user['snils']);
                    $user->setOrganization($organization->getId());
                }
            }
        } else {
            return;
        }
    }
}