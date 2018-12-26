<?php

namespace App\Http\Controllers\API;

use DummyFullModelClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BaseApiController extends Controller
{
    /**
     * Checking if the logged in user is allowed to access the resource
     *
     * @param string $permission
     * @return boolean
     */
    public function canAccess($permission)
    {
        if (!Auth::user()->hasPermissionTo($permission)) {
            return false;
        }
        return true;
    }

    /**
     * Sending un authorized response to all the APIs
     *
     * @return \Illuminate\Http\Response
     */
    public function sendUnAuthorized()
    {
        return response()->json(['error' => 'You are not authorized to access this resource!'], 403);
    }
}
