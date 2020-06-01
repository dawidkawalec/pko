<?php
/**
* Template Name: Kontakt
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-title');?>
<div id="kontakt-page">

    <section class="home-formularz">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-7 text-left">
                    <p class="before-title">Kontakt</p>
                    <h2>Jak się z nami skontaktować?</h2>
                    <p class="bold">Polska Kancelaria Odszkodowań™ – Progressive Solicitors jest polsko-angielską
                        kancelarią zajmującą się uzyskiwaniem odszkodowania w UK, działającą na zasadzie NO WIN – NO
                        FEE.
                    </p>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="kontakt-kraj">
                                <h3>Kontakt z Wielkiej Brytanii</h3>
                                <div class="kontakt-adres">
                                    <p>100A Market Street, Hyde,
                                        Manchester SK14 1ES</p>
                                </div>
                                <div class="kontakt-mail">
                                    <a
                                        href="mailto:info@polskakancelariaodszkodowan.co.uk">info@polskakancelariaodszkodowan.co.uk</a>
                                </div>
                                <div class="kontakt-godziny">
                                    <p>Pn. - Pt.: 8:00-18:00
                                        Pn. - Pt.: 18:00-20:00 emergency contact
                                        Sob.: 10:00-18:00 emergency contact</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="kontakt-kraj">
                                <h3>Kontakt z Polski</h3>
                                <div class="kontakt-adres">
                                    <p>100A Market Street, Hyde,
                                        Manchester SK14 1ES</p>
                                </div>
                                <div class="kontakt-mail">
                                    <a
                                        href="mailto:info@polskakancelariaodszkodowan.co.uk">info@polskakancelariaodszkodowan.co.uk</a>
                                </div>
                                <div class="kontakt-godziny">
                                    <p>Pn. - Pt.: 8:00-18:00
                                        Pn. - Pt.: 18:00-20:00 emergency contact
                                        Sob.: 10:00-18:00 emergency contact</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Akceptujemy kontakt poprzez:</h2>
                    <p>Facebook, Whats App, Czat, E-mail, Telefon</p>
                    <h3>JESTEŚMY NOWOCZEŚNI TECHNOLOGICZNIE: </h3>
                    <p>Wychodząc naprzeciw oczekiwaniom naszych klientów używamy
                        najnowszych technologii kontaktu z klientem. Nie ważne gdzie jesteś, w Polsce czy w Wielkiej
                        Brytanii, możesz poprowadzić z nami sprawę korzystając z telefonu, emaila, Whats App, czatu,
                        Skypa czy VideoSpotkania. Dokumenty możesz podpisywać elektronicznie – bez konieczności ich
                        drukowania czy wychodzenia na pocztę. Dla tradycjonalistów jesteśmy dostępni w naszych biurach.
                    </p>

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="formularz">
                        <h3>Zgłoś wypadek</h3>
                        <?php echo do_shortcode( '[contact-form-7 id="39" title="Home form"]') ;?>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>

<?php
get_footer();