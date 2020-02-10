<?php

namespace App\Repository;

use App\Entity\BaseArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BaseArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaseArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaseArticle[]    findAll()
 * @method BaseArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaseArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaseArticle::class);
    }

    // /**
    //  * @return BaseArticle[] Returns an array of BaseArticle objects
    //  */
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
    public function findOneBySomeField($value): ?BaseArticle
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
