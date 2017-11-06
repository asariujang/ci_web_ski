	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
<!-- 
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Add Employee</h2>
			</div>
		</div><!--/.row--> 
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<h4 class="title_page">Home > User > Add</h4>
					<div class="panel-body">
						<form action="<?php echo base_url('admin/employee/save_data')?>" id="form"  enctype="multipart/form-data" method="post" class="form-horizontal">
		                    <input type="hidden" value="" name="id"/> 
		                    <div class="form-body">
	                        <div class="form-group">
	                            <label class="control-label col-md-2">Username</label>
	                            <div class="col-md-10">
	                                <input name="username" class="form-control" type="text" value="<?=set_value('username')?>">
	                                <span class="help-block"><?php echo form_error('username'); ?></span>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-md-2">Nama</label>
	                            <div class="col-md-10">
	                                <input name="name" class="form-control" type="text" value="<?=set_value('name')?>">
	                                <span class="help-block"><?php echo form_error('name'); ?></span>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-md-2">Jabatan</label>
	                            <div class="col-md-10">
	                                <input name="position" class="form-control" type="text" value="<?=set_value('position')?>">
	                                <span class="help-block"><?php echo form_error('position'); ?></span>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-md-2">Hak Akses</label>
	                            <div class="col-md-10">
	                                <select name="role" class="form-control">
	                                    <option value="Admin">Admin</option>
	                                    <option value="Teknisi">Teknisi</option>
	                                    <option value="Staff">Staff</option>
	                                </select>
	                                <span class="help-block"><?php echo form_error('role'); ?></span>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-md-2">Foto</label>
	                            <div class="col-md-10">
	                                <input type="file" name="image" size="20" />
	                                <span class="help-block"><?php echo $image_error; ?></span>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-md-2">Password</label>
	                            <div class="col-md-10">
	                                <input name="password" class="form-control" type="text">
	                                <span class="help-block"></span>
	                            </div>
	                        </div>
	                    </div>
					</div>
					<div class="panel-footer">
						<button type="submit" id="btnSave" class="btn btn-info"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
	                </div>
	               	</form>
				</div>
			</div>
		</div><!--/.row-->	
	</div> <!-- End Content -->

</body>
</html>
