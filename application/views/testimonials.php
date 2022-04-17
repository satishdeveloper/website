<section class="iq-breadcrumb">
         <div class="iq-breadcrumb-info">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-7 align-self-center">
                     <h2 class="iq-fw-8 mb-3">Clients</h2>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="<?php echo base_url();?>">HOME</a></li>
                           <li class="breadcrumb-item active">BELOVED REVIEWS & TECHNOLOGIES</li>
                        </ol>
                     </nav>
                  </div>
                  <div class="col-md-5">
                     <img src="<?php echo base_url();?>assets/images/breadcrumb/process.png" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="iq-breadcrumb-img">
        <img src="<?php echo base_url();?>assets/images/breadcrumb/02.png" class="img-fluid breadcrumb-two" alt="image">
      </div>
      </section>
      <!-- Breadcrumb END -->
      <!-- Main Content -->
      <div class="main-content">
         <section class="process mb-5">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 position-relative">
                     <div class="main-process position-relative">
                         <?php if($clientsResult){
                             foreach($clientsResult as $key => $client){
                                if($key %2 == 0){
                                 ?>
                                <div class="process-main right-side">
                                   <div class="process-shap"><span>0<?php echo $key+1;?></span></div>
                                   <div class="process-detail text-right">
                                      <h2 class="mt-0 iq-fw-8 mb-2"><?php echo $client['name'];?></h2>
                                      <?php echo $client['description'];?>
                                   </div>
                                </div>
                                <?php }else{ ?>
                                    <div class="process-main left-side">
                                       <div class="process-shap shap-left shap-bg"><span>0<?php echo $key+1;?></span></div>
                                       <div class="process-left text-left">
                                          <h2 class="mt-0 iq-fw-8 mb-2"><?php echo $client['name'];?></h2>
                                          <?php echo $client['description'];?>
                                       </div>
                                    </div>
                                
                            <?php } 
                                 
                             }
                         } ?>
                        
                        
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>