<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Practicando para el examen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js">
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.js" integrity="sha512-x0GVeKL5uwqADbWOobFCUK4zTI+MAXX/b7dwpCVfi/RT6jSLkSEzzy/ist27Iz3/CWzSvvbK2GBIiT7D4ZxtPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




  <?php if ($this->session->flashdata("confirmacion")): ?>

    <script type="text/javascript">
      $(document).ready(function(){
        Swal.fire(
        'Correcto!',
        '<?php echo $this->session->flashdata("confirmacion"); ?>',
        'success'
      );
    });
    </script>
  <?php endif; ?>

  <?php if ($this->session->flashdata("error")): ?>

    <script type="text/javascript">
      $(document).ready(function(){
        Swal.fire(
        'ERROR',
        '<?php echo $this->session->flashdata("error"); ?>',
        'error'
      );
    });
    </script>
  <?php endif; ?>



  </head>
  <body>
<br>
<div class="row">
  <div class="col-md-1">

  </div>
  <div class="col-md-11 text-left">
    <h2>
      <b></b>
    </h2>

  </div>
</div>

<legend></legend>
