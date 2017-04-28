
<h1 class="text-center">Send Notice</h1>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
<?php $this->load->helper('form');?>



                            <div class="card">
                                <div class="card-header">
                                    <strong>Notice Board</strong>
                                   





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

                    





               