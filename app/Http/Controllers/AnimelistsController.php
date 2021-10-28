<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnimelistsRequest;
use App\Http\Requests\UpdateAnimelistsRequest;
use App\Repositories\AnimelistsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AnimelistsController extends AppBaseController
{
    /** @var  AnimelistsRepository */
    private $animelistsRepository;

    public function __construct(AnimelistsRepository $animelistsRepo)
    {
        $this->animelistsRepository = $animelistsRepo;
    }

    /**
     * Display a listing of the Animelists.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $animelists = $this->animelistsRepository->all();

        return view('animelists.index')
            ->with('animelists', $animelists);
    }

    /**
     * Show the form for creating a new Animelists.
     *
     * @return Response
     */
    public function create()
    {
        return view('animelists.create');
    }

    /**
     * Store a newly created Animelists in storage.
     *
     * @param CreateAnimelistsRequest $request
     *
     * @return Response
     */
    public function store(CreateAnimelistsRequest $request)
    {
        $input = $request->all();

        $animelists = $this->animelistsRepository->create($input);

        Flash::success('Animelists saved successfully.');

        return redirect(route('animelists.index'));
    }

    /**
     * Display the specified Animelists.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $animelists = $this->animelistsRepository->find($id);

        if (empty($animelists)) {
            Flash::error('Animelists not found');

            return redirect(route('animelists.index'));
        }

        return view('animelists.show')->with('animelists', $animelists);
    }

    /**
     * Show the form for editing the specified Animelists.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $animelists = $this->animelistsRepository->find($id);

        if (empty($animelists)) {
            Flash::error('Animelists not found');

            return redirect(route('animelists.index'));
        }

        return view('animelists.edit')->with('animelists', $animelists);
    }

    /**
     * Update the specified Animelists in storage.
     *
     * @param int $id
     * @param UpdateAnimelistsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnimelistsRequest $request)
    {
        $animelists = $this->animelistsRepository->find($id);

        if (empty($animelists)) {
            Flash::error('Animelists not found');

            return redirect(route('animelists.index'));
        }

        $animelists = $this->animelistsRepository->update($request->all(), $id);

        Flash::success('Animelists updated successfully.');

        return redirect(route('animelists.index'));
    }

    /**
     * Remove the specified Animelists from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $animelists = $this->animelistsRepository->find($id);

        if (empty($animelists)) {
            Flash::error('Animelists not found');

            return redirect(route('animelists.index'));
        }

        $this->animelistsRepository->delete($id);

        Flash::success('Animelists deleted successfully.');

        return redirect(route('animelists.index'));
    }
}
