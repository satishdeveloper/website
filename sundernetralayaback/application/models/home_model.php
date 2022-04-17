<?php if(!defined('BASEPATH'))exit('No direct script access alloed');
class home_model extends CI_Model{
    public function fetch_data($tbl_name,$select=FALSE,$join=FALSE,$where=FALSE, $limit=FALSE,$start=FALSE,$orderby=FALSE){
        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($where);
        if($join!=''){
            foreach($join as $key=>$join_condition){
                if($join_condition['join_type']==''){
                    $this->db->join($join_condition['table'],$join_condition['join_table_id'].'='.$join_condition['from_table_id']);
                    
                }else{
                    $this->db->join($join_condition['table'],$join_condition['join_table_id'].'='.$join_condition['from_table_id'],$join_condition['join_type']);
                    
                }
                
            }
            
        }
        if(!$start){
            $start = 0;
        }
        if($limit){
            $this->db->limit($limit,$start );
        }
        if($orderby){
            $this->db->order_by($orderby, 'DESC');
        }
        $recordfilter_query=$this->db->get();
        $result=$recordfilter_query->result_array();
        return $result;
        
    }
public function fetch_client($tbl_name,$select=FALSE,$join=FALSE,$where=FALSE,$order_by=FALSE){$this->db->select($select);$this->db->from($tbl_name);$this->db->where($where);$this->db->order_by('clientOrder','ASC');if($join!=''){foreach($join as $key=>$join_condition){if($join_condition['join_type']==''){$this->db->join($join_condition['table'],$join_condition['join_table_id'].'='.$join_condition['from_table_id']);}else{$this->db->join($join_condition['table'],$join_condition['join_table_id'].'='.$join_condition['from_table_id'],$join_condition['join_type']);}}}$recordfilter_query=$this->db->get();$result=$recordfilter_query->result_array();return $result;}
public function insert($table,$data){$insert=$this->db->insert($table,$data);if($insert){return $this->db->insert_id();}else{return false;}}
 public function getBillBookCompanyDetail(){
        //Another database query
        $DB2 = $this->load->database('another_db', TRUE);
        $DB2->select('*');
        $DB2->from('tbl_company');
        $query = $DB2->get();
        return $query->result_array();
    }
    
    public function getCompanyDetailById($companyId){
        //Another database query
        $DB2 = $this->load->database('another_db', TRUE);
        $DB2->select('*');
        $DB2->from('tbl_company');
        $DB2->where('companyId', $companyId);
        $query = $DB2->get();
        return $query->row_array();
    }
				         	} ?>