<?php

class PostsRepository
{
    public function findAll()
    {
        return [
            [
                'title' => 'First',
                'body' => 'foo'
            ],
            [
                'title' => 'Second',
                'body' => 'bar'
            ],
        ];
    }
}