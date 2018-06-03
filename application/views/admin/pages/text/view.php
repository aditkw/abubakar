<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Text Website
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Text Website</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Alert -->
		<div class="row form-group">
			<!-- Menampilkan hasil kesalahan validasi dalam proses input dan update data -->
			<?php if ($this->session->flashdata('error')):?>
				<div class="col-md-12 wow fadeInDown">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-close"></i> Error!</h4>
						<ul>
							<?php echo $this->session->flashdata('error'); ?>
						</ul>
					</div><!-- /alert -->
				</div><!-- /col-12 -->
			<?php endif;?>

			<!-- Menampilkan hasil sukses dari proses input dan update data -->
			<?php if ($this->session->flashdata('success')): ?>
				<div class="col-md-12 wow fadeInDown">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Success!</h4>
						<?php echo $this->session->flashdata('success')?>
					</div><!-- /alert -->
				</div><!-- /col-12 -->
			<?php endif; ?>

			<!-- Menampilkan hasil kesalahan dari proses input dan update data -->
			<?php if ($this->session->flashdata('failed')): ?>
				<div class="col-md-12 wow fadeInDown">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-close"></i> Failed!</h4>
						<?php echo $this->session->flashdata('failed')?>
					</div><!-- /alert -->
				</div><!-- /col-12 -->
			<?php endif; ?>
		</div><!-- /row -->

		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<?php echo form_open('admin/text/action/update');?>
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Home</a></li>
							<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Footer</a></li>
							<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Services</a></li>
							<!-- <li class="pull-right"><button type='submit' class="text-muted btn btn-flat btn-primary"><i class="fa fa-save"></i> Save</button></li> -->
						</ul>

						<div class="tab-content">

							<div class="tab-pane active" id="tab_1">
								<div class="form-group">
									<label for="title">Homepage Text</label>
									<textarea name="homepage" class="form-control" placeholder="Text on the home page" rows="5"><?php echo $text->text_home;?></textarea>
								</div>
							</div><!-- /.tab-pane -->

							<div class="tab-pane" id="tab_2">
								<div class="form-group">
									<label for="title">Footer Text</label>
									<textarea name="footer" class="form-control" placeholder="Text on the footer" rows="5"><?php echo $text->text_footer;?></textarea>
								</div>
							</div><!-- /.tab-pane -->

							<div class="tab-pane" id="tab_3">
								<div class="form-group">
									<label for="title">Our Services Text</label>
									<textarea name="homepage" class="form-control" placeholder="Text on the our services page" rows="5"><?php echo $text->text_service;?></textarea>
								</div>
							</div><!-- /.tab-pane -->

						</div><!-- /.tab-content -->
					</div><!-- /.nav-tabs-custom -->
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
						<button type="reset" name="reset" class="btn btn-default btn-flat"><i class="fa fa-refresh"></i> Reset</button>
					</div>
				<?php echo form_close();?>

			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h2 class="modal-title" id="myModalLabel">Update maps location</h2>
			</div>
			<div class="modal-body">
				<h4>1. Go to <a href="http://maps.google.com" target="_blank">http://maps.google.com</a></h4>
				<h4>2. Search location</h4>
				<img class="img img-responsive" src="<?php echo base_url('dist/img/assets/maps.jpg');?>">
				<h4>3. Select menu and "Share or embed map"</h4>
				<img class="img img-responsive" src="<?php echo base_url('dist/img/assets/maps-3.jpg');?>">
				<h4>3. Copy and paste the section marked red to map locations field.</h4>
				<img class="img img-responsive" src="<?php echo base_url('dist/img/assets/maps-4.jpg');?>">
			</div>
			<div class="modal-footer">
			</div>
		</div>

	</div>
</div>
