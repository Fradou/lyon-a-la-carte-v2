<?php

namespace App\Repository;

use App\Entity\Circuit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CircuitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Circuit::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function circuitSearching($data)
    {
        $qb= $this->createQueryBuilder('c');
        $qb->select('c.id', 'c.name', 'c.category', 'c.description', 'c.cost'); // 'AVG(n.rating) as avr');
        //    $qb->select('c', 'AVG(n.rating) as avr');
        $search = ['category'];
        foreach ($search as $criteria)
        {
            if(isset($data[$criteria])){
                $qb->andWhere('c.'.$criteria.' = :'.$criteria.'')->setParameter($criteria, $data[$criteria]);
            }
        }

        $searchadress = 'postalcode';
        if (isset($data[$searchadress]))
        {
            /* $i=0;
             $req = "";
             foreach($data[$searchadress] as $postcode){
                 if ($i > 0){
                     $req.= " OR ";
                 }
                 $req.='l.'.$searchadress.'= :item'.$i.'';
                 $qb->setParameter('item'.$i, $postcode);
                 $i++;
             }
             $qb->andWhere($req);
             $qb->innerJoin('c.locations', 'l'); */
            $qb->andWhere('l.'.$searchadress.' IN (:addressarray)');
            $qb->setParameter('addressarray', $data[$searchadress]);
            $qb->innerJoin('c.locations', 'l');
            /*    $qb->add('where', $qb->expr()->in('l.'.$searchadress, $data[$searchadress]));
                $qb->innerJoin('c.locations', 'l'); */
        }

//        $searchrating = "notation";
//        if (isset($data[$searchrating])){
//            $qb->having('avr >= :notation');
//            $qb->setParameter('notation', $data[$searchrating]);
//        }
//        $qb->innerJoin('c.circuitnotations', 'n');


        return $qb->getQuery()->getResult();
    }
}
