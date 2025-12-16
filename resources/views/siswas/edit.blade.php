<x-layout>
    <x-slot:title class="pt-2"><span class="text-m text-white fw-light">Data Siswa /</span> {{ $title }}</x-slot:title>

            <form action="/siswa/{{ $siswa->id }}" method="POST">
            @csrf
            @method('put')
                 <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Basic Layout</h5>
                    </div>
                    <div class="card-body">
                      
                        <div class="mb-3">
                          <label class="form-label" for="nis">NIS</label>
                          <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="isi nis" name="nis" value="{{ $siswa->nis }}"/>
                          @error('nis')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="nama">Nama Lengkap</label>
                          <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="isi nama lengkap" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}"/>
                           @error('nama_lengkap')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="kelas_id">Kelas</label>
                          <select class="form-control @error('kelas_id') is-invalid @enderror" id="kelas_id"  name="kelas_id">
                            <option value="">--Pilih Kelas--</option>
                            @foreach ($kelases as $kelas)
                                <option {{ $siswa->kelas_id == $kelas->id ? 'selected' : '' }}
                                value="{{ $kelas->id }}">{{ $kelas->tingkat }}</option>
                            @endforeach
                          </select>
                          @error('kelas_id')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
    
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      
                    </div>
                  </div>
                </div>
              </div>
            
            </form>

</x-layout>