<?php if ($_settings->chk_flashdata('success')) : ?>
	<script>
		alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
	</script>
<?php endif; ?>

<style>
	img#cimg,
	img#cimg2,
	img#cimg3 {
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Informasi bot</h5>
			<!-- <div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_department" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div> -->
		</div>
		<div class="card-body">
			<form action="" id="system-frm">
				<div id="msg" class="form-group"></div>
				<div class="form-group">
					<label for="name" class="control-label">Nama sistem</label>
					<input type="text" class="form-control form-control-sm" name="name" id="name" value="<?php echo $_settings->info('name') ?>">
				</div>
				<div class="form-group">
					<label for="short_name" class="control-label">Nama bot</label>
					<input type="text" class="form-control form-control-sm" name="short_name" id="short_name" value="<?php echo  $_settings->info('short_name') ?>">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Pesan pengenalan</label>
					<textarea name="intro" id="" cols="30" rows="2" class="form-control"><?php echo  $_settings->info('intro') ?></textarea>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Pesan tidak ada respon</label>
					<textarea name="no_result" id="" cols="30" rows="2" class="form-control"><?php echo  $_settings->info('no_result') ?></textarea>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Logo bot</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
						<label class="custom-file-label" for="customFile">Pilih gambar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Avatar bot</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="bot_avatar" onchange="displayImg2(this,$(this))">
						<label class="custom-file-label" for="customFile">Pilih gambar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="<?php echo validate_image($_settings->info('bot_avatar')) ?>" alt="" id="cimg2" class="img-fluid img-thumbnail">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Avatar user</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="user_avatar" onchange="displayImg3(this,$(this))">
						<label class="custom-file-label" for="customFile">Pilih gambar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="<?php echo validate_image($_settings->info('user_avatar')) ?>" alt="" id="cimg3" class="img-fluid img-thumbnail">
				</div>

			</form>
		</div>
		<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary" form="system-frm">Update</button>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
	function displayImg(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#cimg').attr('src', e.target.result);
				_this.siblings('.custom-file-label').html(input.files[0].name)
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg2(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				_this.siblings('.custom-file-label').html(input.files[0].name)
				$('#cimg2').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg3(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				_this.siblings('.custom-file-label').html(input.files[0].name)
				$('#cimg3').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
	$(document).ready(function() {
		$('.summernote').summernote({
			height: 200,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
				['fontname', ['fontname']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ol', 'ul', 'paragraph', 'height']],
				['table', ['table']],
				['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
			]
		})
	})
</script>