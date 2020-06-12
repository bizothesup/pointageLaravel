<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCartRfidRequest;
use App\Http\Requests\UpdateCartRfidRequest;
use App\Repositories\CartRfidRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmployeRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class CartRfidController extends AppBaseController
{
    /** @var  CartRfidRepository */
    private $cartRfidRepository;
    private $employeRepository;

    public function __construct(CartRfidRepository $cartRfidRepo,EmployeRepository $employeRepo)
    {
        $this->cartRfidRepository = $cartRfidRepo;
        $this->employeRepository = $employeRepo;
    }

    /**
     * Display a listing of the CartRfid.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cartRfids = $this->cartRfidRepository->all();

        return view('cart_rfids.index')
            ->with('cartRfids', $cartRfids);
    }

    /**
     * Show the form for creating a new CartRfid.
     *
     * @return Response
     */
    public function create()
    {
        $employe = $this->employeRepository->EmployeNoCard();
        return view('cart_rfids.create')->with("employe",$employe);
    }

    /**
     * Store a newly created CartRfid in storage.
     *
     * @param CreateCartRfidRequest $request
     *
     * @return Response
     */
    public function store(CreateCartRfidRequest $request)
    {
        $input = $request->all();

        $cartRfid = $this->cartRfidRepository->create($input);

        Flash::success('Cart Rfid saved successfully.');

        return redirect(route('cartRfids.index'));
    }

    /**
     * Display the specified CartRfid.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cartRfid = $this->cartRfidRepository->find($id);

        if (empty($cartRfid)) {
            Flash::error('Cart Rfid not found');

            return redirect(route('cartRfids.index'));
        }

        return view('cart_rfids.show')->with('cartRfid', $cartRfid);
    }

    /**
     * Show the form for editing the specified CartRfid.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cartRfid = $this->cartRfidRepository->find($id);

        if (empty($cartRfid)) {
            Flash::error('Cart Rfid not found');

            return redirect(route('cartRfids.index'));
        }

        return view('cart_rfids.edit')->with('cartRfid', $cartRfid);
    }

    /**
     * Update the specified CartRfid in storage.
     *
     * @param int $id
     * @param UpdateCartRfidRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCartRfidRequest $request)
    {
        $cartRfid = $this->cartRfidRepository->find($id);

        if (empty($cartRfid)) {
            Flash::error('Cart Rfid not found');

            return redirect(route('cartRfids.index'));
        }

        $cartRfid = $this->cartRfidRepository->update($request->all(), $id);

        Flash::success('Cart Rfid updated successfully.');

        return redirect(route('cartRfids.index'));
    }

    /**
     * Remove the specified CartRfid from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cartRfid = $this->cartRfidRepository->find($id);

        if (empty($cartRfid)) {
            Flash::error('Cart Rfid not found');

            return redirect(route('cartRfids.index'));
        }

        $this->cartRfidRepository->delete($id);

        Flash::success('Cart Rfid deleted successfully.');

        return redirect(route('cartRfids.index'));
    }
}
