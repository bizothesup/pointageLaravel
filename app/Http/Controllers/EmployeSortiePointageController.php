<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeSortiePointageRequest;
use App\Http\Requests\UpdateEmployeSortiePointageRequest;
use App\Repositories\EmployeSortiePointageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmployeSortiePointageController extends AppBaseController
{
    /** @var  EmployeSortiePointageRepository */
    private $employeSortiePointageRepository;

    public function __construct(EmployeSortiePointageRepository $employeSortiePointageRepo)
    {
        $this->employeSortiePointageRepository = $employeSortiePointageRepo;
    }

    /**
     * Display a listing of the EmployeSortiePointage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employeSortiePointages = $this->employeSortiePointageRepository->all();

        return view('employe_sortie_pointages.index')
            ->with('employeSortiePointages', $employeSortiePointages);
    }

    /**
     * Show the form for creating a new EmployeSortiePointage.
     *
     * @return Response
     */
    public function create()
    {
        return view('employe_sortie_pointages.create');
    }

    /**
     * Store a newly created EmployeSortiePointage in storage.
     *
     * @param CreateEmployeSortiePointageRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeSortiePointageRequest $request)
    {
        $input = $request->all();

        $employeSortiePointage = $this->employeSortiePointageRepository->create($input);

        Flash::success('Employe Sortie Pointage saved successfully.');

        return redirect(route('employeSortiePointages.index'));
    }

    /**
     * Display the specified EmployeSortiePointage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeSortiePointage = $this->employeSortiePointageRepository->find($id);

        if (empty($employeSortiePointage)) {
            Flash::error('Employe Sortie Pointage not found');

            return redirect(route('employeSortiePointages.index'));
        }

        return view('employe_sortie_pointages.show')->with('employeSortiePointage', $employeSortiePointage);
    }

    /**
     * Show the form for editing the specified EmployeSortiePointage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeSortiePointage = $this->employeSortiePointageRepository->find($id);

        if (empty($employeSortiePointage)) {
            Flash::error('Employe Sortie Pointage not found');

            return redirect(route('employeSortiePointages.index'));
        }

        return view('employe_sortie_pointages.edit')->with('employeSortiePointage', $employeSortiePointage);
    }

    /**
     * Update the specified EmployeSortiePointage in storage.
     *
     * @param int $id
     * @param UpdateEmployeSortiePointageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeSortiePointageRequest $request)
    {
        $employeSortiePointage = $this->employeSortiePointageRepository->find($id);

        if (empty($employeSortiePointage)) {
            Flash::error('Employe Sortie Pointage not found');

            return redirect(route('employeSortiePointages.index'));
        }

        $employeSortiePointage = $this->employeSortiePointageRepository->update($request->all(), $id);

        Flash::success('Employe Sortie Pointage updated successfully.');

        return redirect(route('employeSortiePointages.index'));
    }

    /**
     * Remove the specified EmployeSortiePointage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeSortiePointage = $this->employeSortiePointageRepository->find($id);

        if (empty($employeSortiePointage)) {
            Flash::error('Employe Sortie Pointage not found');

            return redirect(route('employeSortiePointages.index'));
        }

        $this->employeSortiePointageRepository->delete($id);

        Flash::success('Employe Sortie Pointage deleted successfully.');

        return redirect(route('employeSortiePointages.index'));
    }
}
