<?php
class ajax_96{

    function __construct(){
        $this->redirect_page = get_option('redirect69');
        add_action( "wp_ajax_form_pro_field", array($this, 'form_pro_field'), 10 );
        add_action( "wp_ajax_nopriv_form_pro_field", array($this, 'form_pro_field'), 10 );

        add_action( "wp_ajax_search_zipcode", array($this, 'search_zipcode'), 10 );
        add_action( "wp_ajax_nopriv_search_zipcode", array($this, 'search_zipcode'), 10 );

        add_action( "wp_ajax_form_pro_submit", array($this, 'form_pro_submit'), 10 );
        add_action( "wp_ajax_nopriv_form_pro_submit", array($this, 'form_pro_submit'), 10 );

    }
    function form_pro_field(){
        $response = array();
        $search_term = $_POST['searchTerm'];
         global $wpdb;
        $results = $wpdb->get_results( "SELECT * FROM ". $wpdb->prefix ."formpro WHERE `drugname` LIKE '%". $search_term ."%' LIMIT 10",OBJECT ); 
        foreach ($results as $row) {
          
            $response[] = array(
              'id' => $row->id,
                'text' => $row->drugname,
        );
       
        }

        return $this->response_json($response);

    }
    function search_zipcode(){
        $response = array();
        $search_term = $_POST['searchTerm'];
         global $wpdb;
        $results = $wpdb->get_results( "SELECT * FROM ". $wpdb->prefix ."formpro WHERE `zipcode` LIKE '%". $search_term ."%' LIMIT 10",OBJECT ); 
        foreach ($results as $row) {
          
            $response[] = array(
              'id' => $row->id,
                'text' => $row->zipcode,
        );
       
        }

        return $this->response_json($response);
    }

    function form_pro_submit(){
        // var_dump("Asd");exit;
        $admin_email = 'maxwilson908@gmail.com';
        $site_name   = get_option( 'blogname' );
        $headers = array();
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $headers[] = 'From: '.$site_name.' <'.$admin_email.'>'."\r\n";

        //   ob_start();
        //   include CHI_URL.'/templates/email-template.php';
        //   $message = ob_get_contents();
        //   ob_end_clean();
           
          wp_mail($admin_email,'Prescription Drug Plan Worksheet','message',$headers);
           
      $response['message'] = 'Form Submitted Successfully';
      $response['status'] = true;
      return $this->response_json($response);
    }
    function response_json($data){
        header('Content-Type: application/json');
        echo json_encode($data);
        wp_die();
    }
    function user_system_test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
new ajax_96();
