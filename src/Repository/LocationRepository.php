<?php

namespace App\Repository;

use App\Entity\Location;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class LocationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Location::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('l')
            ->where('l.something = :value')->setParameter('value', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function searchloca($categories, $localisations){
        $qb = $this->createQueryBuilder('l');
        $qb->select('l');
        if(isset($categories) && $categories != [""]){
            $i=0;
            $req='';
            foreach($categories as $category){
                if($i>0){
                    $req.=' OR ';
                }
                $req.= 'l.type = :catego'.$i;
                $qb->setParameter('catego'.$i, $category);
                $i++;
            }
            $qb->where($req);
        }
        if(isset($localisations) && $localisations != []){
            $i=0;
            $req='';
            foreach($localisations as $localisation){
                if($i>0){
                    $req.=' OR ';
                }
                $req.= 'l.postalCode = :local'.$i;
                $qb->setParameter('local'.$i, $localisation);
                $i++;
            }
            $qb->andWhere($req);
        }

        return $qb->getQuery()->getResult();
    }


    public function getAllPostalCodes(){
        $qb = $this->createQueryBuilder('l')
            ->select('DISTINCT l.postalCode')
            ->orderBy('l.postalCode')
            ->getQuery();
        return $qb->getResult();
    }

    public function getAllTypes(){
        $qb = $this->createQueryBuilder('l')
            ->select('DISTINCT l.type')
            ->orderBy('l.type')
            ->getQuery();
        return $qb->getResult();
    }
}
