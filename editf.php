<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM filess WHERE id = $id";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf') {
            $dir = 'filess/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
            }
        }
    }

    $query = "UPDATE filess SET title = '$title', description = '$description', url = '$new_name_file' WHERE id = $id";
    mysqli_query($con, $query);
    header('Location: adminServ.php');
   
}

?>

<?php include('includes/header.php') ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body shadow-lg p-3 mb-5 bg-body rounded">
                <form action="editf.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data" class="shadow p-3 mb-5 bg-body rounded">
                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Actualice el Titulo">
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" name="description" value="<?php echo $description; ?>" class="form-control" placeholder="Actualice la Descripción">
                    </div>
                    <div class="form-group">
                        <label>Archivo</label>
                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>