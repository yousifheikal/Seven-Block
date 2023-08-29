<?php

namespace App\Repositories\Product;

interface ProductRepositoriesInterface
{
    public function index();

    public function create();

    public function edit($id);

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
