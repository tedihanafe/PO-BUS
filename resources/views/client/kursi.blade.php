@extends('layouts.app')
@section('title', 'Cari Kursi')
@section('styles')
    <style>
        a:hover {
            text-decoration: none;
        }

        .kursi {
            box-sizing: border-box;
            border: 2px solid #858796;
            width: 100%;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .kursi.booked {
            background-color: #858796;
        }

        .kursi.booked .kursi-text {
            color: red;
            /* Warna teks untuk kursi yang sudah terpesan */
        }

        .kursi .kursi-text {
            font-size: 26px;
            font-weight: bold;
            color: #858796;
            /* Default color for available seats */
        }

        .kursi.available {
            background-color: #ffffff;
        }

        .kursi.booked {
            background-color: #cccccc;
            /* Ganti warna ini sesuai keinginan Anda untuk kursi yang sudah dipesan */
        }
    </style>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-12" style="margin-top: -15px">
            <a href="javascript:window.history.back();" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i>
                Kembali</a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="row mt-2">
                @for ($i = 1; $i <= $transportasi->jumlah; $i++)
                    @php
                        $array = ['kursi' => 'K' . $i, 'rute' => $data['id'], 'waktu' => $data['waktu']];
                        $cekData = json_encode($array);
                        $isBooked = $transportasi->kursi($cekData) != null;
                    @endphp
                    @if ($isBooked)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                            <div class="kursi booked">
                                <div class="kursi-text">K{{ $i }}</div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                            <a href="{{ route('pesan', ['kursi' => 'K' . $i, 'data' => Crypt::encrypt($data)]) }}">
                                <div class="kursi available">
                                    <div class="kursi-text text-primary">K{{ $i }}</div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
        }
    </script>
@endsection
