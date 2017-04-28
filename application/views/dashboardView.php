
<script>
    var requireJS = [];
    
    loadJS(requireJS, "js/views/main.js");
</script>

<script>
    var requireJS = [];
    
    loadJS(requireJS, "js/views/charts.js");
</script>


<div class="animated fadeIn">
    <div class="card-columns cols-3">
        <div class="card">
            <div class="card-header">
                Placed Students According As Per Branches
                <div class="card-actions">
                   
                </div>
            </div>
            <div class="card-block">
                <div class="chart-wrapper">
                    <canvas id="piechart" width="400" height="400"></canvas>
  
  <script type="text/javascript">
    // Get the context of the canvas element we want to select
    var ctx = document.getElementById("piechart").getContext("2d");
    var data = [{
        value: 68,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "CSE"
    },
    {
        value: 24,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "ECE"
    },
    {
        value: 8,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "IT"
    }];
    
    var options = {
      animateScale: true
  
    };

    var myNewChart = new Chart(ctx).Pie(data,options);

  </script>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Placement Record By Year
                <div class="card-actions">
                   
                </div>
            </div>
            <div class="card-block">
                <div class="chart-wrapper">
                     <canvas id="piechart2" width="400" height="400"></canvas>
  
  <script type="text/javascript">
    // Get the context of the canvas element we want to select
    var ctx = document.getElementById("piechart2").getContext("2d");
    var data = {
    labels: ["2012", "2013", "2014", "2015", "2016", "2017"],
    datasets: [
        {
            label: "CSE",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 40],
            spanGaps: false,
        },
        {
            label: "ECE",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgb(255, 12, 174)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgb(255, 12, 174)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [20, 32, 21, 55, 54, 80, 40],
            spanGaps: false,
        },
        {
            label: "IT",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgb(243, 255, 158)",
            borderColor: "rgb(243, 255, 158)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgb(243, 255, 158)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [60, 23, 56, 56, 94, 81, 65],
            spanGaps: false,
        }
    ]
};

  var myNewChart = new Chart(ctx).Line(data,options);

  </script>
                </div>
            </div>
        </div>
        
    </div>
</div>
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

