@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('forms.inspection_details') }}</h5>
                    <div>
                        <a href="{{ route('inspection-transactions.edit', $inspectionTransaction) }}" class="btn btn-primary btn-sm">{{ __('navigation.edit') }}</a>
                        <a href="{{ route('inspection-transactions.index') }}" class="btn btn-secondary btn-sm">{{ __('buttons.back_to_inspection_transactions') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th width="30%">{{ __('forms.id') }}</th>
                                <td>{{ $inspectionTransaction->id }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.barcode') }}</th>
                                <td>{{ $inspectionTransaction->barcode }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.tire_type') }}</th>
                                <td>{{ $inspectionTransaction->tireType->name_en }} ({{ $inspectionTransaction->tireType->name_ar }})</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.decision') }}</th>
                                <td>{{ $inspectionTransaction->decision }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.is_repaired') }}</th>
                                <td>{{ $inspectionTransaction->is_repaired ? __('buttons.yes') : __('buttons.no') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.building_date') }}</th>
                                <td>{{ $inspectionTransaction->building_date ? $inspectionTransaction->building_date->format('Y-m-d') : __('forms.not_available') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.machine') }}</th>
                                <td>{{ $inspectionTransaction->machine ?? __('forms.not_available') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.operator_name') }}</th>
                                <td>{{ $inspectionTransaction->operator_name ?? __('forms.not_available') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.operator_code') }}</th>
                                <td>{{ $inspectionTransaction->operator_code ?? __('forms.not_available') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.created_at') }}</th>
                                <td>{{ $inspectionTransaction->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('forms.updated_at') }}</th>
                                <td>{{ $inspectionTransaction->updated_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="mt-4 mb-3">{{ __('forms.observations') }}</h5>
                    @if($inspectionTransaction->observations->count() > 0)
                        <ul class="list-group">
                            @foreach($inspectionTransaction->observations as $observation)
                                <li class="list-group-item">{{ $observation->name_en }} ({{ $observation->name_ar }})</li>
                            @endforeach
                        </ul>
                    @else
                        <p>{{ __('forms.no_observations') }}</p>
                    @endif

                    @if($inspectionTransaction->repairTransaction)
                        <h5 class="mt-4 mb-3">{{ __('forms.repair_information') }}</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%">{{ __('forms.repair_id') }}</th>
                                    <td>{{ $inspectionTransaction->repairTransaction->id }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.repair_decision') }}</th>
                                    <td>{{ $inspectionTransaction->repairTransaction->decision }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.repair_date') }}</th>
                                    <td>{{ $inspectionTransaction->repairTransaction->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
