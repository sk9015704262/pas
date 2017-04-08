
<h1 class="text-center">Send Notice</h1>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
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

                                    
                                </div>
                            </div>

                        </div>





</div>


        <div class="col-md-12">
            <div class="card ">
                <div class="card-block">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>From</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($notices->result() as $row)
                        {
                        ?> <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->title;?></td>
                            <td><?php echo $row->body;?></td>
                            <td>
                                <?php echo $row->sender;?>
                            </td>
                            <td><?php echo $row->date;?></td>
                        </tr>
                        <?php }
                        ?>

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
    </div>

                    





               