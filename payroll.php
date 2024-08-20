<div class="container-fluid " >
			<div class="col-lg-12">
				
				<br />
				<br />
				<div class="card">
					<div class="card-header">
						<span><b>Payroll List</b></span>
						<button class="btn btn-primary btn-sm btn-block col-md-3 float-right" type="button" id="new_payroll_btn"><span class="fa fa-plus"></span> Add Payroll</button>
					</div>
					<div class="card-body">
						<table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Ref No</th>
									<th>Date From</th>
									<th>Date To</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									
									$payroll=$conn->query("SELECT * FROM payroll order by date(date_from) desc") or die(mysqli_error());
									while($row=$payroll->fetch_array()){
								?>
								<tr>
									<td><?php echo $row['ref_no']?></td>
									<td><?php echo date("M d, Y",strtotime($row['date_from'])) ?></td>
									<td><?php echo date("M d, Y",strtotime($row['date_to'])) ?></td>
									<?php if($row['status'] == 0): ?>
									<td class="text-center"><span class="badge badge-primary">New</span></td>
									<?php else: ?>
									<td class="text-center"><span class="badge badge-success">Calculated</span></td>
									<?php endif ?>
									<td>
										<center>
									<?php if($row['status'] == 0): ?>
										 <button class="btn btn-sm btn-outline-primary calculate_payroll" data-id="<?php echo $row['id']?>" type="button">Calculate</button>
									<?php else: ?>
										 <button class="btn btn-sm btn-outline-primary view_payroll" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-eye"></i></button>
									<?php endif ?>

										<button class="btn btn-sm btn-outline-primary edit_payroll" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-edit"></i></button>
										<button class="btn btn-sm btn-outline-danger remove_payroll" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-trash"></i></button>
										</center>
									</td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
			