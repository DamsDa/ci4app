<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- Css Kyta -->
  <link rel="stylesheet" href="/css/style.css">
  <title><?= $title; ?></title>
</head>

<body>
  <!-- navbar -->
  <?= $this->include('layout/navbar'); ?>

  <!-- content -->
  <?= $this->renderSection('content'); ?>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script>
    function previewImg() {
      const sampul = document.querySelector('#sampul');
      const sampulLabel = document.querySelector('.custom-file-label');
      const imgPreview = document.querySelector('.img-preview');

      // timpa nama file agar terlihat di input
      sampulLabel.textContent = sampul.files[0].name;

      // timpa gambar default dengan gambar yang kita upload
      const fileSampul = new FileReader();
      fileSampul.readAsDataURL(sampul.files[0]);
      fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
</body>

</html>