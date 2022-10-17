<div class="content-wrapper">
  <form method="POST" action="class.php" enctype="multipart/form-data">
    <div class="container mx-2 mb-2 p-3">
      <div class="row">
        <div class="col-12">
          <h2 class="text-monospace">Add Item</h2>
        </div>
      </div>
    </div>


    <div class="container">
    <?php 
        if(isset($_SESSION['response'])) 
        { 
    ?>
    <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <b><?= $_SESSION['response']; ?></b>
    </div>
    <?php 
        } 
        unset($_SESSION['response']); 
    ?>
  </div>


    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-2">
            <form action="class.php" method="POST">
                <!-- Main content -->
                <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-warning shadow">
                    <div class="card-header">
                        <h3 class="card-title fs-bold text-danger font-weight-bold">Data</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body bg-gray">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Name of Owner</label>
                                    <input name="name_owner" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Barangay | Location</label>
                                    <input name="location" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Type of Owner</label>
                                <select required name="type_owner" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="">Choose</option>
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
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Facility | Equipment | Machinery</label>
                                <select required name="fem" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="">Choose</option>
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
                                    <input name="units" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Rated Capacity</label>
                                    <input name="capacity" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Facility Brand</label>
                                    <input name="fac_brand" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Mode of Aquisition</label>
                                <select required name="mode_acqui" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="">Choose</option>
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
                                    <input name="cost_acqui" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Year Aquired</label>
                                    <input name="yr_acqui" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Use of Facility</label>
                                <select required name="use_fac" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="">Choose</option>
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
                                    <option selected="selected" value="">Choose</option>
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
                                    <option selected="selected" value="">Choose</option>
                                    <option value="Rice">Rice</option>
                                    <option value="Corn">Corn</option>
                                    <option value="Rice & Corn">Rice & Corn</option>
                                    <select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Engine Brand</label>
                                    <input name="eng_brand" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Engine Horsepower (Hp)</label>
                                    <input name="eng_hp" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                      
  






                    </div>
                    <!-- /.card-body -->

                    </div>
                    <!-- /.card -->






                    


                    <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        <button name="Add_FEM" type="submit"
                        class="btn btn-lg btn-success m-3 float-right font-weight-bolder">SUBMIT</button>
                    </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                </section>
                </form>
        </div>
        <div class="col-md-1"></div>
    </div>


    <!-- /.content -->
  </form>
</div>
<!-- /.content-wrapper -->