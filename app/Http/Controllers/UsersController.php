<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;

class UsersController extends Controller
{
    private $users;

    public function __construct(UserRepositoryInterface $users) {
        $this->users = $users;
    }

    public function index() {
        $users = $this->users->getAll();
        return $users;
    }

    public function getById($id) {
        $users = $this->users->getById($id);
        return $users;
    }
}
