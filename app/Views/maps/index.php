<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Maps</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    </head>
    <body>
        <div class="container mt-5 mb-5 text-center">
            <h4>Data lokasi masjid</h4>
        </div>
        <div class="container">
            <h4>Daftar lokasi</h4>
            <hr>
            <a href="<?php echo base_url('maps/create'); ?>" class="btn btn-primary">Tambah lokasi</a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered table-hovered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Masjid</th>
                            <th>Alamat Masjid</th>
                            <th>Status</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($maps as $key => $data){ ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['address']; ?>></td>
                            <td><?php echo $data['status']; ?></td>
                            <td><?php echo $data['lat']; ?></td>
                            <td><?php echo $data['lon']; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo base_url('maps/show/'.$data['id']); ?>" class="btn btn btn-sm btn-primary">Detail</a>
                                    <a href="<?php echo base_url('maps/edit/'.$data['id']); ?>" class="btn btn btn-sm btn-success">Edit</a>
                                    <a href="<?php echo base_url('maps/delete/'.$data['id']); ?>" class="btn btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapusnya?');">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>