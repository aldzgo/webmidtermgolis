<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnimecharactersRequest;
use App\Http\Requests\UpdateAnimecharactersRequest;
use App\Repositories\AnimecharactersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AnimecharactersController extends AppBaseController
{
    /** @var  AnimecharactersRepository */
    private $animecharactersRepository;

    public function __construct(AnimecharactersRepository $animecharactersRepo)
    {
        $this->animecharactersRepository = $animecharactersRepo;
    }

    /**
     * Display a listing of the Animecharacters.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $animecharacters = $this->animecharactersRepository->all();

        return view('animecharacters.index')
            ->with('animecharacters', $animecharacters);
    }

    /**
     * Show the form for creating a new Animecharacters.
     *
     * @return Response
     */
    public function create()
    {
        return view('animecharacters.create');
    }

    /**
     * Store a newly created Animecharacters in storage.
     *
     * @param CreateAnimecharactersRequest $request
     *
     * @return Response
     */
    public function store(CreateAnimecharactersRequest $request)
    {
        $input = $request->all();

        $animecharacters = $this->animecharactersRepository->create($input);

        Flash::success('Animecharacters saved successfully.');

        return redirect(route('animecharacters.index'));
    }

    /**
     * Display the specified Animecharacters.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $animecharacters = $this->animecharactersRepository->find($id);

        if (empty($animecharacters)) {
            Flash::error('Animecharacters not found');

            return redirect(route('animecharacters.index'));
        }

        return view('animecharacters.show')->with('animecharacters', $animecharacters);
    }

    /**
     * Show the form for editing the specified Animecharacters.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $animecharacters = $this->animecharactersRepository->find($id);

        if (empty($animecharacters)) {
            Flash::error('Animecharacters not found');

            return redirect(route('animecharacters.index'));
        }

        return view('animecharacters.edit')->with('animecharacters', $animecharacters);
    }

    /**
     * Update the specified Animecharacters in storage.
     *
     * @param int $id
     * @param UpdateAnimecharactersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnimecharactersRequest $request)
    {
        $animecharacters = $this->animecharactersRepository->find($id);

        if (empty($animecharacters)) {
            Flash::error('Animecharacters not found');

            return redirect(route('animecharacters.index'));
        }

        $animecharacters = $this->animecharactersRepository->update($request->all(), $id);

        Flash::success('Animecharacters updated successfully.');

        return redirect(route('animecharacters.index'));
    }

    /**
     * Remove the specified Animecharacters from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $animecharacters = $this->animecharactersRepository->find($id);

        if (empty($animecharacters)) {
            Flash::error('Animecharacters not found');

            return redirect(route('animecharacters.index'));
        }

        $this->animecharactersRepository->delete($id);

        Flash::success('Animecharacters deleted successfully.');

        return redirect(route('animecharacters.index'));
    }
}
