@include('admin.headerAdmin')
    @include('admin.sidebarAdmin')
    <div class="container" style="width: 80%; margin-top:90px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1 class="mb-3">Doctor List</h1>
        </div>
        <div class="inner-container" style="margin-bottom:100px;">
            <dir class="board">
                <div class="textheadertable" style="margin-bottom:20px;">
                    <div id="test" style="display: flex; justify-content: flex-end; margin-top: 10px;">
                        <input style="margin-right:890px" type="text" id="searchInput" placeholder="Search for names.." onkeyup="searchTable()">
                        <button style="padding-right:20px" type="button" class="btn btn-primary" onclick="location.href='/insert'">+ Tambah</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <table class="table" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Password</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
                <tbody>
                    @php
                        $data = \App\Models\Doctor::all();
                    @endphp
                    @foreach($data as $key => $data)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <!-- <td>{{ $data->password }}</td> -->
                        <td>
                            <form action="{{ route('doctor.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="buttonDel"><i class="fas fa-trash"></i></button>
                            </form>
                            <h1></h1>
                            <a href="{{ route('doctor.edit', $data->id) }}" class="button"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </dir>
        </div>
    </div>
    @include('admin.footerAdmin')

    
