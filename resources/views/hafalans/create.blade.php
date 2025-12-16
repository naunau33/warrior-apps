<x-layout>
    <x-slot:title class="pt-2"><span class="text-m text-white fw-light">Data Hafalan /</span> {{ $title }}</x-slot:title>



            <form action="/hafalan" method="POST">
            @csrf
                 <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    
                    <div class="card-body">
                      
                        <div class="mb-3">
                          <label class="form-label" for="siswa_id">Nama Siswa</label>
                          <select class="form-control @error('siswa_id') is-invalid @enderror" id="siswa_id"  name="siswa_id">
                            <option value="">--Pilih Siswa--</option>
                            @foreach ($siswas as $siswa)
                                <option value="{{ $siswa->id }}">{{ $siswa->nama_lengkap }}</option>
                            @endforeach
                          </select>
                          @error('siswa_id')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="surat_id">Surat</label>
                          <select class="form-control @error('surat_id') is-invalid @enderror" id="surat_id"  name="surat_id">
                            <option value="">--Pilih surat--</option>
                            @foreach ($surats as $surat)
                                <option value="{{ $surat->id }}">{{ $surat->nama_surat }}</option>
                            @endforeach
                          </select>
                          @error('siswa_id')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="tanggal_penilaian">Tanggal Penilaian</label>
                          <input type="date" class="form-control @error('tanggal_penilaian') is-invalid @enderror" id="tanggal_penilaian" placeholder="isi tanggal penilaian" name="tanggal_penilaian"/>
                           @error('tanggal_penilaian')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="nilai_tajwid">Nilai Tajwid</label>
                          <input type="text" class="form-control @error('nilai_tajwid') is-invalid @enderror" id="nilai_tajwid" placeholder="masukkan nilai" name="nilai_tajwid"/>
                           @error('nilai_tajwid')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="nilai_makhroj">Nilai Makhroj</label>
                          <input type="text" class="form-control @error('nilai_makhroj') is-invalid @enderror" id="nilai_makhroj" placeholder="masukkan nilai" name="nilai_makhroj"/>
                           @error('nilai_makhroj')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="nilai_tartil">Nilai Tartil</label>
                          <input type="text" class="form-control @error('nilai_tartil') is-invalid @enderror" id="nilai_tartil" placeholder="masukkan nilai" name="nilai_tartil"/>
                           @error('nilai_tartil')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="nilai_kelancaran">Nilai Kelancaran</label>
                          <input type="text" class="form-control @error('nilai_kelancaran') is-invalid @enderror" id="nilai_kelancaran" placeholder="masukkan nilai" name="nilai_kelancaran"/>
                           @error('nilai_kelancaran')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="keterangan">Keterangan</label>
                          <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="opsional" name="keterangan"></textarea>
                           @error('keterangan')
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
 <x-footer></x-footer>
 <x-script></x-script>