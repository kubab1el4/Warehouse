<?php

namespace projekt\classes;

class Dbhandler extends Dbconfig
{
    protected $connectionString;
    protected $sqlQuery;
    protected $dataSet;
    protected $databaseName;
    protected $serverName;
    protected $userName;
    protected $passCode;
    public $table;
    public function setTable($input)
    {
        $this->table=$input;
    }
    public function mySql()
    {
        $this ->connectionString = null;
        $this ->sqlQuery = null;
    }
    public function dbConnect()
    {
        $this->connectionString = mysqli_connect($this->serverName, $this->userName, $this->passCode, $this->dbName);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    }
    public function displayData()
    {
        $string="SELECT * FROM ".$this->table;
        if ($result = mysqli_query($this->connectionString, $string)) {
            $this->dataSet = $result;
        }
    }


    public function populate()
    {
        if ($this->dataSet->num_rows > 0) {
            while ($row = $this->dataSet->fetch_assoc()) {
                if (!is_null($row['Size'])) {
                    $product= new DVD();
                } elseif (!is_null($row['Height'])) {
                    $product=new Furniture();
                } elseif (!is_null($row['Weight'])) {
                    $product=new Book();
                }
                $string=$product->createDisplayString($row);
                echo $string;
            }
        } else {
            echo "<p style='margin-left:5%; font-weight:bold'>0 results</p>";
        }
    }

    public function dbDisconnect()
    {
        mysqli_close($this->connectionString);
    }
    public function deletebyCheckbox($data)
    {
        foreach ($data as $id) {
            $string= 'DELETE FROM '.$this->table.' WHERE ID = '.$id;
            mysqli_query($this->connectionString, $string);
        }
    }
    public function getData()
    {
        $this->data=$_POST;
    }

    public function addData($data)
    {
        $table="";
        $values="'";
        foreach ($data as $key => $value) {
            $table.=$key.", ";
            if (is_string($value)) {
                $values.=$value."', '";
            } elseif (is_int($value)) {
                $values.=$value.", ";
            }
        }
        $table=substr($table, 0, -2);
        $values=substr($values, 0, -3);
        $string="INSERT INTO ".$this->table." (".$table.") VALUES (".$values.")";
        mysqli_query($this->connectionString, $string);
    }
    public function getColumn($column)
    {
        $array=array();
        $num=0;
        if ($result = mysqli_query($this->connectionString, "SELECT ".$column." FROM ".$this->table)) {
            while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                $array[$num++]=$row[0];
            }
        }
        return $array;
    }
    public function getSKUArray()
    {
        return $this->getColumn("SKU");
    }
    public function createSKUPattern($array)
    {
        $pattern="";
        foreach ($array as $key) {
            $pattern.="(^(?!.*\b".$key."\b).*)";
        }
        $pattern.=".*$";
        return $pattern;
    }
}