<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
            <div class="message">
               <span>
                  ' . $message . '
               </span>
               <i class="fas fa-times" onclick="this.parentElement.remove()"></i>
            </div>';
   }
}
?>
  
  <!-- =========header seaction starts========== -->
  <section class="header">
        <a href="index" class="logo">DS<span>Algo</span></a>
        <nav class="navbar">
            <a href="index">home</a>
            <a href="platform">coding platforms</a>
            <a href="about">about</a>
            <a href="contact">contact</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- =========header seaction ends========== -->

