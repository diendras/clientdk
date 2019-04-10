 <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
 <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
 <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>

 <div class="row">
     <div class="col-md-12">
         <!-- Timeline Widget -->
         <div class="widget">
             <div class="widget-extra themed-background-dark">

                 <h3 class="widget-content-light">
                     REST - <strong>CLIENT</strong>
                     <small><a href="page_ready_timeline.html"><strong>API</strong></a></small>
                 </h3>
             </div>
             <div class="widget-extra">

                 <font color="orange">
                     <?php echo $this->session->flashdata('hasil'); ?>
                 </font>

                 <div class="row pul">
                     <div class="col-md-12">
                         <div class="mb-md pull-right">
                             <a href="#modal-tambah" data-toggle="modal" title="tambah" class="mb-xs mt-xs mr-xs modal-basic btn btn-success"><i class="fa fa-plus"></i></>
                                 <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modal-tabel"><i class="fa fa-upload"></i></a>
                                 <button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i></button>
                                 <ul class="dropdown-menu" role="menu">
                                     <li><a href="#">PDF</a></li>
                                     <li><a href="#">EXCEL</a></li>
                                 </ul>
                         </div>
                     </div>
                 </div>

                 <div class="table-responsive">
                     <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">
                         <script type="text/javascript">
                             $(document).ready(function() {
                                 $('#example-datatable').DataTable();
                             });
                         </script>

                         <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                             <thead class="center">
                                 <tr role="row">
                                     <th class="sorting_asc center" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 201px;">Tahun akademi</th>
                                     <th class="sorting center" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">NIM</th>
                                     <th class="sorting center" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">KDMK</th>
                                     <th class="sorting center" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Nilai</th>
                                     <th class="sorting_disabled center" rowspan="1" colspan="1" aria-label="Actions" style="width: 97px;">Actions</th>
                                 </tr>
                             </thead>
                             <tbody class="center">
                                 <?php if (is_array($datanilai)) : ?>
                                     <?php
                                        foreach ($datanilai as $dt) {

                                            ?>
                                         <tr>

                                             <td><?php echo $dt->thakd; ?></td>
                                             <td class="center span2"><?php echo $dt->nim; ?></td>

                                             <td><?php echo $dt->kdmk; ?></td>
                                             <td class="center"><?php echo $dt->nilai; ?></td>

                                             <td class="td-actions">
                                                 <center>
                                                     <div class="btn-group action-buttons">


                                                         <a href="<?php echo site_url();  ?>nilai/edit/<?php echo $dt->nim; ?> " class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                         <a href="<?php echo site_url(); ?>/nilai/delete/<?php echo $dt->nim; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                     </div>
                                                 </center>
                                             </td>
                                         </tr>
                                     <?php
                                    }
                                    ?>
                                 <?php endif; ?>
                             </tbody>

                         </table>

                     </div>
                 </div>
             </div>
         </div>
         <!-- END Timeline Widget -->
     </div>

 </div>