<?php $this->view("medion/header",$data);?>
<section class="section background-white">
  <div class="s-12 m-12 l-4 center">
    <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Book a car for purchase</h4>
      <form name="contactForm" class="customform" method="post">
                <div class="s-12">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="fname" class="name" placeholder="Your first name" title="Your first name" type="text">
                      <p class="email-error form-error">Please enter your first name</p>
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="lname" class="name" placeholder="Your last name" title="Your last name" type="text">
                      <p class="name-error form-error">Please enter your last name.</p>
                    </div>
                  </div>
                </div>
                <div class="s-12"> 
                  <input name="carmodel" class="subject" placeholder="Car Model" title="Phone no" type="text">
                  <p class="subject-error form-error">Please enter carmodel</p>
                </div>
                <div class="s-12"> 
                  <input name="phonenumber" class="subject" placeholder="Phone no" title="Phone no" type="number">
                  <p class="subject-error form-error">Please enter phone number</p>
                </div>
                <div class="s-12"> 
                  <input name="email" class="subject" placeholder="Your Email" title="Email" type="email">
                  <p class="subject-error form-error">Please enter your email</p>
                </div>
                <div class="s-12"> 
                  <input name="addressline" class="subject" placeholder="Your Address Line" title="Subject" type="text">
                  <p class="subject-error form-error">Please enter address</p>
                </div>
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input name="city" class="name" placeholder="Your City" title="Your City" type="text">
                    <p class="email-error form-error">Please enter City</p>
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input name="country" class="name" placeholder="Your Country" title="Your Country" type="text">
                    <p class="name-error form-error">Please enter Country</p>
                  </div>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
       </form> 
  </div>    
</section>
<?php $this->view("medion/footer",$data);?>