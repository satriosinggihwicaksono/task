<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <link rel="icon" href="<?=base_url('assets2/img/favicon.ico')?>" type="image/x-icon" sizes="16x16">
    <link rel="shortcut icon" href="<?=base_url('assets2/img/favicon.ico')?>" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/apps.css">
    <!-- fontawesome -->
    

    <?php 
        if(!empty($this->uri->segment(1))){  
            $this->load->view($this->uri->segment(1).'/header');
        } else {
            $this->load->view('dashboard/header');
        }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
       
    <div id="app">
       
        <?php 
            $this->load->view('menu');
        ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

           
            <?php 
                if(!empty($this->uri->segment(1))){
                    $this->load->view($this->uri->segment(1).'/content');
                } else {
                    $this->load->view('dashboard/content');
                }
            ?>
        </div>
    </div>

    <script src="<?=base_url()?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- fontawesome -->
    <script src="<?=base_url('assets/')?>/vendors/fontawesome/all.min.js"></script>
    <?php 
        if(!empty($this->uri->segment(1))){  
            $this->load->view($this->uri->segment(1).'/footer');
        } else {
            $this->load->view('dashboard/footer');
        }
    ?>
</body>

</html>