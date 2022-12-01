<?php


function dbconnection(){
   $connection= pg_connect("host=lucky.db.elephantsql.com dbname=mhntnkuv user=mhntnkuv
 password=fBXwWXLQvExz_1BEPsUEaSKX-xxCEDPN");
        if($connection == NULL){
            echo "Please check your DB connecttion";
        }else{
        return $connection;
        } 
}
function selectfun($query=null,$var=null){
    if($query==null && $var==null){
       $sql="SELECT * FROM main";
       $result= pg_query(dbconnection(), $sql);
       
       return $result;
    }else{
    
            $sql = "SELECT * FROM main WHERE $query ='".$var."'";
            $result = pg_query(dbconnection(),$sql);
            
            return $result;    
    }
}


