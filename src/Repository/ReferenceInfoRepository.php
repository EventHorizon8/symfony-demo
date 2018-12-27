<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\ReferenceInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReferenceInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferenceInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferenceInfo[]    findAll()
 * @method ReferenceInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferenceInfoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferenceInfo::class);
    }
}
