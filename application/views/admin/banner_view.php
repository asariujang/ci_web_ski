<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<h4 class="title_page">Slider <a class="btn btn-sm btn-info" 
                    style="float: right; background: red;" href="<?php echo base_url('home') ?>" title="Preview" target="_blank"><i class="glyphicon glyphicon-eye-open"></i></a></h4>
				<div class="panel-heading">
				    <a href="banner/add" class="btn btn-success" onclick="add()"><i class="glyphicon glyphicon-plus"></i>Add</a>
					<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i>Reload</button>
				</div>
				<div class="panel-body">
					<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
			            <thead>
			                <tr>
			                	<th width="20%">Image</th>
			                    <th>Status</th>
			                    <th style="width:70px;">Action</th>
			                </tr>
			            </thead>
			            <tbody></tbody>
			        </table>
				</div>
			</div>
		</div>
	</div>
</div> 

