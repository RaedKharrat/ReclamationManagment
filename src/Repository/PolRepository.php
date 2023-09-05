<?php

namespace App\Repository;

use App\Entity\Pol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pol>
 *
 * @method Pol|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pol|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pol[]    findAll()
 * @method Pol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pol::class);
    }

//    /**
//     * @return Pol[] Returns an array of Pol objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pol
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
