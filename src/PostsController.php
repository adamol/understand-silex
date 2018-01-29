<?php

use Symfony\Component\HttpFoundation\JsonResponse;

class PostsController
{
    protected $repo;

    public function __construct(PostsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function indexAction()
    {
        return new JsonResponse($this->repo->findAll());
    }
}
