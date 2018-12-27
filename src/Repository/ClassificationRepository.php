<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Classification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Classification|null find($id, $lockMode = null, $lockVersion = null)
 * @method Classification|null findOneBy(array $criteria, array $orderBy = null)
 * @method Classification[]    findAll()
 * @method Classification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassificationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Classification::class);
    }
}
