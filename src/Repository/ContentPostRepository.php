<?php

namespace App\Repository;

use App\Entity\ContentPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContentPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContentPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContentPost[]    findAll()
 * @method ContentPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContentPostRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContentPost::class);
    }

    // /**
    //  * @return ContentPost[] Returns an array of ContentPost objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContentPost
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
