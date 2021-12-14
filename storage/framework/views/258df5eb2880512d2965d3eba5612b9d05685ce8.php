<?php $__env->startSection('content'); ?>
							<!--begin::Card-->
							<div class="row">
								<div class="col-lg-4">
									<div class="card card-custom card-stretch gutter-b">
										<div class="card-body pt-4">
                                            <div style="margin-bottom: 0px;">
                                                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_3_3" >
                                                            <span class="nav-text font-size-xs">JFKU</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_3">
                                                            <span class="nav-text font-size-xs">Non Struktural & Pejabat Lainnya</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_3">
                                                            <span class="nav-text font-size-xs">Pengangkatan Staf Khusus</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
										
										    <div class="tab-content mt-5" id="myTabContent">
												<div style="margin-bottom: 0px;">
													<span class="timeline-label font-weight-bolder text-warning font-size-lg">Jumlah Surat Usulan</span>
												</div>
												<div class="tab-pane fade show active" id="kt_tab_pane_3_3" role="tabpanel" aria-labelledby="kt_tab_pane_3_3">
													<div class="timeline timeline-6 mt-3">
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pengangkatan_jfku); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengangkatan Pejabat Fungsional Ahli Utama melalui Promosi</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberhentian_jfku); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Pejabat Fungsional Keahlian Utama</span>
															</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($perpindahan_jfku); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Perpindahan dari Jabatan fungsional Keahlian Utama</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_jfku); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Usulan Lainnya</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="kt_tab_pane_4_3" role="tabpanel" aria-labelledby="kt_tab_pane_4_3">
													<div class="timeline timeline-6 mt-3">
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pengangkatan_ns); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengangkatan Pejabat Non Struktural dan Pejabat Lainnya</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberhentian_ns); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Pejabat Non Struktural dan Pejabat Lainnya</span>
															</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_ns); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Perpanjangan Pejabat Non Struktural dan Pejabat Lainnya</div>
														</div>

														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pembatalan_keppres_ns); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Usulan Lainnya Non Struktural dan Pejabat Lainnya</div>
														</div>
															
													</div>
												</div>
                                                <div class="tab-pane fade" id="kt_tab_pane_5_3" role="tabpanel" aria-labelledby="kt_tab_pane_5_3">
													<div class="timeline timeline-6 mt-3">
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pengangkatan_pejabat_lainnya); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberhentian_pejabat_lainnya); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Laporan Pemberhentian</span>
															</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_jabatan_lainnya); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Ralat Keppres Jabatan Lainnya</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pembatalan_keppres_jabatan_lainnya); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pembatalan Keppres Jabatan Lainnya</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($persetujuan_pengangkatan_staf_khusus); ?></div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-info icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga (Produk Surat Dinas)</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
	var users =  <?php echo json_encode($pengangkatan_jfku) ?>;
	
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/koor_pokja/home.blade.php ENDPATH**/ ?>