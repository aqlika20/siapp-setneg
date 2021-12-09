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
                console.log(response)

                if ('error' == response.status) {
                    alert(response.message);
                } else {
                    console.log(response.data);
                    var data = response.data;
                    // $('#nama').val(data.nama);
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
                    $('#instansi_induk').val(data.instansiIndukNama);
                    $('#pangkat_gol').val(data.golRuangAkhir);
                    $('#tmt_gol_baru').val(data.tmtGolAkhir);
                    $('#pangkat_lama').val(data.pangkatAkhir);
                    $('#gol_ruang_lama').val(data.golRuangAwal);
                    $('#tmt_lama').val(data.tmtJabatan);
                    $('#jabatan_terakhir').val(data.jabatanNama);
                    $('#unit_kerja_terakhir').val(data.satuanKerjaKerjaNama);
                    $('#alamat').val(data.alamat);
                    $('#jabatan').val(data.jabatanNama);
                    $('#instansi_induk').val(data.instansiIndukNama);
                    $('#pangkat_terakhir').val(data.pangkatAkhir);
                    // document.getElementById("pangkat_terakhir").value = data.pangkatAkhir;
                    $('#tmt_berhenti').val();
                    $('#tmt_pensiun').val();
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

    $("#btn-bkn").click(function(e) {
        e.preventDefault();
        $("#btn-bkn").prop('disabled', true);

        $.ajax({
            url: $('#url-api-fetch-data-jda-bkn').val(),
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

                    data.listAnak.forEach(data => {
                        $('#nama').val(data.nipLama);
                        // $('#nama_janda_duda_anak').val();
                    });
                    
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
