@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('navigation.pending_transactions') }}</h5>
                    <div>
                        <a href="{{ route('inspection-transactions.index') }}" class="btn btn-secondary btn-sm me-2">{{ __('buttons.all_transactions') }}</a>
                        <a href="{{ route('inspection-transactions.create') }}" class="btn btn-primary btn-sm">{{ __('buttons.create_new') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('forms.id') }}</th>
                                    <th>{{ __('forms.barcode') }}</th>
                                    <th>{{ __('forms.tire_type') }}</th>
                                    <th>{{ __('forms.building_date') }}</th>
                                    <th>{{ __('forms.machine') }}</th>
                                    <th>{{ __('forms.created_at') }}</th>
                                    <th>{{ __('forms.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pendingTransactions as $transaction)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transaction->barcode }}</td>
                                        <td>{{ $transaction->tireType->name_en }}</td>
                                        <td>{{ $transaction->building_date ? $transaction->building_date->format('Y-m-d') : __('forms.not_available') }}</td>
                                        <td>{{ $transaction->machine ?? __('forms.not_available') }}</td>
                                        <td>{{ $transaction->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('inspection_transactions.show', $transaction) }}" class="btn btn-info btn-sm">{{ __('buttons.view') }}</a>
                                                <a href="{{ route('inspection_transactions.edit', $transaction) }}" class="btn btn-warning btn-sm">{{ __('buttons.edit') }}</a>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">{{ __('forms.no_pending_transactions_found') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
