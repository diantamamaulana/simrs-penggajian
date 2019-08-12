<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $title; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item"><?php echo $title; ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <?php // print_r($pegawai) ?>

              </div>
              <div class="card-body">
                <?php
                if(isset ($page)){ 
                    if($page=="pegawai"){
                    $this->load->view('pegawai/index');
                    }elseif($page=="inputpegawai"){
                    $this->load->view('pegawai/add');
                    }elseif($page=="editpegawai"){
                    $this->load->view('pegawai/edit');
                    }elseif($page=='departemen'){
                    $this->load->view('departeman/index');
                    }elseif($page=='departemenadd'){
                    $this->load->view('departeman/add');
                    }elseif($page=='depertemenedit'){
                    $this->load->view('departeman/edit'); 
                    }elseif($page=='jabatan'){
                    $this->load->view('jabatan/index');
                    }elseif($page=="jabatanadd"){
                    $this->load->view('jabatan/add');
                    }elseif($page=='jabatanedit'){
                    $this->load->view('jabatan/edit');
                    }
                    
                    ?>

                <?php } ?>
                  
                
               
                      
              </div>
              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
            </div>
          </div>
        </section>
      </div>