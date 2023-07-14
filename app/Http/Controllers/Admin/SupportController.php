<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Support\CreateSupportDTO;
use App\DTO\Support\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(protected SupportService $service)
    {
    }

    public function index(Request $request)
    {

        $supports = $this->service->getAll($request->filter);
        dd($supports);

        return view('admin.supports.index', compact('supports'));
    }

    public function show(string $id)
    {
        if (!$support = $this->service->findOneOrNull($id)) {
            return redirect()->back();
        }

        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(StoreUpdateSupport $request)
    {
        // $data = $request->validated();
        // $data['status'] = 'a';
        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect(route('supports.index'));
    }

    public function edit(string $id)
    {
        if (!$support = $this->service->findOneOrNull($id)) {
            return redirect()->back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function update(string $id, StoreUpdateSupport $request)
    {
        $support = $this->service->update(UpdateSupportDTO::updateFromRequest($request));

        if (!$support) {
            return redirect()->back();
        }

        return redirect()->route('supports.index');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        return redirect()->route('supports.index');
    }
}
