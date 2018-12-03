<?php

namespace App\Http\Controllers;

use App\Programme;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

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
        $validator = Validator::make($request->all(), [
            'title'     => 'required|unique:programmes',
            'channel'   => 'required',
            'broadcast' => 'required',
            'repeat'    => 'required',
            'genre'     => 'nullable|string',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return response()->json([
                'message' => $errors,
                'data'    => 'Request unsuccessfull',
                'status'  => Response::HTTP_BAD_REQUEST,
            ]);
        } else {
            $dataRead = $request->all();

            $programmeToSave = new Programme();

            $programmeToSave->setTitle($dataRead['title']);
            $programmeToSave->setChannel($dataRead['channel']);
            $programmeToSave->setBroadcast($dataRead['broadcast']);
            $programmeToSave->setRepeat($dataRead['repeat']);
            $programmeToSave->setGenre($dataRead['genre']);
            $programmeToSave->save();

            return response()->json([
                'message' => 'Request succesfully',
                'data'   => null,
                'status' => Response::HTTP_CREATED,
            ]);
        }
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
     * @param Request $request
     * @param int     $id
     *
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title'     => 'required|unique:programmes',
            'channel'   => 'required',
            'broadcast' => 'required',
            'repeat'    => 'required',
            'genre'     => 'nullable|string',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return response()->json([
                'message' => $errors,
                'data'    => 'Request unsuccessfull',
                'status'  => Response::HTTP_BAD_REQUEST,
            ]);
        } else {
            /** @var Programme $programme */
            $programme = Programme::find($id);

            if (empty($programme)) {
                $response = response()->json([
                    'message' => 'Resource not found',
                    'data'    => null,
                    'status'  => Response::HTTP_NOT_FOUND,
                ]);
            } else {
                $dataRead = $request->all();

                $programme->setTitle($dataRead['title']);
                $programme->setChannel($dataRead['channel']);
                $programme->setBroadcast($dataRead['broadcast']);
                $programme->setRepeat($dataRead['repeat']);
                $programme->setGenre($dataRead['genre']);
                $programme->save();

                $response = response()->json([
                    'message' => 'Request succesfull',
                    'data'    => $programme,
                    'status'  => Response::HTTP_OK,
                ]);
            }
        }

        return $response;
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
