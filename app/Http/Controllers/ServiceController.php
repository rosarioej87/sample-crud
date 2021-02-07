<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Service::all();

        return view('service.index', compact('services'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:5'
        ]);
        Service::create($data);
        return redirect()->back();
    }

    public function show(Service $service)
    {
        //
    }

    public function edit(Service $service)
    {
        //
    }

    public function update(Request $request, Service $service)
    {
        //
    }

    public function destroy(Service $service)
    {
        //
    }
}
