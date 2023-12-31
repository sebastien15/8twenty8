<?php /* Template Name: Home Temp */
get_header();
?>



<hr class="border-[#49413D]" />


<div class="flex home-container">
    <section class="section-text">
        <h1 class="section-text-title">Unveiling your <span class="text-green">Dreams</span>
            <br/>Crafting <span class="text-orange">Realities</span>
        </h1>
        <div class="hero-img-container relative">
            <img class="section-text-img" src="<?= get_template_directory_uri(); ?>/images/flowers.svg" alt="flowers" class="z-10" />
            <div class="badge absolute transform -translate-y-1/2 top-0 left-auto right-12">
                <img class="section-text-roundimage " src="<?= get_template_directory_uri(); ?>/images/event-planning.svg" alt="overlay" class="overlay-img" />
            </div>
            
        </div>
        
    </section>
    <section class="image-container">
        <img src="<?= get_template_directory_uri(); ?>/images/chair.svg" alt="chair" class="section-img rounded-3xl object-cover" />
    </section>
</div>





<div class="arrow-seperation flex justify-center my-20">
    <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow-down" />
</div>


<div class="text-2xl text-center space-y-4">
    <p class="text-[#004F52] mb-[30px]">About 8Twenty8 Spaces</p>
    <p>
        We provide the best interior design and event planning services for you.
    </p>
</div>


<div class="stats-container grid grid-cols-4 gap-4 text-center mt-[75px] w-[65%] mx-auto">
    <div class="stats">
        <h2 class="text-[60px] text-[#E7A362]"  id="count1">30 +</h2>
        <p class="text-[20px] text-[#49413D]">
            Interior design <br />
            projects
        </p>
    </div>
    <div class="stats">
        <h2 class="text-[60px] text-[#E7A362]"  id="count2">20 +</h2>
        <p class="text-[20px] text-[#49413D]">
            Events planned <br />
            successfully
        </p>
    </div>
    <div class="stats">
        <h2 class="text-[60px] text-[#E7A362]" id="count3">20 +</h2>
        <p class="text-[20px] text-[#49413D]">Ongoing <br /> project</p>
    </div>
    <div class="stats">
        <h2 class="text-[60px] text-[#E7A362]" id="count4">100 +</h2>
        <p class="text-[20px] text-[#49413D]">Happy <br />clients</p>
    </div>
</div>


<div class="services-section bg-[#F4F4F4] border border-none rounded-t-xl pt-10 mt-[84px] w-full" style="background: #F4F4F4;">
    <div class="service-title-wrapper  text-2xl text-center space-y-4">
        <p class="service-title text-[#004F52] text-2xl">Our Services</p>
        <p class="service-description text-2xl">
            We provide the best interior design and event planning services for
            you.
        </p>
    </div>
    <div class="services-container grid justify-center pb-[126px] px-[20%]">
        <div class="single-service flex flex-col">
            <div class="flex justify-between mt-20  p-10">
                <img src="<?= get_template_directory_uri(); ?>/images/interior-design.svg" alt="interior design" />
                <p class="text-[60px]">INTERIOR DESIGN</p>
                <img class="single-service-arrow" class="arrow" src="<?= get_template_directory_uri(); ?>/images/down-arrow-black.svg" alt="arrow-down" />

            </div>
            
            <div class="hidden-content hidden text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                <a href="#" class="recent-projects-link flex justify-center gap-2 my-3">Check out our recent projects <img class="arrow-right" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="arrow-right" /></a>
            </div>
        </div>
        <hr class="border-b-[#49413D] border" />
        <div class="single-service flex flex-col">
            <div class="flex justify-between mt-20  p-10">
                <img src="<?= get_template_directory_uri(); ?>/images/cheers.svg" alt="cheers" />
                <p class="text-[60px]">Service Title</p>
                <img class="single-service-arrow" src="<?= get_template_directory_uri(); ?>/images/down-arrow-black.svg" alt="arrow-down" />
            </div>
            <div class="hidden-content hidden text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                <a href="#" class="recent-projects-link flex justify-center gap-2 my-3">Check out our recent projects <img class="arrow-right" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="arrow-right" /></a>
            </div>
        </div>
        <hr class="border-b-[#49413D] border" />
    </div>
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

<div class="board-section w-full bg-[#004F52] text-white flex justify-center overflow-hidden mt-[133px] pb-[133px]">
    <div class="board-members flex justify-between w-9/12 gap-5 max-w-[1440px] py-20">
       
        <div class="member-desciption text-center ">
            <img src="<?= get_template_directory_uri(); ?>/images/Janet.svg" alt="Customer 1" class="rounded-md sm:w-[340px] h-auto mx-auto" />
            <h2 class="text-2xl mt-4">Mugabekazi Janet</h2>
            <p class="text-sm">Managing partner - ABC Lawyers</p>
            <p class="mt-4 text-[#FFFFFF]">
                “After struggling to find the right look for our home, we reached
                out to 8Twenty8, Their expert designers transformed our living space
                into a modern oasis.”
             
            </p>
        </div>
        <div class="member-desciption text-center ">
            <img src="<?= get_template_directory_uri(); ?>/images/James.svg" alt="Customer 2" class="rounded-md sm:w-[340px] h-auto mx-auto" />
            <h2 class="text-2xl mt-4">Mugabekazi Janet</h2>
            <p class="text-sm">Managing partner - ABC Lawyers</p>
            <p class="mt-4 text-[#FFFFFF]">
                “Twenty8 exceeded all expectations for our annual company gala.
                Their creativity and professionalism were evident throughout the
                entire process.”
            </p>
        </div>
        <div class="member-desciption text-center ">
            <img src="<?= get_template_directory_uri(); ?>/images/cynthia.svg" alt="Customer 3" class="rounded-md sm:w-[340px] h-auto mx-auto" />
            <h2 class="text-2xl mt-4">Mugabekazi Janet</h2>
            <p class="text-sm">Managing partner - ABC Lawyers</p>
            <p class="mt-4 text-[#FFFFFF]">
                “Twenty8 exceeded all expectations for our annual company gala.
                Their creativity and professionalism were evident throughout the
                entire process.”
            </p>
        </div>
    </div>
</div>

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


<script>

    $(document).ready(function () {
        $(".single-service").click(function () {
            // Toggle the visibility of the hidden content
            $(this).find('.hidden-content').slideToggle();
        });
    });

  document.addEventListener('DOMContentLoaded', function () {

      
    // Create CountUp instances for each element
    const countUp1 = new window.CountUp('count1', 30);
    const countUp2 = new window.CountUp('count2', 20);
    const countUp3 = new window.CountUp('count3', 20);
    const countUp4 = new window.CountUp('count4', 100);

    // Trigger animations when the element is in the viewport
    const options = {
      rootMargin: '0px',
      threshold: 0.2,
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          countUp1.start();
          countUp2.start();
          countUp3.start();
          countUp4.start();
          observer.unobserve(entry.target);
        }
      });
    }, options);

    // Observe each stats element
    document.querySelectorAll('.stats').forEach((stat) => {
      observer.observe(stat);
    });
  });
</script>



<?php
get_footer();
?>