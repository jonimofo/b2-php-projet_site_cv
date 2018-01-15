<?php
namespace AppBundle\Repository;
use AppBundle\Entity\Article;
use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository {

    public function getValidComments(Article $article){
        $queryBuilder = $this->createQueryBuilder('cqb')
            ->where('cqb.is_valid = 1')
            ->andWhere('cqb.article = :post_id')
            ->setParameter('post_id', $article->getIdArticle())
            ->getQuery();
        return $queryBuilder->getResult();
    }
}