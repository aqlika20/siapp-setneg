$(document).ready(function (e) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('header[name="csrf-token"]').attr('content')
        }
    });

    $("#btn-bkn").click(function(e) {
        e.preventDefault();
        $("#btn-bkn").prop('disabled', true);

        $.ajax({
            url: $('#url-api-fetch-data-bkn').val(),
            type: "POST",
            data: {
                "nip": $('#nip').val()
            },
            success: function(response) {

                if ('error' == response.status) {
                    alert(response.message);
                } else {
                    console.log(response.data);
                    var data = response.data;
                    if (data.gelarDepan != null){
                        $('#nama').val(data.gelarDepan + ' ' + data.nama + ', ' + data.gelarBelakang);
                    }else if(data.gelarDepan != null && data.nama != null){
                        $('#nama').val(data.nama);
                    }else {
                        $('#nama').val(data.nama + ', ' + data.gelarBelakang);
                    }
                    $('#tempat_lahir').val(data.tempatLahir);
                    $('#tanggal_lahir').val(data.tglLahir);
                    $('#pendidikan_terakhir').val(data.pendidikanTerakhirNama);
                    $('#instansi').val(data.instansiIndukNama);
                    $('#jabatan_lama').val(data.jabatanNama);
                    $('#tmt_jabatan_lama').val(data.tmtJabatan);
                    $('#satuan_organisasi_lama').val(data.satuanKerjaIndukNama);
                    $('#pangkat_gol').val(data.pangkatAkhir);
                    
                    $('#masa_kerja_gol_tahun').val(data.mkTahun);
                    $('#masa_kerja_gol_bulan').val(data.mkBulan);
                    // $('#pangkat_gol').val(data.golRuangAkhir);
                    $('#instansi_induk').val(data.instansiIndukNama);
                }

                $("#btn-bkn").prop('disabled', false);
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");

                $("#btn-bkn").prop('disabled', false);
                alert(err.header.message);
            }
        });
    });
});
