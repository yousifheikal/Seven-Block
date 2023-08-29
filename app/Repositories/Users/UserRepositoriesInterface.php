<?php

namespace App\Repositories\Users;

interface UserRepositoriesInterface
{
    public function index();

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
