<div class="modal fade bd-example-modal-lg" id="update_modal<?= $row['id']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
		<div class="modal-content bg-secondary">
			<form method="POST" action="class.php">
				<div class="modal-header">
					<h3 class="modal-title"><?= $row['name_owner']; ?>'s Information</h3>
				</div>
				<div class="modal-body">



                <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="hidden" name="fem_id" value="<?= $row['id']; ?>">
                                    <label for="">Name of Owner</label>
                                    <input name="name_owner" type="text" value="<?= $row['name_owner']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Barangay | Location</label>
                                    <input name="location" value="<?= $row['location']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label>Type of Owner</label>
                                <select required name="type_owner" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?= $row['type_owner']; ?>"><?= $row['type_owner']; ?></option>
                                    <option value="Individual">Individual</option>
                                    <option value="Trader">Trader</option>
                                    <option value="Coop">Coop</option>
                                    <option value="Association">Association</option>
                                    <option value="Corporation">Corporation</option>
                                    <option value="Enterprise">Enterprise</option>
                                    <option value="Government">Government</option>
                                    <option value="CEFAR">CEFAR</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label>Categories</label>
                                <select required name="FaEqMa" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?= $row['categories']; ?>"><?= $row['categories']; ?></option>
                                    <option value="Facility">Facility</option>
                                    <option value="Equipment">Equipment</option>
                                    <option value="Machinery">Machinery</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Facility | Equipment | Machinery</label>
                                <select required name="fem" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?= $row['fem']; ?>"><?= $row['fem']; ?></option>
                                    <option value="Mud Tractor">Mud Tractor</option>
                                    <option value="Tresher">Tresher</option>
                                    <option value="Ricemill">Ricemill</option>
                                    <option value="Cornmill">Cornmill</option>
                                    <option value="Dryer">Dryer</option>
                                    <option value="Power Tiller (Turtle Type)">Power Tiller (Turtle Type)</option>
                                    <option value="Water Pump">Water Pump</option>
                                    <option value="4 WD Tractor">4 WD Tractor</option>
                                    <option value="Shredder">Shredder</option>
                                    <option value="Corn Sheller">Corn Sheller</option>
                                    <option value="Riding Type Hand Tractor">Riding Type Hand Tractor</option>
                                    <option value="Silage Chopper">Silage Chopper</option>
                                    <option value="Lakas Kuliglig">Lakas Kuliglig</option>
                                    <option value="Cassava Chipper">Cassava Chipper</option>
                                    <option value="Rotary Composter">Rotary Composter</option>
                                    <option value="Tractor">Tractor</option>
                                    <option value="Cassava Grater">Cassava Grater</option>
                                    <option value="Warehouse">Warehouse</option>
                                    <option value="Mechanical Rice Reaper">Mechanical Rice Reaper</option>
                                    <option value="">Cassava Granulator</option>
                                    <option value="Harvester">Harvester</option>
                                    <option value="Mechanical Rice Transplanter - Walk Behind">Mechanical Rice Transplanter - Walk Behind</option>
                                    <option value="Mobile Rice Mill">Mobile Rice Mill</option>
                                    <option value="Mechanical Direct Seeder - Riding Type">Mechanical Direct Seeder - Riding Type</option>
                                    <option value="Four  Wheel Tractor">Four  Wheel Tractor</option>
                                    <option value="Float-Assist Tiller">Float-Assist Tiller</option>
                                    <option value="Rice Combine">Rice Combine</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No. of Units</label>
                                    <input name="units" type="number" value="<?= $row['units']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Rated Capacity</label>
                                    <input name="capacity" value="<?= $row['capacity']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Facility Brand</label>
                                    <input name="fac_brand" value="<?= $row['brand']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Mode of Aquisition</label>
                                <select required name="mode_acqui" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?= $row['mode_aquisition']; ?>"><?= $row['mode_aquisition']; ?></option>
                                    <option value="Grant">Grant</option>
                                    <option value="Loan">Loan</option>
                                    <option value="Counterparting">Counterparting</option>
                                    <option value="Purchase">Purchase</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Cost of Aquisition</label>
                                    <input name="cost_acqui" value="<?= $row['cost_aquisition']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Year Aquired</label>
                                    <input name="yr_acqui" value="<?= $row['yr_acquired']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Use of Facility</label>
                                <select required name="use_fac" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?= $row['use_facility']; ?>"><?= $row['use_facility']; ?></option>
                                    <option value="Private use">Private use</option>
                                    <option value="Custom Hire">Custom Hire</option>
                                    <option value="Public use">Public use</option>
                                    <option value="Coop">Coop</option>
                                    <option value="Governmennt use">Governmennt use</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                             <div>
                                <div class="form-group">
                                <label>Facility Condition</label>
                                <select required name="fac_cond" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?= $row['facility_cond']; ?>"><?= $row['facility_cond']; ?></option>
                                    <option value="Repair">Repair</option>
                                    <option value="Functional">Functional</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Commodity</label>
                                    <select required name="commodity" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?= $row['commodity']; ?>"><?= $row['commodity']; ?></option>
                                    <option value="Rice">Rice</option>
                                    <option value="Corn">Corn</option>
                                    <option value="Rice & Corn">Rice & Corn</option>
                                    <select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Engine Brand</label>
                                    <input name="eng_brand" value="<?= $row['engine_brand']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Engine Horsepower (Hp)</label>
                                    <input name="eng_hp" value="<?= $row['horsepower']; ?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
 

                    
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update_fem" class="btn btn-warning"><i class="fa fa-edit"></i> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>