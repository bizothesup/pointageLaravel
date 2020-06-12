<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;
use App\Repositories\EmployeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use function PHPSTORM_META\elementType;
use Response;

class EmployeController extends AppBaseController
{
    /** @var  EmployeRepository */
    private $employeRepository;

    public function __construct(EmployeRepository $employeRepo)
    {
        $this->employeRepository = $employeRepo;
    }

    /**
     * Display a listing of the Employe.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employes = $this->employeRepository->all();

        return view('employes.index')
            ->with('employes', $employes);
    }

    /**
     * Show the form for creating a new Employe.
     *
     * @return Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created Employe in storage.
     *
     * @param CreateEmployeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeRequest $request)
    {
        $input = $request->except('active');


        $matricule = $this->employeRepository->generationMatricule();
        $input['matricule'] =$matricule;



        $employe = $this->employeRepository->create();
        Flash::success('Employe saved successfully.');

        return redirect(route('employes.index'));
    }

    /**
     * Display the specified Employe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            Flash::error('Employe not found');

            return redirect(route('employes.index'));
        }

        return view('employes.show')->with('employe', $employe);
    }

    /**
     * Show the form for editing the specified Employe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            Flash::error('Employe not found');

            return redirect(route('employes.index'));
        }

        return view('employes.edit')->with('employe', $employe);
    }

    /**
     * Update the specified Employe in storage.
     *
     * @param int $id
     * @param UpdateEmployeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeRequest $request)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            Flash::error('Employe not found');

            return redirect(route('employes.index'));
        }

        $employe = $this->employeRepository->update($request->all(), $id);

        Flash::success('Employe updated successfully.');

        return redirect(route('employes.index'));
    }

    /**
     * Remove the specified Employe from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            Flash::error('Employe not found');

            return redirect(route('employes.index'));
        }

        $this->employeRepository->delete($id);

        Flash::success('Employe deleted successfully.');

        return redirect(route('employes.index'));
    }
}
