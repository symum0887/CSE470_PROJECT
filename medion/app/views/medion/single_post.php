<?php $this->view("medion/header",$data);?>
 
          
          <section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center"><?=$data['post']->title?></h4>
               <img src="<?=ROOT.$data['post']->image?>" />
               <br>
               <?=$data['post']->carmodel?>
               <br>
               <?=$data['post']->description?>
               <br>
               <span>Price: $<?=$data['post']->price?></span>
               <div class="s-12 margin-top-20">
                  <a href="<?=ROOT?>bookcar" class="s-12 submit-form button background-primary text-white" type="submit">Book the Car</a>
                </div> 
            </div>              
          </section> 

<?php $this->view("medion/footer",$data);?>