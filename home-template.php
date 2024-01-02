<?php /* Template Name: Home Temp */
get_header();
?>



<hr class="border-[#49413D]" />


<div class="flex gap-[30px] w-full">
    <section class="text-[88px] text-[#49413D] relative">
        <p>Unveiling your <span class="text-[#004F52]">Dreams</span></p>
        <p>Crafting <span class="text-[#E7A362]">Realities</span></p>
        <img src="<?= get_template_directory_uri(); ?>/images/flowers.svg" alt="flowers" class="z-10" />
        <img src="<?= get_template_directory_uri(); ?>/images/event-planning.svg" alt="overlay" class="absolute bg-white rounded-full py-6 px-6 top-36 right-10 z-20" />
    </section>
    <section>
        <img src="<?= get_template_directory_uri(); ?>/images/chair.svg" alt="chair" class="h-full w-full" />
    </section>
</div>


<div class="flex justify-center my-20">
    <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow-down" />
</div>


<div class="text-2xl text-center space-y-4">
    <p class="text-[#004F52] mb-[30px]">About 8Twenty8 Spaces</p>
    <p>
        We provide the best interior design and event planning services for you.
    </p>
</div>


<div class="grid grid-cols-4 gap-4 text-center mt-[75px]">
    <div>
        <h2 class="text-[60px] text-[#E7A362]">30 +</h2>
        <p class="text-[20px] text-[#49413D]">
            Interior design <br />
            projects
        </p>
    </div>
    <div>
        <h2 class="text-[60px] text-[#E7A362]">20+</h2>
        <p class="text-[20px] text-[#49413D]">
            Events planned <br />
            successfully
        </p>
    </div>
    <div>
        <h2 class="text-[60px] text-[#E7A362]">20+</h2>
        <p class="text-[20px] text-[#49413D]">Ongoing project</p>
    </div>
    <div>
        <h2 class="text-[60px] text-[#E7A362]">100+</h2>
        <p class="text-[20px] text-[#49413D]">Happy clients</p>
    </div>
</div>


<div class="bg-[#F4F4F4] border border-none rounded-t-xl pt-10 mt-[84px] w-full" style="background: #F4F4F4;">
    <div class="text-2xl text-center space-y-4">
        <p class="text-[#004F52] text-2xl">Our Services</p>
        <p class="text-2xl">
            We provide the best interior design and event planning services for
            you.
        </p>
    </div>
    <div class="grid justify-center pb-[126px]">
        <div class="flex justify-between mt-20 w-[868px]">
            <img src="<?= get_template_directory_uri(); ?>/images/interior-design.svg" alt="interior design" />
            <p class="text-[60px]">INTERIOR DESIGN</p>
            <img src="<?= get_template_directory_uri(); ?>/images/down-arrow-black.svg" alt="arrow-down" />
        </div>
        <hr class="border-b-[#49413D] border" />
        <div class="flex justify-between w-[868px]">
            <img src="<?= get_template_directory_uri(); ?>/images/cheers.svg" alt="cheers" />
            <p class="text-[60px]">Service Title</p>
            <img src="<?= get_template_directory_uri(); ?>/images/down-arrow-black.svg" alt="arrow-down" />
        </div>
        <hr class="border-b-[#49413D] border" />
    </div>
</div>

<!-- <div class="text-center space-y-10 mt-20">
    <div class="text-2xl text-center space-y-4">
        <p class="text-[#004F52] text-2xl">Our process</p>
    </div>
    <p class="text-2xl text-[#49413D]">
        We can't wait to create something extraordinary for you, with you!
    </p>
    <div class="flex justify-center text-center space-x-10">
        <div class="bg-[#E7A362] text-white py-14 px-11 w-[308px] rounded-md border-none text-center">
            <p>
                LET’S DISCUSS <br />
                YOUR PROJECT <br />
                TODAY!
            </p>
        </div>
        <div class="border-[#E7A362] border rounded-md space-x-2 flex justify-between py-5 px-5">
            <div class="w-[221px] bg-[#F4F4F4] text-center pt-8 pb-5 h-[174px] rounded-xl">
                <p class="bg-[#004F52] border-none rounded-md text-center m-auto w-[60px] h-[60px] py-4 text-white">
                    1
                </p>
                <p class="text-[#49413D]">
                    Get in touch with <br />
                    our team today
                </p>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/images/right-arrow.svg" alt="right arrow">
            <div class="w-[221px] bg-[#F4F4F4] text-center pt-8 pb-5 h-[174px] rounded-xl">
                <p class="bg-[#004F52] border-none rounded-md text-center m-auto w-[60px] h-[60px] py-4 text-white">
                    2
                </p>
                <p class="text-[#49413D]">
                    Get in touch with <br />
                    our team today
                </p>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/images/right-arrow.svg" alt="right arrow">
            <div class="w-[221px] bg-[#F4F4F4] text-center pt-8 pb-5 h-[174px] rounded-xl">
                <p class="bg-[#004F52] border-none rounded-md text-center m-auto w-[60px] h-[60px] py-4 text-white">
                    3
                </p>
                <p class="text-[#49413D]">
                    Get in touch with <br />
                    our team today
                </p>
            </div>
        </div>
    </div>
</div> -->


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
            <img
                class="arrow-right-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                alt="Arrow Right"
            />
            <div class="inner-box">
              <div class="green-box"><p class="inner-text">2</p></div>              
              <p class="inner-text-gray">
                Our team will get <br /> back to you
              </p>
            </div>
            <img
                class="arrow-right-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                alt="Arrow Right"
            />
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

<div class="w-full bg-[#004F52] text-white flex justify-center overflow-hidden mt-[133px] pb-[133px] testmoney-container  py-20">
    <h3 class="">What our customers say</h3>
    <div class="flex justify-between  max-w-[1440px] w-9/12 gap-8">
        <div class="text-center max-w-[]">
            <img src="<?= get_template_directory_uri(); ?>/images/Janet.svg" alt="Customer 1" class="rounded-md w-full h-60 mx-auto" />
            <h2 class="text-2xl mt-4">Mugabekazi Janet</h2>
            <p class="text-sm">Managing partner - ABC Lawyers</p>
            <p class="mt-4 text-[#FFFFFF]">
                “After struggling to find the right look for our home, we reached
                out to 8Twenty8, Their expert designers transformed our living space
                into a modern oasis.”
            </p>
        </div>
        <div class="text-center max-w-[]">
            <img src="<?= get_template_directory_uri(); ?>/images/James.svg" alt="Customer 2" class="rounded-md w-full h-60 mx-auto" />
            <h2 class="text-2xl mt-4">Mugabekazi Janet</h2>
            <p class="text-sm">Managing partner - ABC Lawyers</p>
            <p class="mt-4 text-[#FFFFFF]">
                “Twenty8 exceeded all expectations for our annual company gala.
                Their creativity and professionalism were evident throughout the
                entire process.”
            </p>
        </div>
        <div class="text-center max-w-[]">
            <img src="<?= get_template_directory_uri(); ?>/images/cynthia.svg" alt="Customer 3" class="rounded-md w-full h-60 mx-auto" />
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

<div class="space-y-10 mt-20">
    <div class="text-2xl space-y-4">
        <p class="text-[#004F52] text-center text-2xl">Contact us</p>
    </div>
    <p class="text-2xl text-center text-[#49413D]">
        Get in touch with us and let’s start crafting your projects
    </p>
    <div class="flex justify-evenly">
        <div>
            <p class="text-[13px] text-[#49413D]">Email us at:</p>
            <div class="flex justify-between max-w-[510px]">
                <p class="text-[#004F52] text-[40px] mr-9">8twenty8@gmail.com</p>
                <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-green.svg" alt="email" />
            </div>
            <hr class="border-[#49413D]" />
        </div>
        <div>
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