
                <h1> Add Company </h1>
                <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Company</strong>
                                    <small>Form</small>
                                </div>
                                <div class="card-block">
                                    <div class="form-group">
                                        <label for="company">Company's Name</label>
                                        <input type="text" class="form-control" id="company" placeholder="Enter company name">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea placeholder="Enter details here" rows = "4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="website" class="form-control" id="website" placeholder="Enter Company's Website ">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                        <label for="hrname">HR Name</label>
                                        <input type="text" class="form-control" id="hrname" placeholder="Enter the name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="hrcontact">HR Contact</label>
                                        <input type='tel' pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' title='Phone Number (Format: +(99)9999999999' class="form-control" id="hrcontact" placeholder="Enter the Contact"> 
                                    </div>
                                    </div>
                                    <!--row-->
                                    <div class ="row">
                                    <div class="form-group col-sm-6">
                                        <label for="date">Date of Placement Drive</label>
                                        <input type="date" pattern="dd/mm/yyyy" class="form-control" id="date" placeholder="Enter the date of Placement Drive"  >
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="minpercentage">Minimum Percentage</label>
                                        <input type="number" min ="1" max ="100"class="form-control" id="minpercentage" placeholder="Minimum Percentage">
                                    </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
