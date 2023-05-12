<?php include 'header.php'; ?>

      <!-- end banner -->
      <!-- appointment -->
      <div class="appointment">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage text_align_center">
                     <h2>Contact Us</h2>
                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <form id="request" class="main_form" action="../settings/crud.php" method="post">
                     <div class="row">
                        <div class="col-md-6 ">
                           <input class="form_control" placeholder="Your name" type="type" name=" name">
                        </div>
                        <div class="col-md-6">
                           <input class="form_control" placeholder="Email" type="type" name="email">
                        </div>
                        <div class="col-md-4">
                           <input class="form_control" placeholder="Phone Number" type="type" name="number">
                        </div>

                        <div class="col-md-4 ">
                           <input class="form_control" placeholder="Time" type="time" name=" time">
                        </div>
                        <div class="col-md-4">
                           <input type="text" class="form_control" id="my_date_picker" placeholder="date" >
                        </div>
                        <div class="col-md-12">
                           <textarea style=" color: #d0d0cf;" class="textarea" placeholder="Message" type="type" name="message">message </textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" name="contact_send" value="1">Send Now</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end appointment -->
      <!--  footer -->
   <?php  include "footer.php"?>