<x-layout>
      <x-slot:title>{{ $title }}</x-slot:title>

      <a href="/siswa/create" class="btn btn-primary mb-0 ms-4">Tambah Data</a>

      <div class="container-fluid py-4">
         @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show border-0" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-theme="dark" aria-label="Close"></button>
                  </div>
              @endif
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            </div>
            <div class="card-body px-0 pt-0 pb-2">
               
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIS</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Lengkap</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                      
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($siswas as $siswa)
                     <tr>
                        <td>
                          <p class="text-xs font-weight-bold mb-0 ps-3">{{ $siswa->nis }}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $siswa->nama_lengkap }}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $siswa->kelas->tingkat }}</p>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button class="btn btn-link text-secondary mb-0" data-bs-toggle="dropdown">
                              <i class="fas fa-ellipsis-v text-xs"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/siswa/{{ $siswa->id }}/rapor">
                                <i class="ni ni-single-copy-04 me-1"></i></i> Cetak Rapor</a>

                              <a class="dropdown-item" href="/siswa/{{ $siswa->id }}/edit">
                                <i class="far fa-edit me-1"></i> Edit</a>

                              <form class="dropdown-item text-danger" action="/siswa/{{ $siswa->id }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini secara permanen?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border-0 bg-transparent text-danger">
                                <i class="far fa-trash-alt me-1 text-danger"></i>Hapus</button>
                              </form>
                             
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                      </table>

                     
            </div> 
        </div>
      </div>
    </div>

    



</x-layout>
