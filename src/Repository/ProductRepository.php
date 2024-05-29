<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

<<<<<<< HEAD
    //    /**
    //     * @return Product[] Returns an array of Product objects
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

    /**
     * Find all producs having a value above the specified one.
     *
     * @return Product[] Returns an array of Product objects
     */
    public function findByMinimumValue($value): array
=======
    /**
     * Find all products having a value above the specified one.
     *
     * @param int $value The minimum value to filter products by.
     *
     * @return Product[] Returns an array of Product objects.
     */
    public function findByMinimumValue(int $value): array
>>>>>>> 1152db6 (Reinitializing and reconnecting to GitHub repository)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.value >= :value')
            ->setParameter('value', $value)
            ->orderBy('p.value', 'ASC')
            ->getQuery()
<<<<<<< HEAD
            ->getResult()
        ;
    }
    /**
 * Find all producs having a value above the specified one with SQL.
 *
 * @return [][] Returns an array of arrays (i.e. a raw data set)
 */
    public function findByMinimumValue2($value): array
=======
            ->getResult();
    }

    /**
     * Find all products having a value above the specified one using SQL.
     *
     * @param int $value The minimum value to filter products by.
     *
     * @return array<array<string, mixed>> Returns an array of associative arrays (i.e. a raw data set).
     */
    public function findByMinimumValue2(int $value): array
>>>>>>> 1152db6 (Reinitializing and reconnecting to GitHub repository)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM product AS p
            WHERE p.value >= :value
            ORDER BY p.value ASC
        ';

        $resultSet = $conn->executeQuery($sql, ['value' => $value]);

        return $resultSet->fetchAllAssociative();
    }

    //    public function findOneBySomeField($value): ?Product
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
