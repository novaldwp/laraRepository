<?php

namespace App\Repositories\Eloquent;
use App\Repositories\UserRepositoryInterface;
use App\User;

Class UserRepository implements UserRepositoryInterface {
    private $model;

    public function __construct(User $model) {
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->all();
    }

    public function getById($id){
        return $this->model->find($id);
    }

    public function create(array $attributes){
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes){
        $user =  $this->model->findOrFail($id);
        $user->update($attributes);

        return $user;
    }

    public function delete($id){
        return $this->getById($id)->delete();
    }
}
