<?php


use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRespositoryInterface
{
    protected $model;

    public function __construct(Model $model )
    {
        $this->model = $model;
    }

    public function find()
    {
        // TODO: Implement find() method.
    }
}