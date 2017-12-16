<div class="container-fluid voeu-container">

<form class="container form-horizontal voeu-form">
<div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control voeu-input" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control voeu-input" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
  <div class="form-group">
      <input type="email" class="form-control voeu-input" id="inputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
      <input type="email" class="form-control voeu-input" id="inputEmail3" placeholder="Societe">
  </div>
  <div class="row">
        <div class="col-sm-3 form-group">
          <label for="voeu" class="control-label">Votre Voeu</label>          
        </div>
        <div class="col-sm-9 form-group">
        <textarea class="form-control voeu-input" rows="5" id="voeu"></textarea>

        </div>
      </div>

  <div class="submit-container">

      <button type="submit" class="btn submit-btn">ENVOYER MON VOEU</button>
  </div>
  <p class="thanks">Merci de nous avoir fait part de votre voeu pour 2018 !
      Tirage au sort le 31 Janvier 2018 !<p>
</form>
<img class="img-footer" src="<?= get_template_directory_uri(); ?>/dist/images/GET_footer_sapin.png" />
</div>

<div class="container-fluid red-background red-footer"></div>
<div class="container-fluid white-background red-footer"></div>
<!--
<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
-->
