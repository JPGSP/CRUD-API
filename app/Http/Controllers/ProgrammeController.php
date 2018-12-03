<?php

namespace App\Http\Controllers;

use App\Programme;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProgrammeController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $programmes = Programme::all();

        return response()->json([
            'message' => 'Request succesfull',
            'data'    => $programmes,
            'status'  => Response::HTTP_OK,
        ]);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $dataRead = $request->all();

        $programmeToSave = new Programme();

        $programmeToSave->setTitle($dataRead['title']);
        $programmeToSave->setChannel($dataRead['channel']);
        $programmeToSave->setBroadcast($dataRead['broadcast']);
        $programmeToSave->setRepeat($dataRead['repeat']);
        if (!empty($dataRead['genre'])) {
            $programmeToSave->setGenre($dataRead['genre']);
        }
        $programmeToSave->save();

        return response()->json([
            'message' => 'Request succesfully',
            'data'   => null,
            'status' => Response::HTTP_CREATED,
        ]);
    }

    /**
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $programme = Programme::find($id);

        if (empty($programme)){
            $response = response()->json([
                'message' => 'Resource not found',
                'data'    => $programme,
                'status'  => Response::HTTP_NOT_FOUND,
            ]);
        } else {
            $response = response()->json([
                'message' => 'Request succesfull',
                'data'    => $programme,
                'status'  => Response::HTTP_OK,
            ]);
        }
        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @param int $id
     *
     * @throws \Exception
     *
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        /** @var Programme $programmeFound */
        $programmeFound = Programme::find($id);

        if (empty($programmeFound)) {
            $response = response()->json([
                'message' => 'Resource not found',
                'data'    => null,
                'status'  => Response::HTTP_NOT_FOUND,
            ]);
        } else {
            $programmeFound->delete();

            $response = response()->json([
                'message' => 'Request succesfully',
                'data'    => null,
                'status'  => Response::HTTP_NO_CONTENT,
            ]);
        }
        return $response;
    }
}
