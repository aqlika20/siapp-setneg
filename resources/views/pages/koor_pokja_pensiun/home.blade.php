{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
							<!--begin::Card-->
							<div class="row">
								<div class="col-lg-5 col-xxl-45">
									<!--begin::List Widget 9-->
									<div class="card card-custom card-stretch gutter-b">
										<div class="card-body pt-4">
                                            <div style="margin-bottom: 0px;">
                                                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                                    <li class="nav-item active">
                                                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_3">
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
												<div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3">
													<div class="timeline timeline-6 mt-3">
														<!--begin::Item-->
														<div class="timeline-item align-items-start">
															<!--begin::Label-->
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$bup_non_kpp}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$bup_kpp}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$berhenti_atas_permintaan_sendiri}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$non_bup_JDA_non_kpp}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$non_bup_JDA_kpp}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$berhenti_tidak_hormat}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$anumerta}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$pemberhentian_sementara}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$ralat_keppres_pemberhentian}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$pembatalan_keppress_pemberhentian}}</div>
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
															<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$petikan_keppres_hilang}}</div>
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