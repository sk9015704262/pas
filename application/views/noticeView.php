
<h1 class="text-center">Send Notice</h1>
<div class="col-sm-6">
<?php $this->load->helper('form');?>



                            <div class="card">
                                <div class="card-header">
                                    <strong>Notice Board</strong>
                                    <small> | send Notice</small>

                                     <?php echo form_open('Notice/addNotice'); ?>
<?php if (isset($message)) { ?>
<small> Notice has been added </small>
<?php } ?>
                                   
                                </div>
                               
                                <div class="card-block">
                                    <div class="form-group">
                                        <label for="company">Title</label>
                                        <?php echo form_input(array('class' => 'form-control' ,'placeholder'=>'Enter Title', 'id' => 'title', 'name' => 'title')); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="street">Notice Body</label>
                                         <?php echo form_textarea(array('style'=>'height:150px;','class' => 'form-control' ,'placeholder'=>'Enter your notice', 'id' => 'body', 'name' => 'body')); ?>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-7">
                                            <label for="city">From</label>
                                             <?php echo form_input(array('class' => 'form-control' ,'placeholder'=>'Enter the undersigned', 'id' => 'sender', 'name' => 'sender')); ?>
                                        </div>
                                        <div class="form-group col-sm-5">
                                         
                                        <label for="vat">Date</label>
                                    <?php echo form_input(array('class' => 'form-control' , 'id' => 'data', 'name' => 'date')); ?>
                  
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="form-group">
                                     <?php echo form_submit(array('class'=> 'form-control btn btn-primary','id' => 'submit', 'value' => 'Send Notice')); ?>
<?php echo form_close(); ?>
<div id="fugo">
                                   
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    





               