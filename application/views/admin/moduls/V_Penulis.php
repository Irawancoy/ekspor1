<?php

defined('BASEPATH') or die('No direct script access allowed!');

?>

<div class="page-header">

    <h1>Penulis</h1>

</div>



<div class="row">

    <div class="col-md-12">

        <div style="padding-bottom: 10px;">

            <a href="#tambahkategori" role="button" class="btn btn-primary" data-toggle="modal">Tambah Data</a>

        </div>

        <!-- Modal Tambah penulis -->

        <div id="tambahkategori" class="modal fade" tabindex="-1">

            <div class="modal-dialog modal-sm">

                <div class="modal-content">

                    <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('penulis/create') ?>" method="POST" enctype="multipart/form-data">

                        <input type="reset" class="hidden">

                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                            <h3 class="smaller lighter blue no-margin">Tambah Data</h3>

                        </div>

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-12">

                                    <label>Nama Penulis</label>

                                    <input type="text" class="form-control" name="nama_penulis" required>
									<label>deskripsi</label>
									<input type="text" class="form-control" name="deskripsi_penulis" required>
									<label>Website</label>
									<input type="text" class="form-control" name="website_penulis" required>
									<label>Email</label>
									<input type="text" class="form-control" name="email_penulis" required>

                                </div>

                            </div>

                          

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger btn-sm pull-right" data-dismiss="modal">Cancel</button>

                            <button type="submit" class="btn btn-success btn-sm pull-right" style="margin-right: 5px;">Submit</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>



        <table class="table table-striped table-bordered table-hover" id="datatablesPengalaman">

            <thead>

                <th>No</th>

                <th>Nama Penulis</th>
				
                <th>Deskripsi</th>

                <!-- <th>Nama penulis (english)</th> -->
				<th>Website</th>
				<th>Email</th>

                <th>Action</th>

            </thead>

            <tbody>

                <?php $i = 1; ?>

                <?php foreach ($penulis as $k) : ?>

                    <tr>

                        <td><?= $i++; ?></td>

                        <td><?= $k['nama_penulis'] ?></td>
						<td><?= $k['deskripsi_penulis'] ?></td>
						<td><?= $k['website_penulis'] ?></td>
						<td><?= $k['email_penulis'] ?></td>
						
					

                        <!-- <td><?= $k['nama_kategori_en'] ?></td> -->

                        <td>

                            <a href="#editkategori" type="button" class="btn btn-primary btn-xs" data-toggle="modal" id="btn-edit-penulis" data-id_kategori="<?= $k['id_penulis']; ?>" data-nama_kategori="<?= $k['deskripsi_penulis'] ?>" ><i class="fa fa-edit"> Edit</i></a>

                            <a href="<?= base_url('penulis/delete/'); ?><?= $k['id_penulis']; ?>" type="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="auto" title="Hapus Surat" onclick="return confirm('Yakin ingin menghapus data');"><i class="far fa-trash-alt"> Hapus</i></a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<div id="editkategori" class="modal fade" tabindex="-1">

    <div class="modal-dialog modal-sm">

        <div class="modal-content">

            <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('penulis/edit') ?>" method="POST" enctype="multipart/form-data">

                <input type="reset" class="hidden">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h3 class="smaller lighter blue no-margin">Edit Penulis</h3>

                </div>

                <input type="hidden" name="id_kategori_materi" id="edit_id_kategori_materi">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">

                       
							<label>Nama Penulis</label>

<input type="text" class="form-control" name="nama_penulis" required>
<label>Deskripsi</label>
<input type="text" class="form-control" name="deskripsi_penulis" required>
<label>Website</label>
<input type="text" class="form-control" name="website_penulis" required>
<label>Email</label>
<input type="text" class="form-control" name="email_penulis" required>

                        </div>

                    </div>

                 

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-danger btn-sm pull-right" data-dismiss="modal">Cancel</button>

                    <button type="submit" class="btn btn-success btn-sm pull-right" style="margin-right: 5px;">Submit</button>

                </div>

            </form>

        </div>

    </div>

</div>

<script>

    $(document).on('click', '#btn-edit-penulis', function() {

        let id_penulis = $(this).data('id_penulis');

        let nama_penulis = $(this).data('nama_penulis');
		let deskripsi_penulis = $(this).data('deskripsi_penulis');
		let website_penulis = $(this).data('website_penulis');
		let email_penulis = $(this).data('email_penulis');

        // let nama_kategori_en = $(this).data('nama_kategori_en');



        $('#edit_id_penulis').val(id_penulis);

        $('#edit_nama_penulis').val(nama_penulis);
		
        $('#edit_deskripsi_penulis').val(deskripsi_penulis);
		
        $('#edit_website_penulis').val(website_penulis);
		
        $('#edit_email_penulis').val(email_penulis);

        // $('#edit_nama_kategori_en').val(nama_kategori_en);

    })

</script>
