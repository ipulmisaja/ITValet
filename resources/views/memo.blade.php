<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Memorandum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <style>
        p {
            text-indent: 50px;
        }
    </style>
</head>

<body>
    <section class="section p-6">
        <div class="container">
            <table class="table is-fullwidth">
                <tr>
                    <td>BADAN PUSAT STATISTIK<br>PROVINSI SULAWESI BARAT</td>
                    <td>
                        <div class="is-pulled-right">Invoice ID: #{{ $data['invoice'] }}</div>
                    </td>
                </tr>
            </table>

            <!-- Judul Memo -->
            <div class="has-text-centered mb-6">
                <h3 style="font-weight: bolder;">Memorandum</h3>
                <h6 style="font-size: small;">NOMOR: {{ $data['number'] }}</h6>
            </div>

            <!-- Tujuan Memo -->
            <table class="table mb-6">
                <td style="border: none">Yth.</td>
                <td style="border: none">: Pejabat Pembuat Komitmen BPS Provinsi Sulawesi Barat</td>
                </tr>
                <tr>
                    <td>Hal</td>
                    <td>: Pengajuan Pemeliharaan Perangkat TI</td>
                </tr>
            </table>

            <!-- Isi Memo -->
            <p class="has-text-justified">
                Sehubungan dengan pemeliharaan perangkat TI yang menunjang operasional
                kantor BPS Provinsi Sulawesi Barat, dengan ini diajukan permintaan perbaikan perangkat dengan
                rincian sebagai berikut :
            </p>

            <!-- Tabel Data -->
            <table class="table is-bordered mt-4 mb-4 is-fullwidth">
                <thead>
                    <th>No.</th>
                    <th>Nama Perangkat</th>
                    <th>No. Seri</th>
                    <th>Deskripsi</th>
                </thead>
                <tbody>
                    @foreach ($data['devices'] as $index => $device)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $device->device->master->name }}</td>
                            <td>{{ $device->device->serial }}</td>
                            <td>{!! $device->description !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Penutup -->
            <p>Demikian disampaikan, kami ucapkan terima kasih.</p>

            <!-- TTD -->
            <div class="is-pulled-right mt-6">
                <div class="has-text-centered">
                    <div>Mamuju, {{ inadate($data['date']) }}</div>
                    <div>Pranata Komputer Ahli Muda</div>
                    {{-- <img src="data:image/png;base64,{{ $qrcode }}"> --}}
                    <div class="mt-4 mb-4">ttd.</div>
                    <div style="font-weight: bolder;">Syaifur Rijal Syamsul</div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
