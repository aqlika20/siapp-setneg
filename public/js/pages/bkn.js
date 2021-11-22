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
                    $('#nama').val(data.nama);
                    $('#tempat_lahir').val(data.tempatLahir);
                    $('#tanggal_lahir').val(data.tglLahir);
                    $('#pendidikan_terakhir').val(data.pendidikanTerakhirNama);
                    $('#instansi').val(data.instansiIndukNama);
                    $('#masa_kerja_gol_tahun').val(data.mkTahun);
                    $('#masa_kerja_gol_bulan').val(data.mkBulan);
                    $('#pangkat_gol').val(data.golRuangAkhir);
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
