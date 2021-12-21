<?php $__env->startSection('content'); ?>

        <!--begin::Content-->
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
                                <h3 class="card-label">Inbox 
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <!--begin::Body-->
                            <div class="card-body pt-2 pb-0 mt-n3">
                                <div class="tab-content mt-5" id="myTabTables11">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="tab_baru" role="tabpanel" aria-labelledby="tab_baru">
                                        <!--begin::Table-->
                                            <div class="mb-7">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search By NIP" id="no_surat" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Search Form-->
                                            <!--begin: Datatable-->
                                            <table class="datatable cell-border" id="tb_baru">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th>Tanggal Masuk</th>
                                                        <th>No Surat</th>
                                                        <th>Judul Revisi</th>
                                                        <th>Batas Tanggal</th>
                                                        <th>Status Revisi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td>08-09-2021</td>
                                                    <td>516171/M1020/2021</td>
                                                    <td>Revisi surat pengembalian berkas atas nama Dr. Haryono</td>
                                                    <td>08-10-2021</td>
                                                    <td><div>
                                                        <span class="label label-lg label-light-danger label-inline">Belum Revisi</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalSizeSm">
                                                        <i class="flaticon2-poll-symbol"></i> Detail
                                                    </a>
                                                </td>
                                                </tbody>
                                            </table>
                                        <!--end::Table-->
                                    </div>
                                </div>
                            </div>
                            <!--end: Body-->   
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
        <!--end::Content-->

        <!--modal-->

    <div class="modal fade" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Surat Pengengembalian Berkas</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                 </button>
              </div>
              <div class="modal-body">   
                 <div class="pb-6" data-wizard-type="step-content">
                    <h4 class="mb-10 font-weight-bold text-dark"></h4>
                    <!--begin::Input-->
                    <div  id="otherFieldDiv">
                       <h4 class="mb-10 font-weight-bold text-danger">Revisi</h4>
                       <!--begin::Input-->
                       
                       <div class="form-group row">
                          <label class="col-form-label text-right col-lg-3 col-sm-12">Nama/Nomor Surat</label>
                          <div class="col-lg-5 col-md-9 col-sm-12">
                             <div class="input-group date">
                                <input type="text" class="form-control" disabled value="Surat Pengembalian Berkas.pdf"  />
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-9 col-sm-12">
                             <div class="input-group date">
                                <input type="text" class="form-control" disabled value="516171/M1020/2021"  />
                             </div>
                          </div>
                       </div>
                       <!--end::Input-->
                       <!--begin::Input-->
                       <div class="form-group row">
                          <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Proses</label>
                          <div class="col-lg-5 col-md-9 col-sm-12">
                             <div class="input-group date">
                                <input type="text" class="form-control" disabled value="28-09-2021" id="kt_datepicker_8_modal" />
                                <div class="input-group-append">
                                   <span class="input-group-text">
                                      <i class="la la-calendar"></i>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Batas Tanggal Revisi</label>
                            <div class="col-lg-5 col-md-9 col-sm-12">
                                <div class="input-group date">
                                    <input type="text" class="form-control" disabled value="28-10-2021" id="kt_datepicker_8_modal" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Catatan</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                               <div class="input-group date">
                                  <textarea class="form-control" disabled rows="10"> Catatan </textarea>
                               </div>
                            </div>
                        </div>
                       
                       <div class="row">
                          <div class="col-lg-9 ml-lg-auto">
                             <A type="submit" class="btn btn-light-danger mr-2" href="#">Revisi</a>
                          </div>
                       </div>
                       <!--begin::Input-->
                    </div>
                 </div>           
              </div>			               
           </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<style>
    td {  
        background-color: #86dcec;    
        
    }
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script> 
    $(function(){
        var education_card = new KTCard('education_card');
    })
</script>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/jf_ahli/inbox/revisi.blade.php ENDPATH**/ ?>