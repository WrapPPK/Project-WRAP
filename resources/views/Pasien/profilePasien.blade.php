@include('Pasien.headerPasien')
    @include('Pasien.sidebar&navbar')
        <div class="main p-3">
            <dir class="board" style="margin-top:70px;">
                <div class="breadcrums">
                    <h1>My Profile</h1>
                </div>
            </dir>
            <dir class="board" style="margin-top:10px;">
                <div class="breadcrums">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="Profile">
                                    <img src="images/Dokter3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-8" style="padding-bottom:20px;padding-top:10px">
                            <div class="row pt-2">
                                <div class="col-md">
                                    <label class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Name</label>
                                    <p class="form-control-plaintext" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;border-radius:7px; padding: 0.375rem 0.75rem;">{{ $pasien->name }}</p>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md">
                                    <label class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Email</label>
                                    <p class="form-control-plaintext" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;border-radius:7px; padding: 0.375rem 0.75rem;">{{ $pasien->email }}</p>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <label class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Age</label>
                                    <p class="form-control-plaintext" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;border-radius:7px; padding: 0.375rem 0.75rem;">{{ $pasien->age }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Gender</label>
                                    <p class="form-control-plaintext" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;border-radius:7px; padding: 0.375rem 0.75rem;">{{ $pasien->gender }}</p>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <label class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Desease</label>
                                    <p class="form-control-plaintext" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;border-radius:7px; padding: 0.375rem 0.75rem;">{{ $pasien->disease }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Level Desease</label>
                                    <p class="form-control-plaintext" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;border-radius:7px; padding: 0.375rem 0.75rem;">{{ $pasien->level }}</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </dir>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
</body>
</html>
