@include('admin.headerAdmin')
    @include('admin.sidebarAdmin')
    <div class="container" style="width: 80%; margin-top:90px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1 class="mb-3">Doctor Account</h1>
            <button class="button mb-2" onclick="location.href='/insert'"><i class="fas fa-user-plus" style="margin:2px; margin-right:10px;"></i>Tambah</button>
        </div>
        <div class="inner-container" style="margin-bottom:100px;">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
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
            </table>
        </div>
    </div>
    @include('admin.footerAdmin')

    
