<?php /* Template Name: Interior Design Temp */
get_header();
?>
  <div class=" event-container w-9/12 m-auto">
      <div class="banner">
        <div class="badge">
          <img src="<?= get_template_directory_uri(); ?>/assets/Interior design.svg" alt="Badge Image" />
        </div>
        <h1>
          <span class="main-text">
            Transforming  <span class="highlighted">Your Spaces</span>
          </span>
        </h1>
      </div>

      <img class="arrow-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-down.svg" alt="Arrow Icon" />

      <section class="events-section">
        <div class="event-row">
          <div class="event-column mt-8">
            <img
              class="event-image"
              src="<?= get_template_directory_uri(); ?>/assets/event-image-1.png"
              alt="Event Image"
            />
            <a class="event-text">
              Event 1 Description
              <img
                class="arrow-right-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                alt="Arrow Right"
              />
            </a>
          </div>
          <div class="event-column mt-8">
            <img
              class="event-image"
              src="<?= get_template_directory_uri(); ?>/assets/event-image-2.png"
              alt="Event Image"
            />
            <a class="event-text">
              Event 2 Description
              <img
                class="arrow-right-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                alt="Arrow Right"
              />
            </a>
          </div>
          <div class="event-column mt-8">
            <img
              class="event-image"
              src="<?= get_template_directory_uri(); ?>/assets/event-image-3.png"
              alt="Event Image"
            />
            <a class="event-text">
              Event 3 Description
              <img
                class="arrow-right-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                alt="Arrow Right"
              />
            </a>
          </div>
          <div class="event-column mt-8">
            <img
              class="event-image"
              src="<?= get_template_directory_uri(); ?>/assets/event-image-3.png"
              alt="Event Image"
            />
            <a class="event-text">
              Event 3 Description
              <img
                class="arrow-right-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                alt="Arrow Right"
              />
            </a>
          </div>
        </div>
      </section>
    </div>

   

<section class="our-process">
      <div class="flex flex-col items-center mx-auto">
            <h3 class="process-heading">Our Process</h3>
            <p class="process-description">
            We can't wait to create something extraordinary for you, with you!
            </p>
        <div class="process-content w-9/12 flex gap-5">
            <div class="process-column">
                <p>LET’S DISCUSS<br />YOUR PROJECT<br />TODAY!</p>
            </div>
          <div class="bordered-column flex gap-2">
                <div class="inner-box">
                    <div class="green-box"><p class="inner-text">1</p></div>              
                    <p class="inner-text-gray">
                        Get in touch with<br />our team today
                    </p>
                </div>
                <div class="arrow-container flex">
                    <img
                        class="arrow-right-icon"
                        src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                        alt="Arrow Right"
                    />
                </div>
              
            <div class="inner-box">
                <div class="green-box"><p class="inner-text">2</p></div>              
                <p class="inner-text-gray">
                    Our team will get <br /> back to you
                </p>
            </div>
            <div class="arrow-container flex">
                    <img
                        class="arrow-right-icon"
                        src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                        alt="Arrow Right"
                    />
                </div>
            <div class="inner-box">
              <div class="green-box"><p class="inner-text">3</p></div>              
              <p class="inner-text-gray">
                Let’s start the <br /> craft
              </p>
            </div>
          
          
          </div>
        </div>
      </div>
</section>


      <div class="contact-section space-y-10 mt-20">
          <div class="text-2xl space-y-4">
              <p class="text-[#004F52] text-center text-2xl">Contact us</p>
          </div>
          <p class="text-2xl text-center text-[#49413D]">
              Get in touch with us and let’s start crafting your projects
          </p>
          <div class="contact-details flex justify-evenly">
              <div class="contact-email">
                  <p class="text-[13px] text-[#49413D]">Email us at:</p>
                  <div class="contact-us flex justify-between max-w-[510px]">
                      <p class="text-[#004F52] text-[40px] mr-9">8twenty8@gmail.com</p>
                      <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-green.svg" alt="email" />
                  </div>
                  <hr class="border-[#49413D]" />
              </div>
              <div class="contact-Whatsapp">
                  <p class="text-[13px] text-[#49413D]">Whatsapp us at:</p>
                  <div class="flex justify-between max-w-[510px]">
                      <p class="text-[#E7A362] text-[40px] mr-9">+250 788 000 000</p>
                      <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-yellow.svg" alt="Whatsapp" />
                  </div>
                  <hr class="border-[#49413D]" />
              </div>
          </div>
      </div>
<?php 
get_footer();
?>