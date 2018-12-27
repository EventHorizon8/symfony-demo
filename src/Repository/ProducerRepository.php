<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Producer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Producer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Producer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Producer[]    findAll()
 * @method Producer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProducerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Producer::class);
    }
}
