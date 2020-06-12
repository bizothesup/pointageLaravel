<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployePointageRequest;
use App\Http\Requests\UpdateEmployePointageRequest;
use App\Repositories\EmployePointageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmployePointageController extends AppBaseController
{
    /** @var  EmployePointageRepository */
    private $employePointageRepository;

    public function __construct(EmployePointageRepository $employePointageRepo)
    {
        $this->employePointageRepository = $employePointageRepo;
    }

    /**
     * Display a listing of the EmployePointage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employePointages = $this->employePointageRepository->all();

        return view('employe_pointages.index')
            ->with('employePointages', $employePointages);
    }

    /**
     * Show the form for creating a new EmployePointage.
     *
     * @return Response
     */
    public function create()
    {
        return view('employe_pointages.create');
    }

    /**
     * Store a newly created EmployePointage in storage.
     *
     * @param CreateEmployePointageRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployePointageRequest $request)
    {
        $input = $request->all();

        $employePointage = $this->employePointageRepository->create($input);

        Flash::success('Employe Pointage saved successfully.');

        return redirect(route('employePointages.index'));
    }

    /**
     * Display the specified EmployePointage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employePointage = $this->employePointageRepository->find($id);

        if (empty($employePointage)) {
            Flash::error('Employe Pointage not found');

            return redirect(route('employePointages.index'));
        }

        return view('employe_pointages.show')->with('employePointage', $employePointage);
    }

    /**
     * Show the form for editing the specified EmployePointage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employePointage = $this->employePointageRepository->find($id);

        if (empty($employePointage)) {
            Flash::error('Employe Pointage not found');

            return redirect(route('employePointages.index'));
        }

        return view('employe_pointages.edit')->with('employePointage', $employePointage);
    }

    /**
     * Update the specified EmployePointage in storage.
     *
     * @param int $id
     * @param UpdateEmployePointageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployePointageRequest $request)
    {
        $employePointage = $this->employePointageRepository->find($id);

        if (empty($employePointage)) {
            Flash::error('Employe Pointage not found');

            return redirect(route('employePointages.index'));
        }

        $employePointage = $this->employePointageRepository->update($request->all(), $id);

        Flash::success('Employe Pointage updated successfully.');

        return redirect(route('employePointages.index'));
    }

    /**
     * Remove the specified EmployePointage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employePointage = $this->employePointageRepository->find($id);

        if (empty($employePointage)) {
            Flash::error('Employe Pointage not found');

            return redirect(route('employePointages.index'));
        }

        $this->employePointageRepository->delete($id);

        Flash::success('Employe Pointage deleted successfully.');

        return redirect(route('employePointages.index'));
    }
}
