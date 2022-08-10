<?php

defined('BASEPATH') or die('No direct script access allowed!');

?>

<div class="page-header">

    <h1>Data Member</h1>

</div>



<div class="row">

    <div class="col-md-12">

        <div style="padding-bottom: 10px;">

            <a href="#tambahbuyers" role="button" class="btn btn-primary" data-toggle="modal">Tambah Data</a>

        </div>

        <!-- Modal Tambah buyers -->

        <div id="tambahbuyers" class="modal fade" tabindex="-1">

            <div class="modal-dialog modal-sm">

                <div class="modal-content">

                    <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('member_c/create') ?>" method="POST" enctype="multipart/form-data">

                        <input type="reset" class="hidden">

                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                            <h3 class="smaller lighter blue no-margin">Tambah Data</h3>

                        </div>

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-12">

								<label>Username</label>
									<input type="text" class="form-control" name="username_member" required>
									<label>Password</label>
									<input type="text" class="form-control" name="password_member" required>
									<label>Nama</label>
									<input type="text" class="form-control" name="nama_member" required>
									<label>Email</label>
									<input type="text" class="form-control" name="email_member" required>
									<label>NO HP</label>
									<input type="text" class="form-control" name="no_hp_member" required>
									<label>Website</label>
									<input type="text" class="form-control" name="website_member" required>
									<fieldset class="form-group">
                        <div class="col-md-12">
						
                            <div class="col-md-12">
							<label>  Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="status_member" name="status_member" value="1" >
                                    <label class="form-check-label" for="status_member">
                                        Member
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="status_member2" name="status_member" value="0" >
                                    <label class="form-check-label" for="status_member2">
                                        Bukan Member
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('status_member') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>
						
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

<th>Id</th>

<th>Username</th>

<th>Password</th>
<th>Nama</th>
<th>Email</th>
<th>No HP</th>
<th>Website</th>
<th>Status</th>
                <th>Action</th>

            </thead>

            <tbody>

			<?php $i = 1; ?>

<?php foreach ($member as $k) : ?>

	<tr>

		<td><?= $i++; ?></td>

		<td><?= $k['id_member'] ?></td>
		<td><?= $k['username_member'] ?></td>
		<td><?= $k['password_member'] ?></td>
		<td><?= $k['nama_member'] ?></td>
		<td><?= $k['email_member'] ?></td>
		<td><?= $k['no_hp_member'] ?></td>
		<td><?= $k['website_member'] ?></td>
		<!-- <td><?= $k['status_member'] ?><br><br> -->
<!-- 		
		<a href="<?= base_url('member_c/updatemember/'); ?><?= $k['id_member']; ?>"  type="button" class="btn  btn-xs" data-toggle="tooltip" data-placement="auto" value="0"title="Ubah Status" onclick="return confirm('Yakin ingin mengubah Status?');"><i class="far "> Ubah</i></a>

			
	<?php if($k->status_member === '1'): ?>
		<a href="<?= base_url('member_c/updatemember/'); ?><?= $k['id_member']; ?>"  type="button" class="btn  btn-xs" data-toggle="tooltip" data-placement="auto" value="0"title="Ubah Status" onclick="return confirm('Yakin ingin mengubah Status?');"><i class="far "> Ubah</i></a>
		<?php else: ?>
			<a href="<?= base_url('member_c/updatemember/'); ?><?= $k['id_member']; ?>"  type="button" class="btn  btn-xs" data-toggle="tooltip" data-placement="auto" value="0"title="Ubah Status" onclick="return confirm('Yakin ingin mengubah Status?');"><i class="far "> Ubah</i></a>
		<?php endif ?>  -->
				
		<?php if($k->status_member === '1'): ?>
			<td class="text-center text-gray">Member</td>
		<?php else: ?>
			<td class="text-center text-green">Bukan member</td>
		<?php endif ?> 

                        <td>

                            <a href="#editbuyers" type="button" class="btn btn-primary btn-xs" data-toggle="modal" id="btn-edit-buyers_materi" data-id_buyers="<?= $k['id_member']; ?>" data-nama_buyers="<?= $k['username_member'] ?>" ><i class="fa fa-edit"> Edit</i></a>

                            <a href="<?= base_url('member_c/delete/'); ?><?= $k['id_member']; ?>" type="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="auto" title="Hapus Surat" onclick="return confirm('Yakin ingin menghapus data');"><i class="far fa-trash-alt"> Hapus</i></a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<div id="editbuyers" class="modal fade" tabindex="-1">

    <div class="modal-dialog modal-sm">

        <div class="modal-content">

            <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('member_c/edit') ?>" method="POST" enctype="multipart/form-data">

                <input type="reset" class="hidden">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h3 class="smaller lighter blue no-margin">Edit Data Member</h3>

                </div>

                <input type="hidden" name="id_buyers_materi" id="edit_id_buyers_materi">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">

                            <!-- <label>Nama buyers</label>

                            <input type="text" class="form-control" name="negara_buyers" id="edit_nama_buyers_materi" required>
							<label>Status buyers</label>

                            <input type="text" class="form-control" name="status_buyers_materi" id="edit_status_buyers_materi" required> -->

							<label>Username</label>
									<input type="text" class="form-control" name="username_member" required>
									<label>Password</label>
									<input type="text" class="form-control" name="password_member" required>
									<label>Nama</label>
									<input type="text" class="form-control" name="nama_member" required>
									<label>Email</label>
									<input type="text" class="form-control" name="email_member" required>
									<label>NO HP</label>
									<input type="text" class="form-control" name="no_hp_member" required>
									<label>Website</label>
									<input type="text" class="form-control" name="website_member" required>
									<fieldset class="form-group">
                        <div class="col-md-12">
						
                            <div class="col-md-12">
							<label>  Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="status_member" name="status_member" value="1" >
                                    <label class="form-check-label" for="status_member">
                                        Member
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="status_member2" name="status_member" value="0" >
                                    <label class="form-check-label" for="status_member2">
                                        Bukan Member
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('status_member') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                        </div>

                    </div>

                    <!-- <div class="row">

                        <div class="col-md-12">

                            <label>Nama buyers (english)</label>

                            <input type="text" class="form-control" name="nama_buyers_en" id="edit_nama_buyers_en" required>

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

        // let nama_buyers_en = $(this).data('nama_buyers_en');



        $('#edit_id_buyers').val(id_buyersi);

        $('#edit_negara_buyers').val(negara_buyers);

        // $('#edit_nama_buyers_en').val(nama_buyers_en);

    })

</script>
