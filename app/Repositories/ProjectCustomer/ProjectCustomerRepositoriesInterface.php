<?php

namespace App\Repositories\ProjectCustomer;

interface ProjectCustomerRepositoriesInterface
{
    public function index();

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
