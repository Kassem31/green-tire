@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('navigation.repair_transaction_details') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="d-flex justify-content-end mb-4">
                        @permission('edit_repair-transactions')
                        <a href="{{ route('repair-transactions.edit', $repairTransaction) }}" class="btn btn-primary mr-2">{{ __('buttons.edit') }}</a>
                        @endpermission
                        <a href="{{ route('repair-transactions.index') }}" class="btn btn-secondary">{{ __('buttons.back_to_repair_transactions') }}</a>
                    </div>

                    <!-- Repair Transaction Info -->
                    <div class="form-group mb-4">
                        <h5>{{ __('forms.repair_transaction_information') }}:</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%">{{ __('forms.id') }}</th>
                                    <td>{{ $repairTransaction->id }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.decision') }}</th>
                                    <td>
                                        @if ($repairTransaction->decision === 'repair')
                                            <span class="badge bg-success">{{ __('forms.repair') }}</span>
                                        @elseif ($repairTransaction->decision === 'scrap')
                                            <span class="badge bg-danger">{{ __('forms.scrap') }}</span>
                                        @else
                                            <span class="badge bg-warning">{{ __('forms.pending') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.created_date') }}</th>
                                    <td>{{ $repairTransaction->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.updated_date') }}</th>
                                    <td>{{ $repairTransaction->updated_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Inspection Info -->
                    <div class="form-group mb-4">
                        <h5>{{ __('forms.inspection_information') }}:</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%">{{ __('forms.barcode') }}</th>
                                    <td>{{ $repairTransaction->inspectionTransaction->barcode }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.tire_type') }}</th>
                                    <td>{{ $repairTransaction->inspectionTransaction->tireType->name_en }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.inspection_decision') }}</th>
                                    <td>{{ $repairTransaction->inspectionTransaction->decision }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.building_date') }}</th>
                                    <td>
                                        {{ $repairTransaction->inspectionTransaction->building_date ?
                                           $repairTransaction->inspectionTransaction->building_date->format('Y-m-d') : __('forms.not_available') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('forms.machine') }}</th>
                                    <td>{{ $repairTransaction->inspectionTransaction->machine ?? __('forms.not_available') }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-2">
                            <a href="{{ route('inspection-transactions.show', $repairTransaction->inspectionTransaction->id) }}"
                               class="btn btn-info btn-sm">
                                {{ __('buttons.view_full_inspection_details') }}
                            </a>
                        </div>
                    </div>

                    <!-- Repair Steps -->
                    <div class="form-group mb-4">
                        <h5>{{ __('forms.repair_steps') }}:</h5>
                        @if ($repairTransaction->repairSteps->count() > 0)
                            <ul class="list-group">
                                @foreach ($repairTransaction->repairSteps as $step)
                                    <li class="list-group-item">{{ $step->name_en }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>{{ __('forms.no_repair_steps_added') }}</p>
                        @endif
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
@endsection
