<?php
do_action( 'lms_scripts'); 
?>

<div class="row">
  <div class="col-sm-11">

<div class="card">
  <div class="card-header">
  <h3>Form Pro</h3>
  <p>Drug List</p>
  </div>
  <div class="card-body">
    <table id="myTable2" class="cell-border table table-bordered table-hover" style="width:100%" >
        <thead>
            <tr>
              <th>Id</th>
              <th>Drug name</th>
            </tr>
        </thead>
        <tbody>
          <?php
          global $wpdb;
                  $response = array();
            $results = $wpdb->get_results( "SELECT * FROM ". $wpdb->prefix ."formpro WHERE `drugname` LIKE '%mini%'",OBJECT ); 
                foreach ($results as $row) {
                    // $response['id'] = $row->id;
                    // $response['text'] = $row->drugname;
                    $response['results'][] = array(
                        'id' => $row->id,
                        'text' => $row->drugname,
                      );
               
                }
                // echo "<pre>";
                // var_dump($response);
          ?>
           <tr>
             <td>asd</td>
             <td>asd</td>
           </tr>
        </tbody>
    </table>

  </div>
</div>
  </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function() {
   jQuery('#myTable2').DataTable();

} );
</script>



