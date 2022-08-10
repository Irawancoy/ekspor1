<?php

defined('BASEPATH') or die('No direct script access allowed!');

?>

<div class="page-header">

    <h1>Data Buyers</h1>

</div>



<div class="row">

    <div class="col-md-12">

        <div style="padding-bottom: 10px;">

            <a href="#tambahkategori" role="button" class="btn btn-primary" data-toggle="modal">Tambah Data</a>

        </div>

        <!-- Modal Tambah Kategori -->

        <div id="tambahkategori" class="modal fade" tabindex="-1">

            <div class="modal-dialog modal-sm">

                <div class="modal-content">

                    <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('Data_buyers/create') ?>" method="POST" enctype="multipart/form-data">

                        <input type="reset" class="hidden">

                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                            <h3 class="smaller lighter blue no-margin">Tambah Data</h3>

                        </div>

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-12">

                                    <label>Negara</label>

                                    <input type="text" class="form-control" name="negara_buyers" required>
									<label>Nama perusahaan</label>
									<input type="text" class="form-control" name="nama_perusahaan_buyers" required>
									<label>Email</label>
									<input type="text" class="form-control" name="email_buyers" required>
									<label>Produk</label>
									<input type="text" class="form-control" name="produk_buyers" required>

                                </div>

                            </div>

                            <!-- <div class="row">

                                <div class="col-md-12">

                                    <label>Nama Kategori (english)</label>

                                    <input type="text" class="form-control" name="nama_kategori_en" required>

                                </div>

                            </div> -->

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

                <th>Negara</th>
				
                <th>Nama Perusahaan</th>

                <!-- <th>Nama Kategori (english)</th> -->
				<th>Email</th>
				<th>Produk</th>
				<th>Dilihat</th>

                <th>Action</th>

            </thead>

            <tbody>

                <?php $i = 1; ?>

                <?php foreach ($data_buyers as $k) : ?>

                    <tr>

                        <td><?= $i++; ?></td>

                        <td><?= $k['negara_buyers'] ?></td>
						<td><?= $k['nama_perusahaan_buyers'] ?></td>
						<td><?= $k['email_buyers'] ?></td>
						<td><?= $k['produk_buyers'] ?></td>
						<td><?= $k['dilihat'] ?></td>

						
					

                        <!-- <td><?= $k['nama_kategori_en'] ?></td> -->

                        <td>

                            <a href="#editkategori" type="button" class="btn btn-primary btn-xs" data-toggle="modal" id="btn-edit-kategori_materi" data-id_kategori="<?= $k['id_buyers']; ?>" data-nama_kategori="<?= $k['nama_perusahaan_buyers'] ?>" ><i class="fa fa-edit"> Edit</i></a>

                            <a href="<?= base_url('Data_buyers/delete/'); ?><?= $k['id_buyers']; ?>" type="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="auto" title="Hapus Surat" onclick="return confirm('Yakin ingin menghapus data');"><i class="far fa-trash-alt"> Hapus</i></a>

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

            <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('Data_buyers/edit') ?>" method="POST" enctype="multipart/form-data">

                <input type="reset" class="hidden">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h3 class="smaller lighter blue no-margin">Edit Data Buyers</h3>

                </div>

                <input type="hidden" name="id_kategori_materi" id="edit_id_kategori_materi">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">

                            <!-- <label>Nama Kategori</label>

                            <input type="text" class="form-control" name="negara_buyers" id="edit_nama_kategori_materi" required>
							<label>Status Kategori</label>

                            <input type="text" class="form-control" name="status_kategori_materi" id="edit_status_kategori_materi" required> -->

							<label>Negara</label>

<input type="text" class="form-control" name="negara_buyers" required>
<label>Nama perusahaan</label>
<input type="text" class="form-control" name="nama_perusahaan_buyers" required>
<label>Email</label>
<input type="text" class="form-control" name="email_buyers" required>
<label>Produk</label>
<input type="text" class="form-control" name="produk_buyers" required>

                        </div>

                    </div>

                    <!-- <div class="row">

                        <div class="col-md-12">

                            <label>Nama Kategori (english)</label>

                            <input type="text" class="form-control" name="nama_kategori_en" id="edit_nama_kategori_en" required>

                        </div>

                    </div> -->

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

    $(document).on('click', '#btn-edit-data_buyers', function() {

        let id_buyers = $(this).data('id_buyers');

        let negara_buyers = $(this).data('negara_buyers');

        // let nama_kategori_en = $(this).data('nama_kategori_en');



        $('#edit_id_buyers').val(id_buyersi);

        $('#edit_negara_buyers').val(negara_buyers);

        // $('#edit_nama_kategori_en').val(nama_kategori_en);

    })

</script>
