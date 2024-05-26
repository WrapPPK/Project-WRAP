@include('admin.headerAdmin')
    @include('admin.sidebarAdmin')
    <div class="container" style="margin-top:80px; text-align:center;">
        <form method="post" action="{{ route('doctors.store') }}" enctype="multipart/form-data" role="form">
            @csrf
            <h2 class="AkunHead fw-semibold mt-5 " style="text-align:center; margin-bottom:40px;;">
                Add Doctor Account
            </h2>
            @if ($errors->any())
                            {{ implode('', $errors->all(':message')) }}
                          @endif
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" placeholder="NIP" aria-label="NIP" name="nip" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1" />
            </div>

            <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload photo</div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="file" name="photo" size="20" />
            </div>
            <div class="mt-4" style="text-align: center; padding-bottom:100px;">
                <button class="button" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>

    @include('admin.footerAdmin')
