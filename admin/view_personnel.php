<div class="modal fade" id="view_modal<?= $row['id']; ?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-info">
			<form method="POST" action="update_query_hr.php">
				<div class="modal-header">
					<h3 class="modal-title"><?= $row['name']; ?>'s Information</h3>
				</div>
				<div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="hidden" name="user_id" value="<?= $row['id']; ?>"/>
                                <input readonly type="text" name="firstname" value="<?= $row['name']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input readonly type="text" name="lastname" value="<?= $row['username']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input readonly type="text" name="firstname" value="<?= $row['password']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Municipality</label>
                                <input readonly type="text" name="lastname" value="<?= $row['municipality']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input readonly type="text" name="firstname" value="<?= $row['email']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact</label>
                                <input readonly type="text" name="lastname" value="<?= $row['contact']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sex</label>
                                <input readonly type="text" name="firstname" value="<?= $row['sex']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                <input readonly type="text" name="lastname" value="<?= $row['position']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Added On</label>
                                <input readonly type="text" name="firstname" value="<?= $row['created_at']; ?>" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Updated At</label>
                                <input readonly type="text" name="lastname" value="<?= $row['updated_at']; ?>" class="form-control" required="required" />
                            </div>
                        </div>
                    </div>
                    
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>