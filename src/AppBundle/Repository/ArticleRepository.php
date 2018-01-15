<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 13/01/18
 * Time: 10:37
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ArticleRepository extends EntityRepository {

    public function sortByNewestFirst(){
        return $this->findBy([], ['creationDate' => 'DESC']);
    }

}