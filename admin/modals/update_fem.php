<div class="modal fade bd-example-modal-lg" id="update_modal<?= $row['id']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
		<div class="modal-content bg-info">
			<form method="POST" action="class.php">
				<div class="modal-header">
					<h3 class="modal-title"><?= $row['name_owner']; ?>'s Information</h3>
				</div>
				<div class="modal-body">



                <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" name="fem_id" value="<?= $row['id']; ?>">
                                    <label for="">Name of Owner</label>
                                    <input readonly name="name_owner" type="text" value="<?= $row['name_owner']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Barangay | Location</label>
                                    <input readonly name="location" value="<?= $row['location']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Type of Owner</label>
                                <input readonly type="text" value="<?= $row['type_owner']; ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Facility | Equipment | Machinery</label>
                                <input readonly type="text" value="<?= $row['fem']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No. of Units</label>
                                    <input readonly name="units" type="number" value="<?= $row['units']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Rated Capacity</label>
                                    <input readonly name="capacity" value="<?= $row['capacity']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Facility Brand</label>
                                    <input readonly name="fac_brand" value="<?= $row['brand']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Mode of Aquisition</label>
                                <input readonly type="text" value="<?= $row['mode_aquisition']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Cost of Aquisition</label>
                                    <input readonly name="cost_acqui" value="<?= $row['cost_aquisition']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Year Aquired</label>
                                    <input readonly name="yr_acqui" value="<?= $row['yr_acquired']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Use of Facility</label>
                                <input readonly type="text" value="<?= $row['use_facility']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                             <div>
                                <div class="form-group">
                                <label>Facility Condition</label>
                                <input readonly type="text" value="<?= $row['facility_cond']; ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Commodity</label>
                                    <input readonly type="text" value="<?= $row['commodity']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Engine Brand</label>
                                    <input readonly name="eng_brand" value="<?= $row['engine_brand']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Engine Horsepower (Hp)</label>
                                    <input readonly name="eng_hp" value="<?= $row['horsepower']; ?>" type="text" class="form-control">
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