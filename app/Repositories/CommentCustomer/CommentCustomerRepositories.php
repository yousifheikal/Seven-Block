<?php

namespace App\Repositories\CommentCustomer;

use App\Models\CommentProject;

class CommentCustomerRepositories implements CommentCustomerRepositoriesInterface
{

    public function index()
    {
        // TODO: Implement index() method.
        return view('page_dashboard.CommentCustomer.index')->with('comments', CommentProject::all());

    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
