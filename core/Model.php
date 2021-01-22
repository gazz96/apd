<?php 

class Model 
{

    protected $table = '';
    protected $primary_key = '';
    protected $fillable = [];
    protected $orderBy;
    protected $order = 'ASC';
    protected $find = [];


    public function __construct() {
        $this->orderBy = $this->primary_key;
    }

    public function find( $id ) {
        $query_str = "SELECT * FROM {$this->table} WHERE {$this->primary_key}='{$id}' ORDER BY {$this->orderBy} {$this->order}";


        $data = db()->query( $query_str )->fetch_array();
        $this->find = $data;


        return $data;
    }

    public function all() {
        $data = db()->query("SELECT * FROM {$this->table}")->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    public function where() {
        return $this;
    }

    public function create( $data = []) {
        $query_str = "INSERT INTO {$this->table}";
        $keys_arr = [];

        foreach( $data as $key => $value) {
            $keys_arr[] = "`{$key}`";
        }
        $query_str .= "(" . implode(',', $keys_arr ) . ")";

        $values = [];

        foreach($data as $key => $value) {
            $values[] = "'{$value}'";
        }

        $query_str .= ' VALUES (' .  implode(', ', $values) . ')';

        return db()->query( $query_str );
    }

    public function update( $values, $params ) {
        $set_arr    = [];
        $params_arr = [];

        $query_str = "UPDATE {$this->table} SET ";
        foreach( $values as $key => $value ) {
            $set_arr[]  = "`{$key}`='" . $value . "'";
        }

        $query_str .= implode(",", $set_arr);

        foreach( $params as $key => $value ) {
            $params_arr[] = "{$key}='" . $value . "'";
        }
        

        $query_str .= " WHERE " . implode(" AND ", $params_arr);

        return db()->query( $query_str );

    }

    public function delete( $id ) {
        return db()->query("DELETE FROM {$this->table} WHERE $this->primary_key='{$id}'");
    }

    public function orderByDesc( $name ='' ) {
        $this->order = 'DESC';
        $this->orderBy = $name ?? $this->table .'.'. $this->primary_key;
        return $this;
    }





}