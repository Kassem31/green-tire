<?php

namespace App\Http\Controllers;

use App\Models\RepairStep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairStepController extends Controller
{
    public function __construct()
    {
        $this->middleware('super_permission:list_repair-steps')->only(['index']);
        $this->middleware('super_permission:show_repair-steps')->only(['show']);
        $this->middleware('super_permission:create_repair-steps')->only(['create', 'store']);
        $this->middleware('super_permission:edit_repair-steps')->only(['edit', 'update']);
        $this->middleware('super_permission:delete_repair-steps')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = RepairStep::query();

        if ($request->filled('name')) {
            $query->where(function ($q) use ($request) {
                $q->where('name_ar', 'LIKE', '%' . $request->name . '%')
                    ->orWhere('name_en', 'LIKE', '%' . $request->name . '%');
            });
        }
        $repairSteps = $query->get();
        return view('repair-steps.index', compact('repairSteps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repair-steps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        $userId = Auth::user()->id;

        $validated['created_by'] = $userId;
        $validated['updated_by'] = $userId;

        RepairStep::create($validated);

        return redirect()->route('repair-steps.index')
            ->with('success', __('messages.repair_step_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(RepairStep $repairStep)
    {
        return view('repair-steps.show', compact('repairStep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RepairStep $repairStep)
    {
        return view('repair-steps.edit', compact('repairStep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RepairStep $repairStep)
    {
        $validated = $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        $userId = Auth::user()->id;

        $validated['updated_by'] = $userId;

        $repairStep->update($validated);

        return redirect()->route('repair-steps.index')
            ->with('success', __('messages.repair_step_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RepairStep $repairStep)
    {
        // Check if repair step is used in any repair transactions
        if ($repairStep->repairTransactions()->count() > 0) {
            return redirect()->route('repair-steps.index')
                ->with('error', __('messages.repair_step_cannot_be_deleted'));
        }

        $userId = Auth::user()->id;

        $repairStep->deleted_by = $userId;
        $repairStep->save();
        $repairStep->delete();

        return redirect()->route('repair-steps.index')
            ->with('success', __('messages.repair_step_deleted_successfully'));
    }
}
