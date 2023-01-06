<?php

namespace App\Repository;

use App\Entity\ReseauxSociaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReseauxSociaux>
 *
 * @method ReseauxSociaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReseauxSociaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReseauxSociaux[]    findAll()
 * @method ReseauxSociaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReseauxSociauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReseauxSociaux::class);
    }

    public function save(ReseauxSociaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReseauxSociaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ReseauxSociaux[] Returns an array of ReseauxSociaux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReseauxSociaux
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
