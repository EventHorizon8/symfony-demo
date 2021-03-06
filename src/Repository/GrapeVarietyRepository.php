<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\GrapeVariety;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GrapeVariety|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrapeVariety|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrapeVariety[]    findAll()
 * @method GrapeVariety[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrapeVarietyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GrapeVariety::class);
    }
}
