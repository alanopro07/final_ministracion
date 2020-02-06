<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateusuarioModelRequest;
use App\Http\Requests\UpdateusuarioModelRequest;
use App\Models\usuarioModel;
use App\Repositories\usuarioModelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class usuarioModelController extends AppBaseController
{
    /** @var  usuarioModelRepository */
    private $usuarioModelRepository;

    public function __construct(usuarioModelRepository $usuarioModelRepo)
    {
        $this->usuarioModelRepository = $usuarioModelRepo;
    }

    /**
     * Display a listing of the usuarioModel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usuarioModels = $this->usuarioModelRepository->all();

        return view('usuario_models.index')
            ->with('usuarioModels', $usuarioModels);
    }

    /**
     * Show the form for creating a new usuarioModel.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuario_models.create');
    }

    /**
     * Store a newly created usuarioModel in storage.
     *
     * @param CreateusuarioModelRequest $request
     *
     * @return Response
     */
    public function store(CreateusuarioModelRequest $request)
    {
        $input = $request->all();

        $usuarioModel = $this->usuarioModelRepository->create($input);

        Flash::success('Usuario Model saved successfully.');

        return redirect(route('usuarioModels.index'));
    }

    /**
     * Display the specified usuarioModel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarioModel = $this->usuarioModelRepository->find($id);

        if (empty($usuarioModel)) {
            Flash::error('Usuario Model not found');

            return redirect(route('usuarioModels.index'));
        }

        return view('usuario_models.show')->with('usuarioModel', $usuarioModel);
    }

    /**
     * Show the form for editing the specified usuarioModel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarioModel = $this->usuarioModelRepository->find($id);

        if (empty($usuarioModel)) {
            Flash::error('Usuario Model not found');

            return redirect(route('usuarioModels.index'));
        }

        return view('usuario_models.edit')->with('usuarioModel', $usuarioModel);
    }

    /**
     * Update the specified usuarioModel in storage.
     *
     * @param int $id
     * @param UpdateusuarioModelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateusuarioModelRequest $request)
    {
        $usuarioModel = $this->usuarioModelRepository->find($id);

        if (empty($usuarioModel)) {
            Flash::error('Usuario Model not found');

            return redirect(route('usuarioModels.index'));
        }

        $usuarioModel = $this->usuarioModelRepository->update($request->all(), $id);

        Flash::success('Usuario Model updated successfully.');

        return redirect(route('usuarioModels.index'));
    }

    /**
     * Remove the specified usuarioModel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarioModel = $this->usuarioModelRepository->find($id);

        if (empty($usuarioModel)) {
            Flash::error('Usuario Model not found');

            return redirect(route('usuarioModels.index'));
        }

        $this->usuarioModelRepository->delete($id);

        Flash::success('Usuario Model deleted successfully.');

        return redirect(route('usuarioModels.index'));
    }

    public function prueba($input)
    {
        dd($input);
        $prueba = usuarioModel::first();
        return view('welcome');
    }
}
