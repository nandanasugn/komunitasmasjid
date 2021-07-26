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
            <h4>Edit lokasi</h4>
            <hr>
            <form action="<?php echo base_url('maps/update/'.$map['id']); ?>" method="post">
                <div class="form-group">
                    <label for="">Nama Masjid</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Masjid" value="<?php echo $map['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat Masjid</label>
                    <input type="text" name="address" class="form-control" placeholder="Alamat Masjid" value="<?php echo $map['address']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" value="<?php echo $map['status']; ?>">
                        <option value="">--- Pilih Status ---</option>
                        <option value="Sudah dibersihkan">Sudah dibersihkan</option>
                        <option value="Sedang dibersihkan">Sedang dibersihkan</option>
                        <option value="Belum dibersihkan">Belum dibersihkan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Latitude</label>
                    <input type="text" name="lat" class="form-control" placeholder="Latitude Masjid" value="<?php echo $map['lat']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Longitude</label>
                    <input type="text" name="lon" class="form-control" placeholder="Longitude Masjid" value="<?php echo $map['lon']; ?>">
                </div>
                <div class="form-group">
                    <a href="<?php echo base_url('maps'); ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>