<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengangkatanPemberhentianJFKU extends Model
{

    protected $table = 'pengangkatan_pemberhentian_jfkus';

    protected $fillable = [
        'id',
        'tanggal_surat_usulan',
        'no_surat_usulan',
        'ppk_pejabat_yang_diusulkan',
        'pejabat_menandatangani',
        'file_surat_usulan',
        'nip',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'instansi_induk',
        'instansi_pengusul',
        'pangkat_gol',
        'tmt_gol',
        'file_nota_usulan',
        'file_penetapan_kebutuhan_formasi',
        'file_ijazah',
        'file_pencantuman_gelar',
        'nomor_pak',
        'tanggal_pak',
        'jumlah_angka_kredit',
        'file_data_pak',
        'file_klarifikasi_pak',
        
        'jabatan_fungsional',
        'no_keppress_jabatan_fungsional',
        'file_keppres_pengangkatan',
        'file_ba_pengambilan_sumpah_pelantikan_fungsional',
        'tmt_jabatan_fungsional',
        'unit_kerja_fungsional',
        'tanggal_penerimaan_keppres',
        'alasan_pemberhentian',
        'ket_alasan_pemberhentian',
        'tmt_pemberhentian',
        'file_pendukung_pemberhentian',
        'jabatan_lama',
        'no_sk_jabatan_lama',
        'tmt_jabatan_lama',
        'unit_kerja_lama',
        'file_data_jabatan_lama',
        'jabatan_baru',
        'unit_kerja_baru',
        'no_surat_rekomendasi',
        'tanggal_surat_rekomendasi',
        'file_data_rekomendasi',
        'file_surat_keterangan_menduduki_jabatan',
        'file_surat_keterangan_pengalaman',
        'jabatan_kompetensi',
        'nomor_sertifikat',
        'tanggal_sertifikat',
        'file_data_kompetensi',
        'jumlah',
        'terisi',
        'sisa',
        'file_skp_2_dukungan_lainnya',
        'ket',
        'tanggal_surat_pengantar',
        'no_surat_pengantar',
        'no_keppres',
        'tanggal_keppres',
        'alasan_ralat',
        'file_surat_pengantar',
        'file_keppres',
        'file_bukti_pendukung',
        'no_sk_pangkat',
        'file_sk_pangkat_terakhir',
        'file_penilaian_skp',
        'file_penilaian_prestasi',
        'id_pengirim',
        'jenis_layanan',
        'status',
        'status_bkn',
        'distributor_id',
        'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    public function notes()
    {
        return $this->belongsTo('App\Catatan');
    }

}
