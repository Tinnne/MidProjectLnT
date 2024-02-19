<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index', ['workers'=> $workers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkerRequest $request)
    {
        $worker = Worker::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomor' => $request->nomor,
            'user_id' => auth()->id()
        ]);
        $workers = Worker::all();
        return view('worker.index', ['workers'=> $workers]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker)
    {
        // $workers = Worker::all();
        return view('worker.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkerRequest $request, Worker $worker)
    {
        $worker->update($request->validated());
        return redirect(route('worker.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect(route('worker.index'));
    }
}
