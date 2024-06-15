@include('dokter.headerDokter')
    @include('dokter.sidebar&navbar')
    <div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;margin-left:60px;">
        <div class="container mx-auto">
            <div class="card border-0 shadow border-radius">
                <h2 class="text-center pt-5">Masukkan Data Pasien</h2>
                <div class="card-body">
                    <form action="{{ route('pasien.store') }}" method="POST" class="form-valid" enctype="multipart/form-data">
                        @csrf
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputnamaLengkap" class="form-label">Name</label>
                                <input type="text" name="name" id="inputnamaLengkap" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputemail" class="form-label">Email</label>
                                <input type="email" name="email" id="inputemail" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputpassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="inputpassword" class="form-control" required>
                                    <span class="input-group-text icon" id="id_icon"><i class="fa-regular fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="nama_obat" class="form-label">Medicine Name</label>
                                <input type="text" name="nama_obat" id="nama_obat" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputUmur" class="form-label">Age</label>
                                <input type="text" name="age" id="inputUmur" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputJabatan" class="form-label">Gender</label>
                                <select name="gender" id="inputJabatan" class="form-select" required>
                                    <option value="">Pilih </option>
                                    <option value="Laki-laki">Man</option>
                                    <option value="Perempuan">Woman</option>
                                    <option value="other">other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputPenyakit" class="form-label">Desease</label>
                                <input type="text" name="disease" id="inputPenyakit" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputLamaMinumObat" class="form-label">Time to take medicine</label>
                                <input type="text" name="time_to_take_medicine" id="inputLamaMinumObat" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputObatSehari" class="form-label">time to take medication (/day)</label>
                                <select name="medication_times" id="inputObatSehari" class="form-control" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;" onchange="showHideTimeInput()">
                                    <option value="" selected>Choose Here</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputJabatan" class="form-label">Level</label>
                                <select name="level" id="inputJabatan" class="form-select" required>
                                    <option value="">Pilih </option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                </select>
                            </div>
                            <!-- <div class="col-md-4">
                                <label for="mulai_minum">Tanggal Mulai:</label>
                                <input type="date" id="mulai_minum" name="mulai_minum">
                            </div>
                            <div class="col-md-4">
                                <label for="akhir_minum">Tanggal Akhir:</label>
                                <input type="date" id="akhir_minum" name="akhir_minum">
                            </div> -->
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="foto_profil" class="form-label">Foto Profil :</label>
                                <input type="file" name="photo" id="foto_profil" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputObatSehari" class="form-label">Status</label>
                                <select name="status" id="inputObatSehari" class="form-control"style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                    <option value="">Choose Here</option>
                                    <option value="Active">Active</option>
                                    <option value="Done">Done</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-md text-light" onclick="#" style="background-color: rgba(88, 95, 233, 1)">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('dokter.footerDokter')
