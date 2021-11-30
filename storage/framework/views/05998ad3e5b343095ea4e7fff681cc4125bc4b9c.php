



<?php $__env->startSection('content'); ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin card-->
			<div class="card card-custom">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label">Atur Dokumen
						<span class="d-block text-muted pt-2 font-size-sm">List dokumen pengajuan</span></h3>
					</div>
					<div class="card-toolbar">
							<div class="input-icon">
								<input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
								<span>
									<i class="flaticon2-search-1 text-muted"></i>
								</span>
						</div>
						<!--begin::Dropdown-->
						<!--end::Dropdown-->
						<!--begin::Button-->
						<!-- Modal-->
						<!--end::Button-->
					</div>
				</div>
				<div class="card-body">
					<!--begin: Search Form-->
					<!--begin::Search Form-->
					<!--end::Search Form-->
					<!--end: Search Form-->
					<!--begin: Datatable-->
					<div class="table-responsive">
					<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
						<thead>
							<tr>
								<th title="Field #1">Nama Dokumen</th>
								<th title="Field #2">Oleh</th>
								<th title="Field #3">Tanggal Upload</th>
								<th title="Field #4">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Dokumen Pengangkatan</td>
								<td>Anang Boni</td>
								<td>
									<div style="color: #FFA800;">13 Des 2020</div>
								</td>
								<td>
									<button type="button" class="btn btn-light-primary btn-icon" data-toggle="tooltip" title="Detail"><i class="la la-files-o"></i></button>
									<button type="button" class="btn btn-light-warning btn-icon" data-toggle="tooltip" title="Proses Usulan"><i class="la la-edit"></i></button>
									<button type="button" class="btn btn-light-danger btn-icon" data-toggle="tooltip" title="Hapus Usulan"><i class="la la-trash"></i></button>
										<script>
											$(function () {
												$('[data-toggle="tooltip"]').tooltip()
												})
										</script>
								</td>
							</tr>
							<tr>
								<td>Dokumen Pemberhentian</td>
								<td>Joshua Aidil</td>
								<td>
									<div style="color: #FFA800;">17 Des 2020</div>
								</td>
								<td>
									<button type="button" class="btn btn-light-primary btn-icon" data-toggle="tooltip" title="Detail"><i class="la la-files-o"></i></button>
									<button type="button" class="btn btn-light-warning btn-icon" data-toggle="tooltip" title="Proses Usulan"><i class="la la-edit"></i></button>
									<button type="button" class="btn btn-light-danger btn-icon" data-toggle="tooltip" title="Hapus Usulan"><i class="la la-trash"></i></button>
										<script>
											$(function () {
												$('[data-toggle="tooltip"]').tooltip()
												})
										</script>
								</td>
							</tr><tr>
								<td>Dokumen Pemindahan</td>
								<td>Sapriadi</td>
								<td>
									<div style="color: #FFA800;">06 Des 2020</div>
								</td>
								<td>
									<button type="button" class="btn btn-light-primary btn-icon" data-toggle="tooltip" title="Detail"><i class="la la-files-o"></i></button>
									<button type="button" class="btn btn-light-warning btn-icon" data-toggle="tooltip" title="Proses Usulan"><i class="la la-edit"></i></button>
									<button type="button" class="btn btn-light-danger btn-icon" data-toggle="tooltip" title="Hapus Usulan"><i class="la la-trash"></i></button>
										<script>
											$(function () {
												$('[data-toggle="tooltip"]').tooltip()
												})
										</script>
								</td>
							</tr><tr>
								<td>Dokumen Pembebasan</td>
								<td>Hutagalung Mahadi</td>
								<td>
									<div style="color: #FFA800;">31 Nov 2020</div>
								</td>
								<td>
									<button type="button" class="btn btn-light-primary btn-icon" data-toggle="tooltip" title="Detail"><i class="la la-files-o"></i></button>
									<button type="button" class="btn btn-light-warning btn-icon" data-toggle="tooltip" title="Proses Usulan"><i class="la la-edit"></i></button>
									<button type="button" class="btn btn-light-danger btn-icon" data-toggle="tooltip" title="Hapus Usulan"><i class="la la-trash"></i></button>
										<script>
											$(function () {
												$('[data-toggle="tooltip"]').tooltip()
												})
										</script>
								</td>
							</tr>
						</tr><tr>
							<td>Dokumen Pemberhentian</td>
							<td>Murtadin Mahmud</td>
							<td>
								<div style="color: #FFA800;"> 10 Des 2020</div>
							</td>
							<td>
								<button type="button" class="btn btn-light-primary btn-icon" data-toggle="tooltip" title="Detail"><i class="la la-files-o"></i></button>
								<button type="button" class="btn btn-light-warning btn-icon" data-toggle="tooltip" title="Proses Usulan"><i class="la la-edit"></i></button>
								<button type="button" class="btn btn-light-danger btn-icon" data-toggle="tooltip" title="Hapus Usulan"><i class="la la-trash"></i></button>
									<script>
										$(function () {
											$('[data-toggle="tooltip"]').tooltip()
											})
									</script>
							</td>
						</tr>
						</tbody>
					</table>
					</div>
					<!--end: Datatable-->
				</div>
			</div>
			<!--end card-->
			<!--begin::Row-->
			
			<!--end::Row-->
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
	
	Highcharts.chart('chart', {
		title: {
			text: 'New User Growth, 2019'
		},
		subtitle: {
			text: 'Source: codechief.org'
		},
			xAxis: {
			categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
		},
		yAxis: {
			title: {
				text: 'Number of New Users'
			}
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle'
		},
		plotOptions: {
			series: {
				allowPointSelect: true
			}
		},
		series: [{
			name: 'New Users',
			data: users
		}],
		responsive: {
			rules: [{
				condition: {
					maxWidth: 500
				},
				chartOptions: {
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom'
					}
				}
			}]
		}
	});

    // var url = 'http://my-json-server.typicode.com/apexcharts/apexcharts.js/yearly';

    // $.getJSON(url, function(response) {
    //     chart.updateSeries([{
    //         name: 'Sales',
    //         data: response
    //     }])
    // });

    // var options = {
    //     chart: {
    //         height: 350,
    //         type: 'line',
    //     },
    //     dataLabels: {
    //         enabled: false
    //     },
    //     series: [],
    //     noData: {
    //         text: 'No Data'
    //     }
    // }

    // var chart = new ApexCharts(
    //     document.querySelector("#chart_3"),
    //     options
    // );

    // chart.render();


</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/koor_pokja_pensiun/atur_dokumen.blade.php ENDPATH**/ ?>