<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportsmodel extends CI_Model{

	function userDemands($from,$to){
		return $this->db->where("created BETWEEN '$from' AND '$to'")
						->get('customer_demands')->result();
	}

	function expenseBetweenDates($from,$to){
		$q=$this->db->query("SELECT * FROM transactions,sub_accounts WHERE transactions_dr_cr = 'Cr' AND transactions_type='EXPENSE' AND transactions_account=sub_accounts_id AND transactions_date BETWEEN '$from' AND '$to'");
		return $q->result();
	}

	function itemSalesCustomerWiseBetweenDates($from,$to,$item){
		$q=$this->db->query("SELECT transactions_date,transactions_no,transactions_account,transactions_items_items_id,transactions_items_qty , transactions_items_name,items_code,sub_accounts_name FROM transactions,transactions_items,items,sub_accounts WHERE transactions_items_txn_no=transactions_no AND `transactions_items_items_id`=items_id AND transactions_type='SALES' AND transactions_dr_cr='Dr' AND transactions_type=transactions_items_txn_type AND sub_accounts_id=transactions_account AND `transactions_items_items_id`=$item AND transactions_date BETWEEN '$from' AND '$to'");
		return $q->result();
		
	}

	function itemSalesBetweenDates($from,$to){
		$q=$this->db->query("SELECT DISTINCT (transactions_items_items_id),transactions_items_name,items_code FROM transactions,transactions_items,items WHERE transactions_items_txn_no=transactions_no AND `transactions_items_items_id`=items_id AND transactions_type='SALES' AND transactions_dr_cr='Dr' AND transactions_type=transactions_items_txn_type AND transactions_date BETWEEN '$from' AND '$to'");
		if($q->result()){
			$q=$q->result();

			$size=count($q);
			$i=0;
			while ($size > $i) {
				//var_dump($q[$i]);exit;
				$id=$q[$i]->transactions_items_items_id;
				$q2=$this->db->query("SELECT SUM(`transactions_items_qty`)as qty FROM `transactions_items`,transactions WHERE `transactions_items_items_id`=$id AND transactions_items_txn_no=transactions_no AND transactions_type=transactions_items_txn_type AND transactions_type='SALES' AND transactions_dr_cr='Dr' AND transactions_date BETWEEN '$from' AND '$to'");
				$q2=$q2->row();
				
				$q[$i]->qty=$q2->qty;
				
				$i++;
			}
		}
		
		return $q;
		
	}

	function purchasesBetweenDates($from,$to){
		$q=$this->db->query("SELECT * FROM transactions,sub_accounts WHERE transactions_type='PURCHASE' AND  transactions_account=sub_accounts_id AND transactions_dr_cr='Cr' AND transactions_date BETWEEN '$from' AND '$to'");
	
		return $q=$q->result();
	}

	function receiptBetweenDates($from,$to){
		$q=$this->db->query("SELECT * FROM transactions,sub_accounts WHERE transactions_type='RECEIPT' AND  transactions_account=sub_accounts_id AND transactions_dr_cr='Cr' AND transactions_date BETWEEN '$from' AND '$to'");
	
		return $q=$q->result();
	}

	function paymentBetweenDates($from,$to){
		$q=$this->db->query("SELECT * FROM transactions,sub_accounts WHERE transactions_type='PAYMENT' AND  transactions_account=sub_accounts_id AND transactions_dr_cr='Dr' AND transactions_date BETWEEN '$from' AND '$to'");
	
		return $q=$q->result();
	}

}
?>