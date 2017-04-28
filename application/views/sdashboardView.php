
<script>
    var requireJS = [];
    
    loadJS(requireJS, "js/views/main.js");
</script>
<?php $this->load->helper('form');?>

<div class="animated fadeIn">

<div class="card col-md-12">                        <div class="card-block">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Company Name</th>
                            <th>About</th>
                            <th>Website</th>
                            <th>Hr</th>
                            <th>Contact</th>
                            <th>Date of Placement</th>
                            <th>Apply / Not Interested</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($company->result() as $row) {?>
                        <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->comp_name;?></td>
                            <td><?php echo $row->about;?></td>
                            <td><a class="btn btn-success" href="<?php echo $row->website;?>" target="_blank"> <?php echo $row->comp_name;?> </a></td>
                            <td><?php echo $row->hr_name;?></td>
                            <td><?php echo $row->hr_contact;?></td>
                            <td><?php echo $row->dateofPlacement;?></td>
                            <td><button class="btn btn-primary">Apply here</button> <br><br> <button class="btn btn-danger">Not Intrested</button> </td>
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












        <!--/.col-->
    </div>
    <!--/.row-->
</div>

