{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

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
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs">{{$pengangkatan_jfku}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengangkatan Pejabat Fungsional Ahli Utama melalui Promosi</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$pemberhentian_jfku}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Pejabat Fungsional Keahlian Utama</span>
															</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$perpindahan_jfku}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Perpindahan dari Jabatan fungsional Keahlian Utama</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$ralat_keppres_jfku}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs">{{$pengangkatan_ns}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pengangkatan Pejabat Non Struktural dan Pejabat Lainnya</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$pemberhentian_ns}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Pemberhentian Pejabat Non Struktural dan Pejabat Lainnya</span>
															</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$ralat_keppres_ns}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Perpanjangan Pejabat Non Struktural dan Pejabat Lainnya</div>
														</div>

														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$pembatalan_keppres_ns}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-xs">{{$persetujuan_pengangkatan_staf_khusus}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-lg"></i>
															</div>
															<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$laporan_pemberhentian}}</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-lg"></i>
															</div>
															<div class="timeline-content d-flex">
																<span class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Laporan Pemberhentian</span>
															</div>
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

@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
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
@endsection