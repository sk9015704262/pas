<h1 class="text-center">Add Student's Record</h1>
<?php $this->load->helper('form');?>
<br>
<div class="row col-md-12">
<div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="heading text-center">Personal details</h3>
                                    <?php echo form_open('Students/addStudent'); ?>
                                    <?php if (isset($message)) { ?>
                                        <small> Student has been added </small>
                                    <?php } ?>

                                </div>
                                <br>
                                <div class="card-block">
                                    <br>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Student's name:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="name" class="form-control" placeholder="Enter  name">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Father's name:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="fname" class="form-control" placeholder="Enter  father's name">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Mother's name:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="mname" class="form-control" placeholder="Enter mother's name">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4
                                            form-control-label" for="email-input">Email:</label>
                                            <div class="col-md-5">
                                                <input type="email" id="email-input" name="email" class="form-control" placeholder="Enter Email">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Student's date of birth:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="dob" class="form-control" placeholder="Enter DOB">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Student's roll no:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="roll" class="form-control" placeholder="Enter roll. no">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Student's address:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="address" class="form-control" placeholder="Enter full address">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Student's contact number:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="contact" class="form-control" placeholder="Enter contact number">
                                                
                                            </div>
                                        </div><div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="select">Select course</label>
                                            <div class="col-md-5">
                                                <select id="select" name="course" class="form-control" size="1">
                                                    <option value="0">Please select course</option>
                                                    <option value="1">B.Tech</option>
                                                    <option value="2">MBA</option>
                                                    <option value="3">MCA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label" for="text-input">Student's branch:</label>
                                            <div class="col-md-5">
                                                <input type="text" id="text-input" name="branch" class="form-control" placeholder="Enter your branch">
                                                
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                     <div class="col-md-6">   
                                     <div class="card">
                                <div class="card-header">
                                    <h3  class="text-center heading">Academic Details</h3> 
                                </div>
                                <br>
                                <div class="card-block">

                                     
                                        <br>
                                        <div class="form-group row">
                                            <label class=" form-control-label" for="text-input">10th boards:</label>
                                            <div class="col-md-4">
                                                <input type="text" id="text-input" name="10school" class="form-control" placeholder="Enter your school name"></div>
                                                <div class="col-md-3">
                                               
                                                
                                                <input type="text" id="text-input" name="10percent" class="form-control" placeholder="Percentage">   
                                            </div>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="10year" class="form-control" placeholder="Year of passing">   
                                            </div>
                                        </div>
                                        

                                     <div class="form-group row">
                                            <label class=" form-control-label" for="text-input">12th boards:</label>
                                            <div class="col-md-4">
                                                <input type="text" id="text-input" name="12school" class="form-control" placeholder="Enter your school name"></div>
                                                <div class="col-md-3">

                                             
                                                <input type="text" id="text-input" name="12percent" class="form-control" placeholder="Percentage">   
                                            </div>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="12year" class="form-control" placeholder="Year of passing">   
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label class=" form-control-label" for="text-input">Graduation:</label>
                                            <div class="col-md-4">
                                                <input type="text" id="text-input" name="gradcollege" class="form-control" placeholder="Enter your school name"></div>
                                                <div class="col-md-3">

                                             
                                                <input type="text" id="text-input" name="gradpercent" class="form-control" placeholder="Percentage">   
                                            </div>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="gradyear" class="form-control" placeholder="Year of passing">   
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label class=" form-control-label" for="text-input">Post Graduation:</label>
                                            <div class="col-md-4">
                                                <input type="text" id="text-input" name="pgschool" class="form-control" placeholder="Enter your school name"></div>
                                                <div class="col-md-2">

                                             
                                                <input type="text" id="text-input" name="pgpercent" class="form-control" placeholder="Percentage">   
                                            </div>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="pgyear" class="form-control" placeholder="Year of passing">   
                                            </div>
                                        </div>

                                       <br>
                                       <br>
                                        
                                <div class="card-footer">
                                    <i class="fa fa-dot-circle-o"></i>

                                    <input type="submit"  value="Add Record" class="btn btn-sm btn-primary"/>
                                    <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                                </div>
                            </div>
                                         <?php echo form_close(); ?>
                        </div>


                        </div>
                        <div class="card col-md-12">                        <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>Mother's Name</th>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>Mother's Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>

<?php foreach ($student->result() as $row) {?>
                                            <tr>
                                                <td><?php echo $row->id;?></td>
                                                <td><?php echo $row->name;?></td>
                                                <td><?php echo $row->fname;?></td>
                                                <td><?php echo $row->mname;?></td>
                                                <td><?php echo $row->id;?></td>
                                                <td><?php echo $row->name;?></td>
                                                <td><?php echo $row->fname;?></td>
                                                <td><?php echo $row->mname;?></td>
                                            </tr>
  <?php }?>
                                           
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
</div>





                        </div>


                   
