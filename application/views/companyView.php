<?php $this->load->helper('form');?>
                <h1> Add Company </h1>
                <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Company</strong>
                                    <small>Form</small>
                                     <?php echo form_open('Company/addcompany'); ?>
                                    <?php if (isset($message)) { ?>
                                        <small> Company has been added </small>
                                    <?php } ?>
                                </div>
                                <div class="card-block">
                                    <div class="form-group">
                                        <label for="company">Company's Name</label>
                                        <input type="text" class="form-control" name="comp_name" placeholder="Enter company name">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea placeholder="Enter details here" name="about" rows = "4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="website" class="form-control" name="website" placeholder="Enter Company's Website ">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                        <label for="hrname">HR Name</label>
                                        <input type="text" class="form-control" name="hr_name" placeholder="Enter the name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="hrcontact">HR Contact</label>
                                        <input type='tel'  class="form-control" name="hr_contact" placeholder="Enter the Contact"> 
                                    </div>
                                    </div>
                                    <!--row-->
                                    <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label for="date">Date of Placement Drive</label>
                                        <input type="date" pattern="dd/mm/yyyy" class="form-control" name="dateofPlacement" placeholder="Enter the date of Placement Drive"  >
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="minpercentage">Minimum Percentage</label>
                                        <input type="number" min ="1" max ="100"class="form-control" name="min_percentage" placeholder="Minimum Percentage">
                                    </div>
                                    </div>
                                    <div>
                                        <input type="Submit" name="Submit" class="btn btn-primary" value="Add Company">
                                    </div>
                                      <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>


                        
