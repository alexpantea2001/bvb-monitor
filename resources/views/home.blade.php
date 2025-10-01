@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>
                            <a href="https://m.bvb.ro/FinancialInstruments/Markets/Shares" target="_blank" class="text-decoration-none text-primary">
                                {{ __('Actiuni(click aici)') }}
                            </a>
                        </h4>
                        <div class="alert alert-info mt-3">
                            <a href="{{ route('role.toggle') }}" class="btn btn-link p-0 m-0 align-baseline text-decoration-none text-primary">
                                @if(auth()->user()->hasRole('administrator'))
                                    <i class="fa-solid fa-trash"></i>
                                    Sterge rolul
                                @else
                                    <i class="fa-solid fa-plus"></i> Adauga rolul
                                @endif
                                Administrator
                            </a>
                        </div>
                    </div>
                    <table class="dataTable generic-table">
                        <thead>
                        <tr>
                            <th class="symbol_isin">{{ __('Simbol / ISIN') }}</th>
                            <th class="company">{{ __('Company') }}</th>
                            <th class="price text-start">{{ __('Pret (RON)') }}</th>
                            <th class="var text-start">{{ __('Var. (%)') }}</th>
                            <th class="date text-start">{{ __('Data') }}</th>
                            <th class="category">{{ __('Categoria') }}</th>
                            @if (auth()->user()->hasRole('administrator'))
                                <th class="actions">{{ __('Actiuni') }}</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($sharesData as $share)
                                @if (!$share['is_active'] && !auth()->user()->hasRole('administrator'))
                                    @continue
                                @endif
                                <tr @if (!$share['is_active'] && auth()->user()->hasRole('administrator')) style="background-color: #ffcccb;" @endif>
                                    <td><b class="text-black-blue">{{ $share['symbol'] }}</b><br>{{ $share['isin'] }}</td>
                                    <td>{{ $share['company'] }}</td>
                                    <td class="text-start">{{ $share['price'] }}</td>
                                    <td class="text-start">
                                        @if ($share['change'] > 0)
                                            <span class="text-success">
                                                {{ $share['change'] }}
                                                <i class="fa-solid fa-caret-up"></i>
                                            </span>
                                        @elseif ($share['change'] < 0)
                                            <span class="text-danger">
                                                {{ $share['change'] }}
                                                <i class="fa-solid fa-caret-down"></i>
                                            </span>
                                        @else
                                            <span class="text-info">
                                                {{ $share['change'] }}
                                                <i class="fa-solid fa-square fa-xs"></i>
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-start">{{ $share['date'] }}</td>
                                    <td>{{ $share['category'] }}</td>
                                    @if (auth()->user()->hasRole('administrator'))
                                        <td>
                                            @if ($share['is_active'])
                                                <form action="{{ route('stocks.updateStatus', $share['id']) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            @else
                                                <form action="{{ route('stocks.updateStatus', $share['id']) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-plus"></i></button>
                                                </form>
                                            @endif
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection