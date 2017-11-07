	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<h4 class="title_page"> Edit Page Content </h4>
					<form action="<?php echo base_url('admin/about/update')?>" id="form"  enctype="multipart/form-data" method="post" class="form-horizontal">
						<div class="panel-body">
		                    <input type="hidden" value="<?php echo $about->id ?>" name="id"/> 
		                    <input type="hidden" value="<?php echo $about->file_name ?>" name="file_name"/> 
		                    <input type="hidden" value="<?php echo $about->img_url ?>" name="img_url"/>
		                    <div class="form-body">
		                        <div class="form-group">
                                    <label class="control-label col-md-2">Language</label>
                                    <div class="col-md-10">
                                         <select name="language" class="form-control" >
                                            <option <?php if ($about->language == "en") echo "selected"; ?> value="en">En</option>
                                            <option <?php if ($about->language == "id") echo "selected"; ?> value="id">Id</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

		                        <div class="form-group">
		                            <label class="control-label col-md-2">Image (1290 x 358)</label>
		                            <div class="col-md-2">
		                            	<img src="<?php echo base_url($about->img_url) ?>" class="img_thumb_edit"></i>
		                            </div>

		                            <div class="col-md-3">
		                                <input type="file" name="image" size="20" />
		                                <span class="help-block">
		                                	<?php 
		                                		if ($image_error) {
		                                			echo $image_error; }  
		                                		else { 
		                                			echo form_error('image'); } 
		                                	?>
		                                </span>
		                            </div>
		                        </div>

		                        <div class="form-group">
                                    <label class="control-label col-md-2">Description</label>
                                    <div class="col-md-10">
                                        <textarea name="description" id="description" class="form-control" type="text" rows="6"><?php echo $about->description ?></textarea>
                                        <span class="help-block"><?php echo form_error('description'); ?></span>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="control-label col-md-2">Visson</label>
                                    <div class="col-md-10">
                                        <textarea name="visson" id="visson" class="form-control" type="text" rows="6"><?php echo $about->vission ?></textarea>
                                        <span class="help-block"><?php echo form_error('visson'); ?></span>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="control-label col-md-2">Mission</label>
                                    <div class="col-md-10">
                                        <textarea name="mission" id="mission" class="form-control" type="text" rows="6"><?php echo $about->mission ?></textarea>
                                        <span class="help-block"><?php echo form_error('mission'); ?></span>
                                    </div>
                                </div> 
						</div>
						<div class="panel-footer">
							<button type="submit" id="btnSave" class="btn btn-info"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
		                </div>
	               	</form>
				</div>
			</div>
		</div>
	</div> 
</body>
</html>

