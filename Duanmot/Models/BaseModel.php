<?php
class BaseModel extends Database
{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }
    public function all($table, $select = ["*"], $orderBy = [], $limit = 10)
    {
        $columns = implode(",", $select);
        $orderByStr = implode(" ", $orderBy);
        // die("$orderByStr");
        if ($orderByStr) {
            $sql = "SELECT $columns FROM {$table} ORDER BY {$orderByStr} LIMIT {$limit}";
        } else {
            $sql = "SELECT $columns FROM {$table} LIMIT {$limit}";
        }

        $query = $this->_query($sql);

        print_r($query);
        $data = [];
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row);
        }
        return $data;
    }
    public function find($table, $id)
    {
        $sql = "SELECT * FROM {$table} where id_category= $id limit 1";
        $query = $this->_query($sql);
        return $query->fetch_assoc();
    }
    public function create($table, $data = [])
    {
        $column = implode(', ', array_keys($data));
        echo $table;
        echo '<pre>';
        print_r($data);
        $newValues = array_map(function ($value) {
            return "'" . $value . "'";
        }, array_values($data));
        $newValues = implode(', ', $newValues);
        $sql = "INSERT INTO {$table}($column) Values ({$newValues})";
        // echo $sql;
        $this->_query($sql);
    }
    public function update($table, $id, $data)
    {
        $dataSet = [];
        foreach ($data as $key => $value) {
            array_push($dataSet, "" . $key . " = '" . $value . "'");
        }
        $dataSetString = implode(", ", array_values($dataSet));

        $sql = "Update {$table} set {$dataSetString} where id ={$id}";
        echo $sql;
        $this->_query($sql);
    }
    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id = {$id}";
        // die($sql);
        $this->_query($sql);

    }
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}
