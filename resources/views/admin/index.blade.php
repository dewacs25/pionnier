@extends('admin/layouts/app')
@section('content_ad')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Blog : {{ $jumlahBlog }}</h5>
                        <div class="text-end">
                            <h2 class="font-light mb-0">
                                @if ($dataHariIni == '0')
                                    <p class="text-warning"><b>-</b></p>
                                @else
                                    <i class="ti-arrow-up text-success"></i>
                                @endif {{ $dataHariIni }}
                            </h2>
                            <span class="text-muted">Data Hari Ini</span>
                        </div>
                        <span class="text-success">{{ $persen }}%</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: {{ $persen }}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            {{-- <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Weekly Sales</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                            <span class="text-muted">Todays Income</span>
                        </div>
                        <span class="text-info">30%</span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Column -->
        </div>

        <!-- ============================================================== -->
        <!-- Recent blogss -->
        <!-- ============================================================== -->
    </div>
@endsection
