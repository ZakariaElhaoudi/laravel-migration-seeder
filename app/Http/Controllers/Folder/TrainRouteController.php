<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TrainRoute;

class TrainRouteController extends Controller
{
    public function index() {

        $trainRoutes = TrainRoute :: all();

        return view("home", compact('trainRoutes'));
    }
}
