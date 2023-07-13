<?php
require('koneksi.php');
?>

<?php
//fungsi untuk mengambil data pada sintaks query mysql
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah_kursus($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $durasi = htmlspecialchars($data["durasi"]);
    //query untuk menambah data
    $query = "INSERT INTO kursus VALUES ('$id_kursus', '$judul', '$deskripsi', '$durasi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_kursus($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $durasi = htmlspecialchars($data["durasi"]);
    //query untuk ubah data
    $query = "UPDATE kursus SET judul='$judul', deskripsi='$deskripsi', durasi='$durasi' 
    WHERE id_kursus = '$id_kursus'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus_kursus($id)
{
    //memanggil variabel global conn
    global $conn;
    //query untuk menghapus data
    mysqli_query($conn, "DELETE FROM kursus WHERE id_kursus = '$id'");
    return mysqli_affected_rows($conn);
}

function tambah_materi($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_materi = htmlspecialchars($data["id_materi"]);
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $judul_materi = htmlspecialchars($data["judul_materi"]);
    $deskripsi_materi = htmlspecialchars($data["des_mat"]);
    $link_embed = htmlspecialchars($data["link_embed"]);
    //query untuk menambah data
    $query = "INSERT INTO materi VALUES ('$id_materi', '$id_kursus', '$judul_materi', '$deskripsi_materi', '$link_embed')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_materi($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_materi = htmlspecialchars($data["id_materi"]);
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $judul_materi = htmlspecialchars($data["judul_materi"]);
    $deskripsi_materi = htmlspecialchars($data["des_mat"]);
    $link_embed = htmlspecialchars($data["link_embed"]);
    //query untuk ubah data
    $query = "UPDATE materi SET judul_materi='$judul_materi', des_mat='$deskripsi_materi', link_embed='$link_embed' 
    WHERE id_materi = '$id_materi'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus_materi($id)
{
    //memanggil variabel global conn
    global $conn;
    //query untuk menghapus data
    mysqli_query($conn, "DELETE FROM materi WHERE id_materi = '$id'");
    return mysqli_affected_rows($conn);
}