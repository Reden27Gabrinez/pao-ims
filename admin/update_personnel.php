<div class="modal fade" id="update_modal<?= $row['id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="class.php">
				<div class="modal-header">
					<h3 class="modal-title"><?= $row['name']; ?>'s Information</h3>
				</div>
				<div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="hidden" name="personnel_id" value="<?= $row['id']; ?>"/>
                                <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?= $row['username']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="" class="form-control" required="required"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?= $row['email']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" name="contact" value="<?= $row['contact']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sex</label>
                                <input type="text" name="sex" value="<?= $row['sex']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="position" value="<?= $row['position']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>
                    
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update_personnel" class="btn btn-warning"><i class="fa fa-edit"></i> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>