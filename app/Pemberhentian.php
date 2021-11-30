<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemberhentian extends Model
{

    protected $table = 'pemberhentians';

    protected $fillable = [
        'id', 'tanggal_surat_usulan', 'no_surat_usulan', 'jabatan_menandatangani', 'jangka_waktu', 'file_data_usulan', 'file_data_pendukung_lainnya', 'file_data_dokumen_klarifikasi', 'file_petikan_asli_sk_pensiun', 'nip', 'nama', 'nama_janda_duda_anak', 'tanggal_lahir', 'pendidikan_terakhir', 'instansi_induk', 'no_urut', 'pangkat_baru', 'tmt_pangkat_baru', 'pangkat_lama', 'alamat_setelah_pensiun', 'alamat', 'pangkat_terakhir', 'tmt_pemberhentian', 'nomor_pak', 'tanggal_pak', 'jumlah_angka_kredit', 'periode_penilaian', 'file_data_pak', 'no_klarifikasi', 'tanggal_klarifikasi', 'file_klarifikasi_pak', 'tmt_baru', 'tmt_lama', 'jabatan_terakhir', 'unit_kerja_terakhir', 'tmt_berhenti', 'tmt_pensiun', 'ket', 'tanggal_surat_pengantar', 'no_surat_pengantar', 'no_keppres', 'nomor_keppres_dibatalkan', 'tanggal_keppres', 'file_data_pernyataan_permohonan_aps', 'file_akte_kematian', 'file_keppres', 'file_sk_tidak_sedang_dalam_hukum_dpcp', 'masa_jabatan_start', 'masa_jabatan_end', 'taspen', 'file_sk_tidak_pernah_dijatuhi_hukuman', 'file_pas_foto', 'file_berita_acara_pelantikan', 'file_ijasah', 'jabatan', 'file_sk_jabatan_terakhir', 'file_sk_pangkat_terakhir', 'file_putusan_pengadilan_inkrach', 'catatan', 'no_surat_permohonan', 'tanggal_surat_permohonan', 'file_surat_permohonan', 'file_surat_keterangan_kehilangan_polisi', 'nama_kantor_polisi', 'no_surat_kehilangan', 'tanggal_surat_kehilangan', 'file_surat_keterangan_kehilangan', 'file_fotokopi_sk_hilang', 'file_data_pendukung_terkait', 'file_surat_keputusan_pengangkatan_sebagai_pejabat', 'file_keppres_yang_dibatalkan', 'perihal', 'data_salah', 'seharusnya', 'id_pengirim', 'jenis_layanan', 'status', 'distributor_id', 'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    public function notes()
    {
        return $this->belongsTo('App\Catatan');
    }

}
