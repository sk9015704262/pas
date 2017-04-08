
<script>
    var requireJS = [];
    
    loadJS(requireJS, "js/views/main.js");
</script>



<div class="animated fadeIn">

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












        <!--/.col-->
    </div>
    <!--/.row-->
</div>

