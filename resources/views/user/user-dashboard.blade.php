@extends('layouts.user_type.auth')

@section('content')

<div class="container">

    <h2 class="mb-3">Selamat Datang,<span class="text-capitalize" style="color: #3F51B2;">
            {{auth()->user()->name}}!</span></h2>
    <p>Mula jejak tumbesaran dan pencapaian perkembangan <span class="text-capitalize" style="color: #3F51B2;">
            <strong>{{ $child->child_name}}</strong></span>.</p>

    <div class="row">
        <!-- Growth Chart Section -->
        <!-- Include the growth chart partial -->
        @include('user.growth-chart-partial', ['child' => $child, 'growthRecords' => $growthRecords, 'refRecords' => $refRecords])

        <!-- M-CHAT Score Section -->
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">M-CHAT</h5>
                    <h6 class="card-title mb-3">Skor M-CHAT</h6>
                    <h2 class="display-4" style="color: #3F51B2;"><strong>{{ $latestMCHAT->score ?? '0' }}</strong></h2>

                    <span class="badge
                    @if ($latestMCHAT?->risk_level === 'RISIKO TINGGI')
                        bg-gradient-danger
                    @elseif ($latestMCHAT?->risk_level === 'RISIKO SEDERHANA')
                        bg-gradient-warning
                    @else
                        bg-gradient-success
                    @endif">
                        {{ $latestMCHAT?->risk_level ?? 'Tiada Rekod' }}
                    </span>
                    <br>
                    <a href="{{ route('mchat.index', ['childId' => $child->id]) }}" class="btn btn-primary mt-3">Ambil
                        Ujian</a>
                </div>
            </div>
            <div class="card " >
                <div class="card-body text-center">
                    <h5 class="card-title">Indeks Jisim Badan(BMI)</h5>
                    <h5 class="display-5" style="color: #3F51B2;"><strong>{{ $bmi ?? '0' }}</strong></h5>
                    
                    <span class="badge
                    @if ($bmiStatus === 'Obesiti')
                        bg-gradient-danger
                    @elseif ($bmiStatus === 'Berat Badan Berlebihan' || $bmiStatus === "Kurang Berat Badan")
                        bg-gradient-warning
                    @else
                        bg-gradient-success
                    @endif">
                    {{ $bmiStatus ?? 'Tiada Rekod'}}
                    </span>
                    <br>
                </div>
            </div>
        </div>
        

    </div><br>
    <!-- Milestone Section -->
    <h6 class="ms-2 mb-3 text-xs font-weight-bolder opacity-6">Paparan Data Pencapaian Perkembangan </h6>
    @include('user.checklist-milestone-partial', ['milestoneProgress' => $milestoneProgress, 'child' => $child])

</div>
@endsection