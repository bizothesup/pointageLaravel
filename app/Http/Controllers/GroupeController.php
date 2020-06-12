<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupeRequest;
use App\Http\Requests\UpdateGroupeRequest;
use App\Repositories\GroupeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GroupeController extends AppBaseController
{
    /** @var  GroupeRepository */
    private $groupeRepository;

    public function __construct(GroupeRepository $groupeRepo)
    {
        $this->groupeRepository = $groupeRepo;
    }

    /**
     * Display a listing of the Groupe.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $groupes = $this->groupeRepository->all();

        return view('groupes.index')
            ->with('groupes', $groupes);
    }

    /**
     * Show the form for creating a new Groupe.
     *
     * @return Response
     */
    public function create()
    {
        return view('groupes.create');
    }

    /**
     * Store a newly created Groupe in storage.
     *
     * @param CreateGroupeRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupeRequest $request)
    {
        $input = $request->all();

        $groupe = $this->groupeRepository->create($input);

        Flash::success('Groupe saved successfully.');

        return redirect(route('groupes.index'));
    }

    /**
     * Display the specified Groupe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $groupe = $this->groupeRepository->find($id);

        if (empty($groupe)) {
            Flash::error('Groupe not found');

            return redirect(route('groupes.index'));
        }

        return view('groupes.show')->with('groupe', $groupe);
    }

    /**
     * Show the form for editing the specified Groupe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $groupe = $this->groupeRepository->find($id);

        if (empty($groupe)) {
            Flash::error('Groupe not found');

            return redirect(route('groupes.index'));
        }

        return view('groupes.edit')->with('groupe', $groupe);
    }

    /**
     * Update the specified Groupe in storage.
     *
     * @param int $id
     * @param UpdateGroupeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupeRequest $request)
    {
        $groupe = $this->groupeRepository->find($id);

        if (empty($groupe)) {
            Flash::error('Groupe not found');

            return redirect(route('groupes.index'));
        }

        $groupe = $this->groupeRepository->update($request->all(), $id);

        Flash::success('Groupe updated successfully.');

        return redirect(route('groupes.index'));
    }

    /**
     * Remove the specified Groupe from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $groupe = $this->groupeRepository->find($id);

        if (empty($groupe)) {
            Flash::error('Groupe not found');

            return redirect(route('groupes.index'));
        }

        $this->groupeRepository->delete($id);

        Flash::success('Groupe deleted successfully.');

        return redirect(route('groupes.index'));
    }
}
