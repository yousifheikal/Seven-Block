<?php

namespace App\Http\Controllers\ProjectCustomer;

use App\Http\Controllers\Controller;
use App\Repositories\ProjectCustomer\ProjectCustomerRepositories;
use App\Repositories\Time_Sheet\projects\ProjectRepositoriesInterface;
use Illuminate\Http\Request;

class ProjectCustomerController extends Controller
{
    protected $projects;

    public function __construct(ProjectCustomerRepositories $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->projects->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return $this->projects->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        return $this->projects->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return $this->projects->destroy($id);
    }
}
