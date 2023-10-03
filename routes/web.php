<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// tampilannya
Route::get('/index', 'tampilanController@index')->name('index');
Route::get('/Kelas-Tugas-Kuliah', 'tampilanController@ktk')->name('Kelas-Tugas-Kuliah');
Route::get('/bimbangan-mata-kuliah-jurusan', 'tampilanController@bmj')->name('bimbangan-mata-kuliah-jurusan');
Route::get('/tentang', 'tampilanController@tentang')->name('tentang');
Route::get('/kontak', 'tampilanController@kontak')->name('kontak');
Route::get('/bimbingan-skripsi-online', 'tampilanController@bso')->name('bimbingan-skripsi-online');
Route::get('/kti', 'tampilanController@kti')->name('kti');
Route::get('/skripsi', 'tampilanController@skripsi')->name('skripsi');
Route::get('/nonaktif', 'tampilanController@nonaktif')->name('nonaktif');
Route::get('/checkout', 'tampilanController@checkout')->name('checkout');
Route::get('/pembayaran/{id_produk}/{id}/{nama_voucher?}', 'tampilanController@pembayaran')->name('pembayaran');
Route::get('/pembelian/{id_produk}', 'tampilanController@Pengertian')->name('pembelian');


Route::post('/pembelian', 'tampilanController@validateVoucher')->name('validateVoucher');


// Route::post('/pembelian/cek-voucher/{id_produk}/{namaVoucher}', 'tampilanController@cekVoucher')->name('cek-voucher');
// Route::get('/pembelian', 'tampilanController@pembelian')->name('pembelian');



Route::get('/sendmail', 'EmailController@index');
// Route::get('/login', 'AuthController@login')->name('login');
// Route::get('/index', 'tampilanController@index')->middleware('auth');
Route::get('/login', 'AuthController@login')->name('login');
// Route::get('/register', 'AuthController@loginn')->name('loginn');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/forgot-password', 'AuthController@loginn')->name('loginn');
Route::post('/forgot-password', 'AuthController@postemail');
Route::get('/register', 'AuthController@daftar')->name('daftar');
Route::post('/registration.submit', 'AuthController@pendaftaran')->name('registration.submit');
Route::get('/logout', 'AuthController@logout');
Route::get('/auths/gantipassword/{id}', 'AuthController@gantipassword')->name('auths.gantipassword');
Route::post('/auths/{id}/simpanpassword', 'AuthController@simpanpassword');

Route::get('auth/google', 'AuthController@redirectToGoogle');
Route::get('auth/google/callback', 'AuthController@handleGoogleCallback');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::resource('/pengguna', 'PenggunaController');

// kitim email
Route::post('/proses-kirim-email', 'AuthController@prosesKirimEmail')->name('proses-kirim-email');
Route::get('/email', 'AuthController@tampilan')->name('email');
Route::post('/kirim-ulang-email', 'AuthController@kirimUlang')->name('proses-kirim-ulang-email');

//Route untuk user Admin
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/kirimemail','MalasngodingController@index');


    Route::get('/beli/index', 'BeliController@index')->name('beli');

    Route::get('/siswa/index', 'SiswaController@index')->name('siswa');
    Route::get('/siswa/create', 'SiswaController@create');
    Route::get('/siswa/{id}/show', 'SiswaController@show');
    Route::post('/siswa/store', 'SiswaController@store');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit');
    Route::post('/siswa/{id}/update', 'SiswaController@update');
    Route::get('/siswa/{id}/delete', 'SiswaController@delete');

    Route::get('/rekomen/index', 'RekomendasiController@index')->name('rekomen');
    Route::get('/rekomen/create', 'RekomendasiController@create');
    Route::get('/rekomen/{id}/show', 'RekomendasiController@show');
    Route::post('/rekomen/store', 'RekomendasiController@store');
    Route::get('/rekomen/{id}/edit', 'RekomendasiController@edit');
    Route::post('/rekomen/{id}/update', 'RekomendasiController@update');
    Route::get('/rekomen/{id}/delete', 'RekomendasiController@delete');

    Route::get('/pengumumancp/index', 'PengumumancpController@index')->name('pengumumancp');
    Route::post('/pengumumancp/{id}/publish', 'PengumumancpController@updatePublishStatus')->name('pengumumancp.publish');
    Route::get('/pengumumancp/create', 'PengumumancpController@create');
    Route::get('/pengumumancp/{id}/show', 'PengumumancpController@show');
    Route::post('/pengumumancp/store', 'PengumumancpController@store');
    Route::get('/pengumumancp/{id}/edit', 'PengumumancpController@edit');
    Route::post('/pengumumancp/{id}/update', 'PengumumancpController@update');
    Route::get('/pengumumancp/{id}/delete', 'PengumumancpController@delete');

    Route::get('/kriteria/index', 'KriteriaController@index')->name('kriteria');
    Route::get('/kriteria/create', 'KriteriaController@create');
    Route::get('/kriteria/{id}/show', 'KriteriaController@show');
    Route::post('/kriteria/store', 'KriteriaController@store');
    Route::get('/kriteria/{id}/edit', 'KriteriaController@edit');
    Route::post('/kriteria/{id}/update', 'KriteriaController@update');
    Route::get('/kriteria/{id}/delete', 'KriteriaController@delete');

    Route::get('/produk/index', 'ProdukController@index')->name('produk');
    Route::post('/produk/{id}/publish', 'ProdukController@updatePublishStatus')->name('produk.publish');
    Route::get('/produk/create', 'ProdukController@create');
    Route::post('/produk/store', 'ProdukController@store');
    // Route::get('/produk/{id}/show', 'ProdukController@show');
    Route::get('/produk/{id}/edit', 'ProdukController@edit');
    Route::post('/produk/{id}/update', 'ProdukController@update');
    Route::get('/produk/{id}/delete', 'ProdukController@delete');

    Route::get('/mentor/index', 'MentorController@index')->name('mentor');
    // Route::post('/mentor/{id}/publish', [MentorController::class, 'updatePublishStatus'])->name('mentor.publish');
    Route::post('/mentor/{id}/publish', 'MentorController@updatePublishStatus')->name('mentor.publish');
    Route::get('/mentor/create', 'MentorController@create');
    Route::post('/mentor/store', 'MentorController@store');
    // Route::get('/mentor/{id}/show', 'MentorController@show');
    Route::get('/mentor/{id}/edit', 'MentorController@edit');
    Route::post('/mentor/{id}/update', 'MentorController@update');
    Route::get('/mentor/{id}/delete', 'MentorController@delete');

    Route::get('/voucher/index', 'voucherController@index')->name('voucher');
    // Route::post('/voucher/{id}/publish', [voucherController::class, 'updatePublishStatus'])->name('voucher.publish');
    Route::post('/voucher/{id}/publish', 'voucherController@updatePublishStatus')->name('voucher.publish');
    Route::get('/voucher/create', 'voucherController@create');
    Route::post('/voucher/store', 'voucherController@store');
    // Route::get('/voucher/{id}/show', 'voucherController@show');
    Route::get('/voucher/{id}/edit', 'voucherController@edit');
    Route::post('/voucher/{id}/update', 'voucherController@update');
    Route::get('/voucher/{id}/delete', 'voucherController@delete');

    Route::get('/jurusan/index', 'jurusanController@index')->name('jurusan');
    // Route::post('/jurusan/{id}/publish', [jurusanController::class, 'updatePublishStatus'])->name('jurusan.publish');
    Route::post('/jurusan/{id}/publish', 'jurusanController@updatePublishStatus')->name('jurusan.publish');
    Route::get('/jurusan/create', 'jurusanController@create');
    Route::post('/jurusan/store', 'jurusanController@store');
    // Route::get('/jurusan/{id}/show', 'jurusanController@show');
    Route::get('/jurusan/{id}/edit', 'jurusanController@edit');
    Route::post('/jurusan/{id}/update', 'jurusanController@update');
    Route::get('/jurusan/{id}/delete', 'jurusanController@delete');

    Route::get('/SobatInsan/index', 'SobatInsanController@index')->name('SobatInsan');
    // Route::post('/SobatInsan/{id}/publish', [SobatInsanController::class, 'updatePublishStatus'])->name('SobatInsan.publish');
    Route::post('/SobatInsan/{id}/publish', 'SobatInsanController@updatePublishStatus')->name('SobatInsan.publish');
    Route::get('/SobatInsan/create', 'SobatInsanController@create');
    Route::post('/SobatInsan/store', 'SobatInsanController@store');
    // Route::get('/SobatInsan/{id}/show', 'SobatInsanController@show');
    Route::get('/SobatInsan/{id}/edit', 'SobatInsanController@edit');
    Route::post('/SobatInsan/{id}/update', 'SobatInsanController@update');
    Route::get('/SobatInsan/{id}/delete', 'SobatInsanController@delete');

    Route::get('/kelompok/index', 'KelompokProdukController@index')->name('kelompok');
    Route::get('/kelompok/create', 'KelompokProdukController@create');
    Route::post('/kelompok/store', 'KelompokProdukController@store');
    // Route::get('/kelompok/{id}/show', 'KelompokProdukController@show');
    Route::get('/kelompok/{id}/edit', 'KelompokProdukController@edit');
    Route::post('/kelompok/{id}/update', 'KelompokProdukController@update');
    Route::get('/kelompok/{id}/delete', 'KelompokProdukController@delete');

    Route::get('/pengertianProduk/index', 'PengertianProdukController@index')->name('PengertianProduk');
    Route::get('/pengertianProduk/create', 'PengertianProdukController@create');
    Route::post('/pengertianProduk/store', 'PengertianProdukController@store');
    // Route::get('/pengertianProduk/{id}/show', 'PengertianProdukController@show');
    Route::get('/pengertianProduk/{id}/edit', 'PengertianProdukController@edit');
    Route::post('/pengertianProduk/{id}/update', 'PengertianProdukController@update');
    Route::get('/pengertianProduk/{id}/delete', 'PengertianProdukController@delete');


    Route::get('/tendik/index', 'TendikController@index');
    Route::post('/tendik/tambah', 'TendikController@tambah');
    Route::get('/tendik/{id}/edit', 'TendikController@edit');
    Route::post('/tendik/{id}/update', 'TendikController@update');
    Route::get('/tendik/{id}/delete', 'TendikController@delete');

    Route::get('/rombel/index', 'RombelController@index');
    Route::post('/rombel/tambah', 'RombelController@tambah');
    Route::get('/rombel/{id}/anggota', 'RombelController@anggota');
    Route::get('/rombel/{rombel}/tambahAnggota', 'RombelController@tambahAnggota');
    Route::post('/rombel/{id_rombel}/simpanAnggota', 'RombelController@simpanAnggota');
    Route::get('/rombel/{id}/edit', 'RombelController@edit');
    Route::post('/rombel/{id}/update', 'RombelController@update');
    Route::get('/rombel/{id}/delete', 'RombelController@delete');

    Route::get('/tapel/index', 'TapelController@index');
    Route::post('/tapel/tambah', 'TapelController@tambah');
    Route::get('/tapel/{id}/edit', 'TapelController@edit');
    Route::post('/tapel/{id}/update', 'TapelController@update');
    Route::get('/tapel/{id}/delete', 'TapelController@delete');

    Route::get('/perpus/anggota/index', 'AnggotaPerpusController@index')->name('anggota');
    Route::get('/perpus/anggota/create', 'AnggotaPerpusController@create');
    Route::post('/perpus/anggota/store', 'AnggotaPerpusController@store');
    Route::get('/perpus/anggota/{id}/edit', 'AnggotaPerpusController@edit');
    Route::post('/perpus/anggota/{id}/update', 'AnggotaPerpusController@update');
    Route::get('/perpus/anggota/{id}/delete', 'AnggotaPerpusController@delete');
    Route::get('/perpus/anggota/{id}/show', 'AnggotaController@show');
    

    Route::get('/perpus/buku/index', 'BukuController@index')->name('buku');
    Route::get('/perpus/buku/create', 'BukuController@create');
    Route::post('/perpus/buku/store', 'BukuController@store');
    Route::get('/perpus/buku/{id}/edit', 'BukuController@edit');
    Route::post('/perpus/buku/{id}/update', 'BukuController@update');
    Route::get('/perpus/buku/{id}/show', 'BukuController@show');
    Route::get('/perpus/buku/{id}/delete', 'BukuController@delete');

    Route::get('/perpus/transaksi/index', 'TransaksiPerpusController@index')->name('transaksi');
    Route::get('/perpus/transaksi/bukukembali', 'TransaksiPerpusController@indexx')->name('anggota');
    Route::get('/perpus/transaksi/create', 'TransaksiPerpusController@create');
    Route::post('/perpus/transaksi/store', 'TransaksiPerpusController@store');
    Route::get('/perpus/transaksi/{id}/edit', 'TransaksiPerpusController@edit');
    Route::post('/perpus/transaksi/{id}/update', 'TransaksiPerpusController@update');
    Route::get('/perpus/transaksi/{id}/show', 'TransaksiPerpusController@show');
    Route::get('/perpus/transaksi/{id}/delete', 'TransaksiPerpusController@delete');
    Route::get('/perpus/transaksi/export_excel', 'TransaksiPerpusController@export_excel');


    Route::get('/pesdik/index', 'PesdikController@index');
    Route::get('/pesdik/create', 'PesdikController@create');
    Route::post('/pesdik/tambah', 'PesdikController@tambah');
    Route::get('/pesdik/{id}/edit', 'PesdikController@edit');
    Route::post('/pesdik/{id}/update', 'PesdikController@update');
    Route::get('/pesdik/{id}/delete', 'PesdikController@delete');

    Route::get('/pesdik/{id}/registrasi', 'PesdikController@registrasi');
    Route::post('/pesdik/{id}/keluar', 'PesdikController@keluar');
    Route::get('/pesdik/keluarindex', 'PesdikController@keluarindex');
    Route::post('/pesdik/{id}/alumni', 'PesdikController@alumni');
    Route::get('/pesdik/alumniindex', 'PesdikController@alumniindex');

    Route::get('/pengumuman/{id}/edit', 'PengumumanController@edit');
    Route::post('/pengumuman/{id}/update', 'PengumumanController@update');
    Route::get('/pengumuman/{id}/delete', 'PengumumanController@delete');

    //Route delete untuk admin
    Route::get('/suratmasuk/{id}/delete', 'SuratMasukController@delete');
    Route::get('/suratkeluar/{id}/delete', 'SuratKeluarController@delete');
    Route::get('/klasifikasi/{id}/delete', 'KlasifikasiController@delete');
    Route::delete('disposisi/{suratmasuk}/{id}', 'DisposisiController@destroy')->name('disposisi.destroy');
    Route::get('/keuangan/pemasukan/{id}/delete', 'PemasukanController@delete');
    Route::get('/keuangan/pemasukan/{id}/deletekategori', 'PemasukanController@deletekategori');
    Route::get('/keuangan/pengeluaran/{id}/delete', 'PengeluaranController@delete');
    Route::get('/keuangan/pengeluaran/{id}/deletekategori', 'PengeluaranController@deletekategori');
    Route::get('/tabungan/setor/{id}/delete', 'SetorController@delete');
    Route::get('/tabungan/tarik/{id}/delete', 'TarikController@delete');
    Route::get('/pembayaran/tagihan/{id}/delete', 'TagihanController@delete');

    //Route untuk instansi dan pengguna contoller
    Route::resource('/instansi', 'InstansiController');
    Route::resource('/pengguna', 'PenggunaController');
});

//Route untuk user Petugas Administrasi Keuangan dan Admin
Route::group(['middleware' => ['auth', 'checkRole:admin,PetugasAdministrasiKeuangan,user']], function () {

    Route::get('/pembayaran/tagihan/index', 'TagihanController@index')->name('pembayaran.tagihan.index');
    Route::get('/pembayaran/tagihan/create', 'TagihanController@create');
    Route::post('/pembayaran/tagihan/tambah', 'TagihanController@tambah')->name('pembayaran.tagihan.tambah');
    Route::get('/pembayaran/tagihan/{id}/edit', 'TagihanController@edit');
    Route::post('/pembayaran/tagihan/{id}/update', 'TagihanController@update');
    Route::post('/pembayaran/tagihan/filter', 'TagihanController@filter');
    Route::get('/pembayaran/tagihan/{filter}/print', 'TagihanController@print');

    Route::get('/pembayaran/transaksipembayaran/index', 'TransaksiPembayaranController@index')->name('pembayaran.transaksipembayaran.index');
    Route::post('/pembayaran/transaksipembayaran/cari_pesdik', 'TransaksiPembayaranController@cari_pesdik');
    Route::post('/pembayaran/transaksipembayaran/{id}/form_bayar', 'TransaksiPembayaranController@form_bayar');
    Route::post('/pembayaran/transaksipembayaran/bayar', 'TransaksiPembayaranController@bayar');
    Route::post('/pembayaran/transaksipembayaran/cetak_invoice', 'TransaksiPembayaranController@cetak_invoice');

    Route::get('/tabungan/setor/index', 'SetorController@index');
    Route::post('/tabungan/setor/tambah', 'SetorController@tambah');
    Route::get('/tabungan/setor/{id}/edit', 'SetorController@edit');
    Route::post('/tabungan/setor/{id}/update', 'SetorController@update');
    Route::get('/tabungan/setor/{id}/cetak', 'SetorController@cetak');
    Route::get('/tabungan/setor/{id}/cetakprint', 'SetorController@cetakprint');


    Route::get('/tabungan/tarik/index', 'TarikController@index');
    Route::post('/tabungan/tarik/tambah', 'TarikController@tambah');
    Route::get('/tabungan/tarik/{id}/edit', 'TarikController@edit');
    Route::post('/tabungan/tarik/{id}/update', 'TarikController@update');
    Route::get('/tabungan/tarik/{id}/cetak', 'TarikController@cetak');
    Route::get('/tabungan/tarik/{id}/cetakprint', 'TarikController@cetakprint');

    Route::get('/keuangan/pemasukan/index', 'PemasukanController@index');
    Route::post('/keuangan/pemasukan/tambah', 'PemasukanController@tambah');
    Route::get('/keuangan/pemasukan/{id}/edit', 'PemasukanController@edit');
    Route::post('/keuangan/pemasukan/{id}/update', 'PemasukanController@update');

    Route::post('/keuangan/pemasukan/tambahkategori', 'PemasukanController@tambahkategori');
    Route::get('/keuangan/pemasukan/{id}/deletekategori', 'PemasukanController@deletekategori');

    Route::get('/keuangan/pengeluaran/index', 'PengeluaranController@index');
    Route::post('/keuangan/pengeluaran/tambah', 'PengeluaranController@tambah');
    Route::get('/keuangan/pengeluaran/{id}/edit', 'PengeluaranController@edit');
    Route::post('/keuangan/pengeluaran/{id}/update', 'PengeluaranController@update');

    Route::post('/keuangan/pengeluaran/tambahkategori', 'PengeluaranController@tambahkategori');

    Route::get('/pembayaran/transaksipembayaran/index', 'TransaksiPembayaranController@index')->name('pembayaran.transaksipembayaran.index');
    Route::post('/pembayaran/transaksipembayaran/cari_pesdik', 'TransaksiPembayaranController@cari_pesdik');
    Route::post('/pembayaran/transaksipembayaran/{id}/form_bayar', 'TransaksiPembayaranController@form_bayar');
    Route::post('/pembayaran/transaksipembayaran/bayar', 'TransaksiPembayaranController@bayar');
    Route::post('/pembayaran/transaksipembayaran/cetak_invoice', 'TransaksiPembayaranController@cetak_invoice');

    Route::get('/laporankeuangan/transaksipembayaran/index', 'LaporanController@tPembayaranIndex')->name('laporankeuangan.transaksipembayaran.index');
    Route::post('/laporankeuangan/transaksipembayaran/filterByNama', 'LaporanController@tPembayaranfilterByNama')->name('laporankeuangan.transaksipembayaran.filterByNama');
    Route::post('/laporankeuangan/transaksipembayaran/filterByKelas', 'LaporanController@tPembayaranfilterByKelas')->name('laporankeuangan.transaksipembayaran.filterByKelas');
    Route::post('/laporankeuangan/transaksipembayaran/filterByTanggal', 'LaporanController@tPembayaranfilterByTanggal')->name('laporankeuangan.transaksipembayaran.filterByTanggal');
    Route::get('/laporankeuangan/transaksipembayaran/DownloadExcel', 'LaporanController@tPembayaranDownloadExcel')->name('laporankeuangan.transaksipembayaran.DownloadExcel');
    Route::post('/laporankeuangan/transaksipembayaran/cetak', 'LaporanController@tPembayaranCetak');

    Route::get('/laporankeuangan/setortariktunai/index', 'LaporanController@tSetorTarikIndex')->name('laporankeuangan.setortariktunai.index');
    Route::post('/laporankeuangan/setortariktunai/filterByNama', 'LaporanController@tSetorTarikfilterByNama')->name('laporankeuangan.setortariktunai.filterByNama');
    Route::post('/laporankeuangan/setortariktunai/filterByKelas', 'LaporanController@tSetorTarikfilterByKelas')->name('laporankeuangan.setortariktunai.filterByKelas');
    Route::post('/laporankeuangan/setortariktunai/filterByTanggal', 'LaporanController@tSetorTarikfilterByTanggal')->name('laporankeuangan.setortariktunai.filterByTanggal');
    Route::get('/laporankeuangan/setortariktunai/DownloadExcel', 'LaporanController@tSetorTarikDownloadExcel')->name('laporankeuangan.setortariktunai.DownloadExcel');
    Route::post('/laporankeuangan/setortariktunai/cetak', 'LaporanController@tSetorTarikCetak');

    Route::get('/laporankeuangan/keuangansekolah/index', 'LaporanController@tKeuanganSekolahIndex')->name('laporankeuangan.keuangansekolah.index');
    Route::post('/laporankeuangan/keuangansekolah/filterByKategori', 'LaporanController@tKeuanganSekolahfilterByKategori')->name('laporankeuangan.keuangansekolah.filterByKategori');
    Route::post('/laporankeuangan/keuangansekolah/filterByTanggal', 'LaporanController@tKeuanganSekolahfilterByTanggal')->name('laporankeuangan.keuangansekolah.filterByTanggal');
    Route::get('/laporankeuangan/keuangansekolah/DownloadExcel', 'LaporanController@tKeuanganSekolahDownloadExcel')->name('laporankeuangan.keuangansekolah.DownloadExcel');
    Route::post('/laporankeuangan/keuangansekolah/cetak', 'LaporanController@tKeuanganSekolahCetak');
});

//Route untuk user Petugas Administrasi Surat dan Admin
Route::group(['middleware' => ['auth', 'checkRole:admin,PetugasAdministrasiSurat']], function () {

    Route::get('/suratmasuk', 'SuratMasukController@index');
    Route::get('/suratmasuk/index', 'SuratMasukController@index');
    Route::get('/suratmasuk/create', 'SuratMasukController@create');
    Route::post('/suratmasuk/tambah', 'SuratMasukController@tambah');
    Route::get('/suratmasuk/{id}/tampil', 'SuratMasukController@tampil');
    Route::get('viewAlldownloadfile', 'SuratMasukController@downfunc');
    Route::get('/suratmasuk/{id}/edit', 'SuratMasukController@edit');
    Route::post('/suratmasuk/{id}/update', 'SuratMasukController@update');

    Route::get('/suratmasuk/agenda', 'SuratMasukController@agenda')->name('suratmasuk.agenda');
    Route::post('/suratmasuk/filter_agenda', 'SuratMasukController@filter_agenda');
    Route::post('/suratmasuk/cetakagenda', 'SuratMasukController@cetakagenda');

    Route::get('/suratmasuk.agendamasukdownload_excel', 'SuratMasukController@agendamasukdownload_excel')->name('suratmasuk.downloadexcel');
    Route::get('/suratmasuk/galeri', 'SuratMasukController@galeri');

    Route::get('/suratkeluar', 'SuratKeluarController@index');
    Route::get('/suratkeluar/index', 'SuratKeluarController@index');
    Route::get('/suratkeluar/create', 'SuratKeluarController@create');
    Route::post('/suratkeluar/tambah', 'SuratKeluarController@tambah');
    Route::get('/suratkeluar/{id}/tampil', 'SuratKeluarController@tampil');
    Route::get('viewAlldownloadfile', 'SuratKeluarController@downfunc');
    Route::get('/suratkeluar/{id}/edit', 'SuratKeluarController@edit');
    Route::post('/suratkeluar/{id}/update', 'SuratKeluarController@update');

    Route::get('/suratkeluar/agenda', 'SuratKeluarController@agenda')->name('suratkeluar.agenda');
    Route::post('/suratkeluar/filter_agenda', 'SuratKeluarController@filter_agenda');
    Route::post('/suratkeluar/cetakagenda', 'SuratKeluarController@cetakagenda');
    Route::get('/suratkeluar.agendakeluardownload_excel', 'SuratKeluarController@agendakeluardownload_excel')->name('suratkeluar.downloadexcel');
    Route::get('/suratkeluar/galeri', 'SuratKeluarController@galeri');


    Route::get('/klasifikasi', 'KlasifikasiController@index');
    Route::get('/klasifikasi/index', 'KlasifikasiController@index');
    Route::get('/klasifikasi/create', 'KlasifikasiController@create');
    Route::post('/klasifikasi/tambah', 'KlasifikasiController@tambah');
    Route::get('/klasifikasi/{id}/edit', 'KlasifikasiController@edit');
    Route::post('/klasifikasi/{id}/update', 'KlasifikasiController@update');

    Route::post('/klasifikasi.import', 'KlasifikasiController@import');

    Route::get('disposisi/{suratmasuk}', 'DisposisiController@index')->name('disposisi.index');
    Route::post('disposisi/{suratmasuk}', 'DisposisiController@store')->name('disposisi.store');
    Route::get('disposisi/{suratmasuk}/create', 'DisposisiController@create')->name('disposisi.create');
    Route::get('disposisi/{suratmasuk}/{id}/edit', 'DisposisiController@edit')->name('disposisi.edit');
    Route::get('disposisi/{suratmasuk}/{id}', 'DisposisiController@update')->name('disposisi.update');
    Route::get('/disposisi/{suratmasuk}/{id}/download', 'DisposisiController@download')->name('disposisi.download');
});

//Route untuk user siswa
Route::group(['middleware' => ['auth', 'checkRole:Siswa']], function () {
    Route::get('/{id}/siswadashboard', 'DashboardController@siswadashboard');
    Route::get('/tabungan/setor/{id}/siswaindex', 'SetorController@siswaindex');
    Route::get('/tabungan/tarik/{id}/siswaindex', 'TarikController@siswaindex');
    Route::get('/pembayaran/transaksipembayaran/{id}/siswaindex', 'TransaksiPembayaranController@siswaindex');
});

//Route untuk user Admin, Petugas Administrasi Surat dan Petugas Administrasi Keuangan
Route::group(['middleware' => ['auth', 'checkRole:admin,PetugasAdministrasiKeuangan,PetugasAdministrasiSurat,user']], function () {
    Route::get('/', function () {
        return view('/index');
    });
    // Route::get('/', function () {
    //     return view('/dashboard');
    // });

Route::get('/dashboard', 'DashboardController@index');

    Route::get('/pengumuman/index', 'PengumumanController@index');
    Route::post('/pengumuman/tambah', 'PengumumanController@tambah');
});

//Route untuk user Admin, Petugas Administrasi Surat, Petugas Administrasi Keuangan dan Siswa
Route::group(['middleware' => ['auth', 'checkRole:admin,PetugasAdministrasiKeuangan,PetugasAdministrasiSurat,Siswa']], function () {
    Route::get('/auths/{id}/gantipassword', 'AuthController@gantipassword');
    Route::post('/auths/{id}/simpanpassword', 'AuthController@simpanpassword');
});

Route::get('/ok', function () {
    return view('/emails/lupapasword');
});