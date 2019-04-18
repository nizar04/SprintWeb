<?php

namespace CommandesBundle\Repository;
use CommandesBundle\Entity\LigneCommande;
use ProduitsBundle\Entity\Produit;
/**
 * ligneCommandeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ligneCommandeRepository extends \Doctrine\ORM\EntityRepository
{
    public function findPanier($idUser)
    {
        $query=$this->getEntityManager()->createQuery("SELECT c from CommandesBundle:LigneCommande c WHERE (c.idUser =:idUser) ")->setParameter(':idUser',$idUser);
        return $query->getResult();
    }


    public function jointure()
    {
<<<<<<< HEAD
        $query=$this->getEntityManager()->createQuery("SELECT c.id from CommandesBundle:LigneCommande c  join ProduitsBundle::Produit p on c.produit.id_produit id_produit =p.id_produit ");
=======
        $query=$this->getEntityManager()->createQuery("SELECT c.id from CommandesBundle:LigneCommande c  join ProduitsBundle::Produit p on l.idProduit =p.idProduit ");
>>>>>>> 1453b8fe36090e5d7587461cd7c31b60229a01ab
        return $query->getResult();
    }
    public function delete($id)
    {
        $query=$this->getEntityManager()->createQuery('DELETE CommandesBundle:LigneCommande p where p.id =:id')->setParameter('id',$id);
        $query->execute();
    }

    public function chercherid($idProduit)
    {
<<<<<<< HEAD
        $query=$this->getEntityManager()->createQuery("SELECT c from CommandesBundle:LigneCommande c WHERE (c.produit =:idProduit) ")->setParameter(':idProduit',$idProduit);
        return $query->getResult();
      }
=======
        $query=$this->getEntityManager()->createQuery("SELECT c from CommandesBundle:LigneCommande c WHERE (c.idProduit =:idProduit) ")->setParameter(':idProduit',$idProduit);
        return $query->getResult();
    }
>>>>>>> 1453b8fe36090e5d7587461cd7c31b60229a01ab
    public function findProduit()
    {
        $query=$this->getEntityManager()->createQuery("SELECT c from ProduitsBundle:Produit c");
        return $query->getResult();
    }
}
