@include('Pasien.headerPasien')
    @include('Pasien.sidebar&navbar')
    <div class="main p-3">
        <div class="board" style="margin-top:70px;">
            <div class="breadcrums">
                <h1>Welcome,</h1>
                @if (Auth::guard('pasien')->check())
                    <h4>{{ Auth::guard('pasien')->user()->name }}</h4>
                @endif
            </div>
        </div>
        <div class="board">
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
                        <th>Hari</th>
                        <th>Sudah Minum</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $waktuMinum = App\Models\Pasien::all();
                    @endphp
                    @if($waktuMinum->isNotEmpty())
                        @foreach($waktuMinum as $data)
                            <tr>
                                <td>{{ $data->hari }}</td>
                                <td>{{ $data->sudah_minum ? 'Sudah' : 'Belum' }}</td>
                                <td>
                                    @if($data->bukti_minum)
                                        <a href="{{ asset('storage/' . $data->bukti_minum) }}" target="_blank">
                                            <img src="{{ asset('storage/' . $data->bukti_minum) }}" alt="Bukti Minum" style="max-width: 100px;">
                                        </a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">Data tidak ditemukan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
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
                        <form id="tambahWaktuMinumForm" method="POST" action="{{ route('waktu_minum.store') }}">
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
</body>
</html>
