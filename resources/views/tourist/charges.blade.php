@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Charges')

@push('css')
    <style>
        table.table-bordered{
            border:1px solid #000;
            margin-top:20px;
        }

        table.table-bordered > thead > tr > th{
            border:1px solid #000;
        }

        table.table-bordered > tbody > tr > th{
            border:1px solid #000;
        }

        table.table-bordered > tbody > tr > td{
            border:1px solid #000;
        }
    </style>
@endpush

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.tourist-information') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.excursion') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

<!-- Service Section -->
<div id="services-section" class="padding pt-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sx-12">
                <x-tourist-sidebar />
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.excursion') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image41.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.charges-p1') }}</p>
                        <p>{{ trans('tourist.charges-p2') }}</p>
                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l1') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l2') }}</p>
                            </li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l3') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l4') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l5') }}</p>
                            </li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l6') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l7') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l8') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l9') }}</b></li>
                            <li class="pb-3">{{ trans('tourist.charges-l10') }}</li>

                            <h4 class="text-center">{{ __('tourist.t1.h4') }}</h4>
                            <table class="table table-bordered" style="border-color: #000;">
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td class="text-center">{{ __('tourist.t1.td1') }}</td>
                                        <td class="text-center">{{ __('tourist.t1.td2') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('tourist.t1.th2') }}</th>
                                        <td class="text-center">{{ __('tourist.t1.td3') }}</td>
                                        <td class="text-center">{{ __('tourist.t1.td4') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('tourist.t1.th3') }}</th>
                                        <td class="text-center">{{ __('tourist.t1.td5') }}</td>
                                        <td class="text-center">{{ __('tourist.t1.td6') }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h4 class="text-center">{{ __('tourist.t2.h4') }}</h4>
                            <table class="table table-bordered" style="border-color: #000;">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">
                                            {{ __('tourist.t2.th1') }}
                                        </th>
                                        <th scope="col" class="text-center">
                                            {{ __('tourist.t2.th2') }}
                                        </th>
                                        <th scope="col" class="text-center">
                                            {{ __('tourist.t2.th3') }}
                                        </th>
                                        <th scope="col" class="text-center">
                                            {{ __('tourist.t2.th4') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th scope="row" rowspan="3" class="align-middle text-center">{{ __('tourist.t2.th5') }}</th>
                                        <td>{{ __('tourist.t2.td1') }}</td>
                                        <td>{{ __('tourist.t2.td2') }}</td>
                                        <td>{{ __('tourist.t2.td3') }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>{{ __('tourist.t2.td4') }}</td>
                                        <td>{{ __('tourist.t2.td5') }}</td>
                                        <td>{{ __('tourist.t2.td6') }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>{{ __('tourist.t2.td7') }}</td>
                                        <td>{{ __('tourist.t2.td8') }}</td>
                                        <td>{{ __('tourist.t2.td9') }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th scope="row" rowspan="6" class="align-middle text-center">{{ __('tourist.t2.th6') }}</th>
                                        <td>{{ __('tourist.t2.td10') }}</td>
                                        <td>{{ __('tourist.t2.td11') }}</td>
                                        <td>{{ __('tourist.t2.td12') }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>{{ __('tourist.t2.td13') }}</td>
                                        <td>{{ __('tourist.t2.td14') }}</td>
                                        <td>{{ __('tourist.t2.td15') }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>{{ __('tourist.t2.td16') }}</td>
                                        <td>{{ __('tourist.t2.td17') }}</td>
                                        <td>{{ __('tourist.t2.td18') }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>{{ __('tourist.t2.td19') }}</td>
                                        <td>{{ __('tourist.t2.td20') }}</td>
                                        <td>{{ __('tourist.t2.td21') }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>{{ __('tourist.t2.td22') }}</td>
                                        <td>{{ __('tourist.t2.td23') }}</td>
                                        <td>{{ __('tourist.t2.td24') }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>{{ __('tourist.t2.td25') }}</td>
                                        <td>{{ __('tourist.t2.td26') }}</td>
                                        <td>{{ __('tourist.t2.td27') }}</td>
                                    </tr>

                                </tbody>
                            </table>
                            <li class="pb-3"><b>{{ trans('tourist.charges-l13') }}</b></li>
                            <li class="pb-3">{{ trans('tourist.charges-l14') }}</li>
                            <li class="pb-3">{{ trans('tourist.charges-l15') }}</li>
                            <li class="pb-3">{{ trans('tourist.charges-l16') }}</li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l17') }}</b></li>
                            <p>{{ trans('tourist.charges-p3') }}</p>
                            <p>{{ trans('tourist.charges-p4') }}</p>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l18') }}</b></li>
                            <p><b>{{ trans('tourist.charges-p5') }}</b></p>
                            <p>{{ trans('tourist.charges-p6') }}</p>
                            <p>{{ trans('tourist.charges-p7') }}</p>
                            <figure>
                                <img src="{{ asset('public/assets/images/team/1.jpg') }}" alt="">
                            </figure>
                            <li class="pb-3"><b>{{ trans('tourist.charges-l19') }}</b></li>
                            <figure>
                                <img src="{{ asset('public/assets/images/team/2.jpg') }}" alt="">
                            </figure>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
