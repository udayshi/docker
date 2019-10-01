<?php

namespace App\Repository;

use Lowe\PingBundle\Security\PingUserRepository;

class UserRepository extends \Doctrine\ORM\EntityRepository implements PingUserRepository
{
    /**
     * Find user by ping subject
     *
     * @param $subject
     *
     * @return mixed
     */
    public function findByPingSubject($subject)
    {
        return $this->findOneBy(['email' => $subject,]);
    }

    /**
     * @param $field
     * @param $value
     *
     * @return mixed
     */
    public function findByPingField($field, $value)
    {
        return $this->findOneBy([$field => $value,]);
    }
}