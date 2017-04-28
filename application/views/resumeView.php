<?php $this->load->helper('form');?>
                <h1> Resume Builder </h1>
                <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Personal Information</strong>
                      <?php echo form_open('Resume/makeResume'); ?>
                                    <?php if (isset($message)) { ?>
                                        <small> Saved Succesfully </small>
                                    <?php } ?>
                                </div>
                                <div class="card-block">
                                    <div class="form-group">
                                        <label for="company">Skills</label>
                                        <input type="text" class="form-control" name="skill1" placeholder="ex: webdesign,etc..">
                                         <input type="text" class="form-control" name="skill2" placeholder="ex: webdesign,etc..">
                                          <input type="text" class="form-control" name="skill2" placeholder="ex: webdesign,etc..">
                                           <input type="text" class="form-control" name="skill3" placeholder="ex: webdesign,etc..">
                                            <input type="text" class="form-control" name="skill1" placeholder="ex: webdesign,etc..">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">Technical</label>
                                        <textarea placeholder="Enter details here" name="Technical" rows = "4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Projects</label>
                                        <input type="text" class="form-control" name="project1" placeholder="Major Project">
                                         <input type="text" class="form-control" name="project2" placeholder="Minor Project">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                        <label for="hrname">Hobbies</label>
                                        <input type="text" class="form-control" name="hobbies" placeholder="Hobbies">
                                    </div>
                                   
                             </div>
                                    <!--row-->
                                   
                                    <div>
                                        <input type="Submit" name="Submit" class="form-control btn btn-primary" value="Preview">
                                    </div>
                                      <?php echo form_close(); ?>
                                </div>
                                
                            </div>

                        </div>

                       


                        
