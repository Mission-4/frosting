<?php

namespace Mission4\Frosting\Controllers;

use Illuminate\Http\Request;
use Mission4\Frosting\Frosting;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class InvitesController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        return response()->json([
            'data' => Frosting::listInvites()->map->jsonApi(),
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "email" => "email|required",
        ]);

        $invite = Frosting::invite($request->email);

        return response()->json([
            "data" => $invite->jsonApi(),
        ], 200);
    }

    public function delete(Request $request)
    {
        $this->validate($request, [
            "email" => "email|required",
        ]);

        Frosting::invalidateInvitesForEmail($request->email);

        return response()->json(null, 404);
    }
}
