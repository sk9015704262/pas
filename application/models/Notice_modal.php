<?php
class Notice_modal extends CI_Model {

   
function __construct() {
parent::__construct();
}
function notice_insert($data){

$this->db->insert('notice', $data);
}

    public function notice_get($limit)
    {
        //data is retrive from this query
<<<<<<< Updated upstream
         $this->db->limit($limit,'0');
       $data= $this->db->get('notice');
        return $data;
=======
        $this->db->order_by("id", "desc");
        $query = $this->db->get('notice');
        return $query;
>>>>>>> Stashed changes
    }

}
?>
