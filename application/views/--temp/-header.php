<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web Service Dilatih">
    <meta name="author" content="D'Latih Creator">

    <title>D'Latih - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- data tabel -->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<?php if ($this->uri->segment(1) == "auth" || !$this->uri->segment(1)) : ?>

<body class="bg-gradient-primary">

    <?php elseif ($this->uri->segment(1) == "er") : ?>


    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php else : ?>

            <body id="page-top">

                <!-- Page Wrapper -->
                <div id="wrapper">

                    <!-- Sidebar -->
                    <?php $this->load->view("--temp/-prop/-sidebar"); ?>
                    <!-- End of Sidebar -->

                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">

                            <!-- Topbar -->
                            <?php $this->load->view("--temp/-prop/-topbar"); ?>


                            <!-- End of Topbar -->

                            <?php endif; ?>