<?php

namespace App\Repositories\Category;

interface CategoryRepositoriesInterface
{
    public function index();

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
