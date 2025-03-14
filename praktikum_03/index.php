<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container mt-5">
        <h2>selamat datang di perpustakaan STT-NF</h2>
        <p>silahkan isi buku tamu di bawah ini</p>
        <hr />

        <form method="POST" action="kunjungan.php">
  <div class="form-group row">
    <label for="Nama Lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Nama Lengkap" name="fullname" type="text" aria-describedby="Nama LengkapHelpBlock" class="form-control" required="required"> 
      <span id="Nama LengkapHelpBlock" class="form-text text-muted">isi nama lengkap kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Message" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="Message" name="email" type="text" class="form-control" aria-describedby="MessageHelpBlock" required="required"> 
      <span id="MessageHelpBlock" class="form-text text-muted">isi dengan Email aktif kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="message" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="message" name="message" cols="40" rows="5" aria-describedby="messageHelpBlock" class="form-control" required="required"></textarea> 
      <span id="messageHelpBlock" class="form-text text-muted">Tuliskan keperluan kamu mengunjungi perpustakaan</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</div>
</body>
</html>