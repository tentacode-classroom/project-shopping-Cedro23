<?php

namespace App\Repository;

use App\Entity\Balisong;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Balisong|null find($id, $lockMode = null, $lockVersion = null)
 * @method Balisong|null findOneBy(array $criteria, array $orderBy = null)
 * @method Balisong[]    findAll()
 * @method Balisong[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BalisongRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Balisong::class);
    }

//    /**
//     * @return Balisong[] Returns an array of Balisong objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Balisong
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
