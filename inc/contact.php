<div class="contact-section space-y-10 mt-20">

    <?php
    if (get_field('contact_us_section')) :
        $contact_sec = get_field('contact_us_section');
    ?>
        <div class="text-2xl space-y-4">
            <p class="text-[#004F52] text-center text-2xl"><?= $contact_sec['title'] ?></p>
        </div>
        <p class="text-2xl text-center text-[#49413D]">
        <?= $contact_sec['description'] ?>
        </p>
        <div class="contact-details flex justify-evenly">
            <div class="contact-email">
                <p class="text-[13px] text-[#49413D]"><?= $contact_sec['email_title'] ?></p>
                <div class="contact-us flex justify-between max-w-[510px]">
                    <p class="text-[#004F52] text-[40px] mr-9"><?= $contact_sec['email'] ?></p>
                    <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-green.svg" alt="email" />
                </div>
                <hr class="border-[#49413D]" />
            </div>
            <div class="contact-Whatsapp">
                <p class="text-[13px] text-[#49413D]"><?= $contact_sec['whatsapp_title'] ?></p>
                <div class="flex justify-between max-w-[510px]">
                    <p class="text-[#E7A362] text-[40px] mr-9"><?= $contact_sec['whatsapp_number'] ?></p>
                    <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-yellow.svg" alt="Whatsapp" />
                </div>
                <hr class="border-[#49413D]" />
            </div>
        </div>

    <?php endif; ?>

</div>
