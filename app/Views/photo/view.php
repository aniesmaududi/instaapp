<?= $this->extend('layout/template-generic') ?>

<?= $this->section('top-content') ?>
      
<?= $this->endSection() ?>

<?= $this->section('main-content') ?>
          <?php 
          if($photoview){ 
            foreach($photoview as $photo):
            $photo_id = $photo['photo_id'];
            $photo_url = base_url('/photos/'.$photo['name']);
            $photo_user_id = $photo['user_id']; 
            $photo_user_name = 'Username'; //$photo['user_name']
            $photo_user_pp = base_url('/images/avatar/user1.jpg'); //$photo['user_pp']
            $photo_date = $photo['created_at'];
            $photo_likes = 100;
            $photo_comments = 5;

          ?>    
          <div class="row aln-center">
            <div class="col-8">
             <section class="box">
                  <div class="top-row">
                    <div><img src="<?= $photo_user_pp;?>" class="pp"></div>
                    <div class="ptext">
                      <h4><?= $photo_user_name;?></h4>
                      <div class="psmall"><?= $photo_date; ?></div>   
                    </div>                  
                  </div>  
                  <span class="image featured">
                    <img id="blah" src="<?= $photo_url;?>" class="special"/>
                  </span>
                  <?php foreach($comments as $comment): ?>
                  <div class="top-row">
                    <div><img src="<?= $photo_user_pp;?>" class="pp"></div>
                    <div class="ptext">
                      <h4><?= $comment['user_id'];?></h4>
                      <div class="psmall"><?= $comment['created_at']; ?></div>
                      <p><?= $comment['comments']; ?></p>
                    </div>                  
                  </div>
                  <?php endforeach; ?>
                    <?php if(session()->get('logged_in')) { ?>
                    <hr>
                    <form method="post" action="#">
                      <div class="row gtr-50 gtr-uniform">
                        <div class="col-12">
                          <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                          <ul class="actions special">
                            <li><input type="submit" value="Send Message" /></li>
                          </ul>
                        </div>
                      </div>
                    </form> 
                  <?php } else {
                    echo "MASUK dahulu untuk ikut berkomentar.";
                  }?>
              </section>
            </div>
          </div>
        <?php endforeach; 
        } ?>

<?= $this->endSection() ?>