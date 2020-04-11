<!-- header  -->
<div id='header'>

 <!--top header  -->
    <div id='top_head'>
   <!-- social media contact -->
         <div id='link_media'>
             <ul>
                 <li><a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                 <li><a href="https://www.linkeidn.com"><i class="fab fa-linkedin"></i></a></li>
                 <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                 <li><a href="https://github.com/islambou9427"><i class="fab fa-github-square"></i></a></li>
             </ul>
         </div>
    <!-- End social media contact -->

    <!-- date -->
         <div id='date'>
             <?php  echo date('l, d F Y') ?>
         </div>
    <!-- End date -->

    <!-- title -->
         <div id='title'>
             <p>1 platforme E-learning algérienne </p>
         </div>
    <!-- End title -->

    </div>

<!-- End top header  -->


<!-- buttom header  -->

    <div id='logo'>
        <a href="index.php"><img src="src/logo.png" alt=""></a>
    </div>
    <div id='menu'>
        <h2><i class="fas fa-bars"></i></h2>
        <?php  include("menu_site/menu_cat.php"); ?>
    </div>

    <div id='serch_bar'>
        <form method="POST" enctype="multipart/form-data">

            <input type="serch" name="query" placeholder="Trouvez le cours … Exemple : java , photoshop , Php"/>
            <button name='serchh'><i class="fas fa-search"></i></button>

        </form>
    </div>

    <div id='login'>
         <h4><i class="fas fa-user"></i>  Se Connecter</h4>
         <form method ='POST'>
         <center>
             <h3><i class="fas fa-user"></i></h3>
             <h4>Se Connecter</h4>
         </center>
               <div id='input_email'>
                  <i class="fas fa-envelope"></i>
                  <input type="text" name="u_email" placeholder="Entrer Email ">
              </div>

              <div id='input_pass'>
                  <i class="fas fa-lock"></i>
                  <input type="password" name="u_pass" placeholder="Entrer mot de passe ">
              </div>
            <h5><a href="#">Oublié le mot de passe ?</a></h5>
            <br>
            <center><button name="login">Se Connecter</button></center>
         </form>

    </div>

    <div id='singup'>
        <h4><i class="fas fa-user-plus"></i>  Inscription</h4>
        <form method ='POST'>
         <center>
             <h3><i class="fas fa-user-plus"></i></h3>
             <h4>Inscription</h4>
         </center>
              <div id='input_email'>
              <i class="fas fa-user"></i>
                  <input type="text" name="ur_name" placeholder="Entrer Votre Nom">
               </div>
               <div id='input_email'>
                  <i class="fas fa-user"></i>
                  <input type="text" name="ur_name" placeholder="Entrer Votre Prénom">
               </div>
               <div id='input_email'>
                  <i class="fas fa-envelope"></i>
                  <input type="text" name="ur_email" placeholder="Entrer Email ">
               </div>

              <div id='input_pass'>
                  <i class="fas fa-lock"></i>
                  <input type="password" name="ur_pass1" placeholder="Entrer mot de passe ">
              </div>
              <div id='input_pass'>
                  <i class="fas fa-lock"></i>
                  <input type="password" name="ur_pass2" placeholder="Confirmer mot de passe ">
              </div>
            <br>
            <center><button name="singup">S'inscrire </button></center>
         </form>


    </div>


<!-- End buttom header  -->


<!-- End  header  -->
</div>