<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Telephone</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Nama Perusahaan</th>
        </tr>
    </thead>
    <tbody>
        @if (count($datas) == 0)
        <tr>
            <td colspan="6" class="text-center">Data tidak ditemukan</td>
        </tr>
        @endif
        @foreach ($datas as $data => $d)
        @php
            $user = $d->User;
        @endphp
        <tr>
            <td>{{ $data + $datas->firstitem() }}</td>
            <td>{{ $d->name }}</td>
            <td>{{ $d->phone }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->jabatan }}</td>
            <td>{{ $d->institution_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $datas->links() }}
