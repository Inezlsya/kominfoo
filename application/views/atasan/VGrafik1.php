<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Grafik</h1>
        </div>
        <div class="col-xl-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Realisasi Anggaran</h6>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </div>  
            
</body>  
</html>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript">
    const labels = [
            <?php
              if (count($pagu_anggaran)>0) {
                foreach ($pagu_anggaran as $data) {
                  echo "'" .$data->nama_pptk ."',";
                }
              }
            ?>
          ];
      const nominal = [
                <?php
                  if (count($pagu_anggaran)>0) {
                    foreach ($pagu_anggaran as $data) {
                      echo "'" . floor($data->pagu_anggaran) . "'" . ", ";
                    }
                  }
                ?>
              ];
      const pagu_anggaran = [
                <?php
                  if (count($nominal)>0) {
                    foreach ($nominal as $data) {
                      echo "'" . floor($data->nominal) . "'" . ", ";
                    }
                  }
                ?>
              ];
      var ctx = document.getElementById('myChart2').getContext('2d');
      function filterData(){
      const labels2 = [...labels];
      console.log(labels2);
      const startdate = document.getElementyById('startdate');
      const enddate = document.getElementyById('enddate');

      // get the index number in array
      const indexstartdate = labels2.indexOf(startdate.value);
      const indexenddate = labels2.indexOf(enddate.value);
      //console.log(indexstartdate);

      //slice the array (pie) only showing the selected section / slice
      const filterDate = labels2.slice(indexstartdate, indexenddate + 1);

      //replace the labels in the chart
      myChart2.config.data.labels = filterDate;
      myChart2.update();
      }
      var chart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: 'Pagu Anggaran',
              backgroundColor: '#C6E5CA',
              borderColor: '##93C3D2',
              data: nominal,
          },{
              label: 'Nominal',
              backgroundColor: '#ADD8E6',
              borderColor: '##93C3D2',
              data: pagu_anggaran,
          }]
      },
  })
  ;
  </script>  