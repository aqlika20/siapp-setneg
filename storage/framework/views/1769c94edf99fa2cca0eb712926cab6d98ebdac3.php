



<?php $__env->startSection('content'); ?>

							<div class="row">
								<div class="col-lg-5 col-xxl-45">
									<!--begin::List Widget 9-->
									<div class="card card-custom card-stretch gutter-b">
										<div class="card-body pt-4">
                                            <div style="margin-bottom: 0px;">
                                                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <span class="nav-text font-size-xs">Pengangkatan</span>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Pengangkatan dan Pemberhentian Pejabat Fungsional Keahlian Utama</a>
                                                            <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3">Pengangkatan dan Pemberhentian Pejabat Non Struktural dan Pejabat Lainnya</a>
                                                            <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3">Persetujuan Pengangkatan Staf Khusus Menteri/Kepala Lembaga</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_3">
                                                            <span class="nav-text font-size-xs">Kenaikan Pangkat</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_1_3">
                                                            <span class="nav-text font-size-xs">pemberhentian</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
										
											<!--begin::Timeline-->
										    <div class="tab-content mt-5" id="myTabContent">
												<div style="margin-bottom: 0px;">
													<span class="timeline-label font-weight-bolder text-warning font-size-lg">Jumlah Surat Usulan</span>
												</div>
												<div class="tab-pane fade show active" id="kt_tab_pane_3_3" role="tabpanel" aria-labelledby="kt_tab_pane_3_3">
													<div class="timeline timeline-6 mt-3">
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pengangkatan_jfku); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengangkatan Pejabat Fungsional Keahlian Utama</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberhentian_jfku); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Content-->
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Pejabat Fungsional Keahlian Utama</span>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($perpindahan_jfku); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Perpindahan Pejabat Fungsional Keahlian Utama</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_jfku); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Ralat Keppres Jabatan Fungsional Keahlian Utama</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pembatalan_keppres_jfku); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pembatalan Keppres Jabatan Fungsional Keahlian Utama</div>
															<!--end::Desc-->
														</div>
															
													</div>
												</div>
												<div class="tab-pane fade" id="kt_tab_pane_4_3" role="tabpanel" aria-labelledby="kt_tab_pane_4_3">
													<div class="timeline timeline-6 mt-3">
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pengangkatan_ns); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengangkatan Pejabat Non Struktural</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberhentian_ns); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Content-->
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Pejabat Non Struktural</span>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_ns); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Ralat Keppres Jabatan Non Struktural</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pembatalan_keppres_ns); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pembatalan Keppres Jabatan Non Struktural</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														
														<!--end::Item-->
														<!--begin::Item-->
														
															
													</div>
												</div>
                                                <div class="tab-pane fade" id="kt_tab_pane_5_3" role="tabpanel" aria-labelledby="kt_tab_pane_5_3">
													<div class="timeline timeline-6 mt-3">
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pengangkatan_pejabat_lainnya); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengangkatan Pejabat Lainnya</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberhentian_pejabat_lainnya); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Content-->
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Pejabat Lainnya</span>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_jabatan_lainnya); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Ralat Keppres Jabatan Lainnya</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($pembatalan_keppres_jabatan_lainnya); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pembatalan Keppres Jabatan Lainnya</div>
															<!--end::Desc-->
														</div>
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs"><?php echo e($persetujuan_pengangkatan_staf_khusus); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-info icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga (Produk Surat Dinas)</div>
															<!--end::Desc-->
														</div>
															
													</div>
												</div>

												<div class="tab-pane" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">
													<div class="timeline timeline-6 mt-3">
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberian_kenaikan_pangkat); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberian Kenaikan Pangkat</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pembatalan_keppres_kenaikan_pangkat); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Content-->
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pembatalan Keppres Kenaikan Pangkat</span>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pengesahan_kenaikan_pangkat); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengesahan Kenaikan Pangkat</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_kepangkatan); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Ralat Keppres Kepangkatan </div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<!--end::Item-->
														<!--begin::Item-->
													</div>
												</div>
												<div class="tab-pane fade" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3">
													<div class="timeline timeline-6 mt-3">
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($bup_non_kpp); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">BUP Non KPP</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($bup_kpp); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Content-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">BUP KPP</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($berhenti_atas_permintaan_sendiri); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Berhenti Atas Permintaan Sendiri</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($non_bup_JDA_non_kpp); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Non BUP Janda/Duda/Anak non KPP</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($non_bup_JDA_kpp); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Non BUP Janda/Duda/Anak KPP</div>

															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($berhenti_tidak_hormat); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-info icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Berhenti Tidak Dengan Hormat</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($anumerta); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Anumerta</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pemberhentian_sementara); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Sementara</div>
															<!--end::Desc-->
														</div>
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($ralat_keppres_pemberhentian); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Ralat Keppres Pemberhentian</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($pembatalan_keppress_pemberhentian); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Content-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pembatalan Keppres Pemberhentian</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg"><?php echo e($petikan_keppres_hilang); ?></div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-lg"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Petikan Keppres yang Hilang/Rusak</div>

															<!--end::Desc-->
														</div>
													</div>
												</div>
											</div>		
												<!--end::Item-->
											<!--end::Timeline-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end: List Widget 9-->
								</div>
								
								<!--begin::Card-->
								<!--end::Card-->
								<!--begin::Card-->
								
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<!--end::Card-->

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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp2\siapp\resources\views/pages/jf_ahli/home.blade.php ENDPATH**/ ?>