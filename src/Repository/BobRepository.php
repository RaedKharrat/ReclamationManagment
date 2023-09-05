<?php

namespace App\Repository;

use App\Entity\Bob;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bob>
 *
 * @method Bob|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bob|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bob[]    findAll()
 * @method Bob[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bob::class);
    }

//    /**
//     * @return Bob[] Returns an array of Bob objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bob
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
