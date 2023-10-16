<?php

include_once 'koneksi.php';

// $datapost['id'] = $_POST['id'];
// $datapost['nama'] = $_POST['name'];

// if (isset($_POST['id']) && !empty($_POST['id'])){
    
    $id = strval($_POST['id']);
    $name = intval($_POST['name']);

    if($name == 1) {
        // $id = ($_POST['id']);
        // $name = ($_POST['name']);

        $table = "kabupaten_kota";
        $where = "id_provinsi";

        // $sql="SELECT * from $table WHERE $where = $id ORDER BY `nama` ASC";
        // $query=mysqli_query($koneksi,$sql);

        // while($data = mysqli_fetch_array($query)){
        //     echo $option = "<option value=$data[id]> $data[nama] </option>";
        // }
    }else if($name == 2) {
        // $id = ($_POST['id']);
        // $name = ($_POST['name']);

        $table = "kecamatan";
        $where = "id_kabupaten";

        // $sql="SELECT * from $table WHERE $where = $id ORDER BY `nama` ASC";
        // $query=mysqli_query($koneksi,$sql);

        // while($data = mysqli_fetch_array($query)){
        //     echo $option = "<option value=$data[id]> $data[nama] </option>";
        // }
    }else if($name == 3) {
        // $id = ($_POST['id']);
        // $name = ($_POST['name']);

        $table = "kelurahan";
        $where = "id_kecamatan";

        // $sql="SELECT * from $table WHERE $where = $id ORDER BY `nama` ASC";
        // $query=mysqli_query($koneksi,$sql);

        // while($data = mysqli_fetch_array($query)){
        //     echo $option = "<option value=$data[id]> $data[nama] </option>";
        // }
    }
    // else {
    //     $id = '';
    //     $name = '';
        
    //     $table = "";
    //     $where = "";

    //     $sql="";
    //     $query="";
    //     // $option ="";
    // }
    
    $sql="SELECT * from `$table` WHERE `$where` = '$id' ORDER BY `nama` ASC";
    $query=mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_array($query)){
        echo "<option value=$data[id]> $data[nama] </option>";
    }
    // exit;

    // $sql="SELECT id,nama from $table WHERE $where = $id ORDER BY nama ASC";
    // $query=mysqli_query($koneksi,$sql);
    // $data=mysqli_fetch_array($query);
    // $query=mysqli_query($koneksi,$sql);
    

    // $option = $option;

    // echo ($option);
    // exit;

    // var_dump($data); die();
    // echo ($output);
    
// }