<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-allowances">
				<div class="card">
					<div class="card-header">
						  Allowances Form
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Allowance</label>
								<textarea name="allowance" id="" cols="30" rows="2" class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Description</label>
								<textarea name="description" id="" cols="30" rows="2" class="form-control" required></textarea>
							</div>
							
							
							
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Allowance Information</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$allowances = $conn->query("SELECT * FROM allowances order by id asc");
								while($row=$allowances->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									
									<td class="">
										 <p>Name: <b><?php echo $row['allowance'] ?></b></p>
										 <p class="truncate"><small>Description: <b><?php echo $row['description'] ?></b></small></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_allowances" type="button" data-id="<?php echo $row['id'] ?>" data-allowance="<?php echo $row['allowance'] ?>" data-description="<?php echo $row['description'] ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_allowances" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>