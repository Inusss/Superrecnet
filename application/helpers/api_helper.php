<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function get_operadores(){
    $CI =& get_instance();
    return $CI->db->get('operador')->result();
}

function post_msj($data){
    $CI =& get_instance();
    $CI->db->insert('mensajecobro',$data);
}

function post_nws($data){
    $CI =& get_instance();
    $CI->db->insert('nuevows',$data);
    return $CI->db->insert_id();
}

function post_sms($data){
    $CI =& get_instance();
    $CI->db->insert('sms',$data);
}

function post_ejemplo($data){
    $CI =& get_instance();
    $CI->db->insert('ejemplo',$data);
}

function post_sms2($data){
    $CI =& get_instance();
    $CI->db->insert('sms2',$data);
}

function post_recarga($data){
    $CI =& get_instance();
    $CI->db->insert('recarga',$data);
}

function post_recargaplus($data){
    $CI =& get_instance();
    $CI->db->insert('recargaplus',$data);
}

function post_recargamas($data){
    $CI =& get_instance();
    $CI->db->insert('recargamas',$data);
}

function post_n4424812489($data){
    $CI =& get_instance();
    $CI->db->insert('n4424812489',$data);

}

function post_n5216($data){
    $CI =& get_instance();
    $CI->db->insert('n5216',$data);

}