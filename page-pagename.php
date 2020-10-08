<?php require("ems-incs/header.inc.php");
$pagetitle = "Our School Curriculum";
$ptitleshort = "Curriculum";
?>

 <section id="mu-page-breadcrumb" >
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2><?php echo $pagetitle;?></h2>
           <ol class="breadcrumb">
            <li><a href="<?php $emscms->base();?>">Home</a></li>            
            <li class="active"><?php echo $ptitleshort;?></li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class='col-md-9'>
                <!-- start course content container -->
                <div class='mu-course-container mu-course-details'>
                  <div class='row'>
                    <div class='col-md-12'>
                      <div class='mu-latest-course-single'>
                        <div class='mu-latest-course-single-content'>
                          <h2><a href='#'>Lorem ipsum dolor sit amet.</a></h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo est itaque vero porro quasi illo ex consequuntur ad animi commodi, ipsam provident voluptas vel adipisci. Minima repellendus vel est, sequi labore quo ipsa voluptatem officiis ex fuga nemo quas. Eligendi inventore ducimus omnis, maxime, alias accusantium similique minus! Labore facilis qui, sunt, ipsam consectetur minus sapiente saepe numquam magnam quidem.</p>
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, placeat, ipsa. Modi sed quibusdam vel autem fugit, eaque, iste. Excepturi fugit dignissimos suscipit dolor perferendis debitis magni sed, quia ab.</p>
                          </blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea consequatur doloremque deleniti error ullam, accusamus vel est alias, sit. Similique voluptas aliquid, excepturi accusamus, sequi ducimus incidunt mollitia non.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi saepe possimus doloribus quod quibusdam officia suscipit qui illum nemo itaque, porro ipsam tempore enim error eius quia, culpa. Reprehenderit consequuntur voluptatem dolorum magni natus inventore molestias veritatis eos aspernatur repudiandae.</p>
                          
                        </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Quick Links</h3>
                    <ul class="mu-sidebar-catg">
					<?php $emscms->widget_quick_links();?>
                    </ul>
                  </div>
				<div class="mu-single-sidebar">
                    <h3>Recent Photos</h3>
                    <div class="mu-sidebar-popular-courses">
						<?php $emscms->widget_recent_events();?>
                    </div>
                  </div>
				  
                  <!-- end single sidebar -->
                  </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
<?php require("ems-incs/footer.inc.php");?>
  </body>
</html>