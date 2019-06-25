<?php

class database extends tools
{
    public $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function connect()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "yachten";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

        return $conn;
    }


    function CloseCon($conn)
    {
        $conn->close();
    }

    function get($table, $items)
    {
        $itemString = "";
        foreach ($items as $item) {
            $itemString .= $item . ", ";
        }

        $itemString = substr($itemString, 0, -2);

        $sql = "SELECT " . $itemString . " FROM " . $table;


        return mysqli_query($this->conn, $sql);


    }

    function getWhere($table, $items, $where, $what, $is)
    {
        $itemString = "";
        foreach ($items as $item) {
            $itemString .= $item . ", ";
        }

        $itemString = substr($itemString, 0, -2);

        $sql = "SELECT " . $itemString . " FROM " . $table . " WHERE " . $where . " " . $what . " " . $is;

        return mysqli_query($this->connect(), $sql);
    }

    function getJoin($mainTable, $table2, $arrayDataTabel1, $arrayDataTabel2, $join1, $join2)
    {
        $table1Data = $this->arrayToStringForJoin($arrayDataTabel1, false, $mainTable);
        $table2Data = $this->arrayToStringForJoin($arrayDataTabel2, false, $table2);

        $sql = "SELECT " . $table1Data . ", " . $table2Data . " FROM " . $mainTable . " JOIN " . $table2 . " ON " . $mainTable . "." . $join1 . " = " . $table2 . "." . $join2;

        return mysqli_query($this->connect(), $sql);
    }

    function getJoinWhere($mainTable, $table2, $arrayDataTabel1, $arrayDataTabel2, $join1, $join2, $where)
    {
        $table1Data = $this->arrayToStringForJoin($arrayDataTabel1, false, $mainTable);
        $table2Data = $this->arrayToStringForJoin($arrayDataTabel2, false, $table2);

        $sql = "SELECT " . $table1Data . ", " . $table2Data . " FROM " . $mainTable . " JOIN " . $table2 . " ON " . $mainTable . "." . $join1 . " = " . $table2 . "." . $join2 . " " . $where;

        return mysqli_query($this->connect(), $sql);
    }

    public function checkId($checkId, $table, $column)
    {
        $sql = "SELECT " . $column . " FROM " . $table . " WHERE " . $column . " = " . $checkId;
        return mysqli_query($this->conn, $sql);
    }

    public function getHost()
    {
        return "http://$_SERVER[HTTP_HOST]/yacht/RoyalCarsHtml/";
    }

    public function getPage($url)
    {
        $items = array('view');
        $response = $this->getWhere("pages", $items, "page", "=", "'" . $url . "'");

        if ($response->num_rows > 0) {
            while ($row = $response->fetch_assoc()) {
                $page = $row['view'];
            }
        } else {
            $page = 'notFound.php';
        }

        return $page;
    }

}



