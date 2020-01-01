<?php

declare(strict_types=1);

namespace App\Infra\Repository;

use App\Domain\Repository\AliasRepositoryInterface;
use App\Domain\VirtualAliases;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AliasRepository extends ServiceEntityRepository implements AliasRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VirtualAliases::class);
    }
}