@include('Pasien.headerPasien')
@include('Pasien.sidebar&navbar')
<div class="main p-3">
    <dir class="board" style="margin-top:70px;">
        <div class="breadcrums">
            <h1>Welcome,</h1>
            @if (Auth::guard('pasien')->check())
                <h4>{{ Auth::guard('pasien')->user()->name }}</h4>
            @endif
        </div>
    </dir>
    <dir class="board">
        <div class="textheadertable" style="padding:20px;">
            <div id="test" style="float:left;">
                <h1>Control Patient</h1>
            </div>
            <div style="float:right;">
                <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal()">+ Tambah Waktu Minum</button>
            </div>
            <div style="clear:both;"></div>
        </div>
        <table width="100%">
            <thead>
                <tr>
                    <td>Hari</td>
                    <td>Sudah Minum</td>
                    <td>Bukti</td>
                </tr>
            </thead>
            <tbody>
                @php
                    $pasien = Auth::guard('pasien')->user();
                    $waktuMinum = $pasien->waktuMinum()->get();
                @endphp

                @foreach ($waktuMinum as $data)
                    <tr>
                        <td>{{ $data->hari }}</td>
                        <td>{{ $data->sudah_minum ? 'Sudah' : 'Belum' }}</td>
                        <td>
                            <!-- Option 1: Direct Styling -->
                            <img src="{{ $data->bukti_minum }}" alt="Bukti Minum" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </dir>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahWaktuMinumModal" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm" method="POST" action="{{ route('waktu_minum.store') }}" class="form-valid" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showTambahWaktuMinumModal() {
        $('#tambahWaktuMinumModal').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal').modal('hide');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>