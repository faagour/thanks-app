<?php

namespace App\Repository;

use App\Entity\Merci;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Merci>
 *
 * @method Merci|null find($id, $lockMode = null, $lockVersion = null)
 * @method Merci|null findOneBy(array $criteria, array $orderBy = null)
 * @method Merci[]    findAll()
 * @method Merci[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MerciRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Merci::class);
    }

//    /**
//     * @return Merci[] Returns an array of Merci objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Merci
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
