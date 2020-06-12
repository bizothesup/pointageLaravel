<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePointageParamRequest;
use App\Http\Requests\UpdatePointageParamRequest;
use App\Repositories\PointageParamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PointageParamController extends AppBaseController
{
    /** @var  PointageParamRepository */
    private $pointageParamRepository;

    public function __construct(PointageParamRepository $pointageParamRepo)
    {
        $this->pointageParamRepository = $pointageParamRepo;
    }

    /**
     * Display a listing of the PointageParam.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pointageParams = $this->pointageParamRepository->all();

        return view('pointage_params.index')
            ->with('pointageParams', $pointageParams);
    }

    /**
     * Show the form for creating a new PointageParam.
     *
     * @return Response
     */
    public function create()
    {
        return view('pointage_params.create');
    }

    /**
     * Store a newly created PointageParam in storage.
     *
     * @param CreatePointageParamRequest $request
     *
     * @return Response
     */
    public function store(CreatePointageParamRequest $request)
    {
        $input = $request->all();

        $pointageParam = $this->pointageParamRepository->create($input);

        Flash::success('Pointage Param saved successfully.');

        return redirect(route('pointageParams.index'));
    }

    /**
     * Display the specified PointageParam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pointageParam = $this->pointageParamRepository->find($id);

        if (empty($pointageParam)) {
            Flash::error('Pointage Param not found');

            return redirect(route('pointageParams.index'));
        }

        return view('pointage_params.show')->with('pointageParam', $pointageParam);
    }

    /**
     * Show the form for editing the specified PointageParam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pointageParam = $this->pointageParamRepository->find($id);

        if (empty($pointageParam)) {
            Flash::error('Pointage Param not found');

            return redirect(route('pointageParams.index'));
        }

        return view('pointage_params.edit')->with('pointageParam', $pointageParam);
    }

    /**
     * Update the specified PointageParam in storage.
     *
     * @param int $id
     * @param UpdatePointageParamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePointageParamRequest $request)
    {
        $pointageParam = $this->pointageParamRepository->find($id);

        if (empty($pointageParam)) {
            Flash::error('Pointage Param not found');

            return redirect(route('pointageParams.index'));
        }

        $pointageParam = $this->pointageParamRepository->update($request->all(), $id);

        Flash::success('Pointage Param updated successfully.');

        return redirect(route('pointageParams.index'));
    }

    /**
     * Remove the specified PointageParam from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pointageParam = $this->pointageParamRepository->find($id);

        if (empty($pointageParam)) {
            Flash::error('Pointage Param not found');

            return redirect(route('pointageParams.index'));
        }

        $this->pointageParamRepository->delete($id);

        Flash::success('Pointage Param deleted successfully.');

        return redirect(route('pointageParams.index'));
    }
}
