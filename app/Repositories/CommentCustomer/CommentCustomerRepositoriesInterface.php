<?php

namespace App\Repositories\CommentCustomer;

interface CommentCustomerRepositoriesInterface
{
    public function index();

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
