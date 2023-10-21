<?php
class loaisp
{
    //khai bao thuoc tinh
    var $id = null;
    var $name = null;
    var $note = null;

    var $truyvan = null;

    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT  * FROM loaisanpham";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($id)
    {
        $db = new connect();
        $sql = "SELECT * FROM loaisanpham WHERE id_lsp = $id ";
        $result = $db->pdo_query_one($sql);
        return $result;

    }

    public function add($name, $note)
    {
        echo 'kq ' . $name . $note;
        $db = new connect();
        $sql = "INSERT INTO loaisanpham(ten,trangthai) VALUES ('$name','$note') ";
        echo $sql;
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function update($id, $name, $note)
    {
        $db = new connect();
        $sql = "UPDATE loaisanpham SET ten='$name',trangthai='$note' Where id_lsp=$id";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($id)
    {
        $db = new connect();
        $sql = "DELETE FROM loaisanpham WHERE id_lsp = $id ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    // public function dem_sp($id){
    //     $db = new connect();
    //     $sql = "SELECT COUNT(SP.id_sp) FROM sanpham SP INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp WHERE LSP.id_lsp = $id ";
    //     $result = $db->pdo_query_one($sql);
    //     return $result;

    // }
    public function dem_sp($truyvan)
    {
        $db = new connect();
        $sql = "$truyvan";
        $result = $db->pdo_query_value($sql);
        return $result;

    }

}