<?php
/**
* Template Name: Zgłoś wypadek
 */

get_header(); ?>
<div id="zglos-wypadek">
    <div class="wrapper">
        <form action="" id="wizard">
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-1.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Zgłoś wypadek</h3>
                        </div>
                        <p>Wpisz podstawowe dane:</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Telefon" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <div class="select">
                                    <div class="form-holder">
                                        <div class="select-control">Kategoria zdarzenia</div>
                                        <i class="zmdi zmdi-caret-down"></i>
                                    </div>
                                    <ul class="dropdown">
                                        <li rel="wypadek-komunikacyjny">Wypadek komunikacyjny</li>
                                        <li rel="wypadek-w-pracy">Wypadek w pracy</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-holder">
                                <div class="select">
                                    <div class="form-holder">
                                        <div class="select-control">Rodzaj zdarzenia</div>
                                        <i class="zmdi zmdi-caret-down"></i>
                                    </div>
                                    <ul class="dropdown">
                                        <li rel="">(zależy od kategorii)</li>
                                        <li rel="">(zależy od kategorii)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Imię" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <div class="checkbox-tick">
                                    <label class="male">
                                        <input type="radio" name="gender" value="mezczyzna"> Mężczyzna<br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" name="gender" value="kobieta"> Kobieta<br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-circle">
                            <label>
                                <input type="checkbox" checked> Tutaj możemy zastosować checkbox
                                ze zgodną na przetwarzanie danych
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-2.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Odszkodowanie od 100£ do 1000£</h3>
                        </div>
                        <p>Wybierz Szczegóły zdarzenia w celu kalkulacji wysokości odszkodowania</p>
                        <div class="form-row" style="margin-bottom: 30px;">
                            <div class="form-holder w-100">
                                <input type="text" placeholder="Tutaj jakieś pole jeśli byłoby potrzebne"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <div class="select">
                                    <div class="form-holder">
                                        <div class="select-control">Kategoria obrażenia</div>
                                        <i class="zmdi zmdi-caret-down"></i>
                                    </div>
                                    <ul class="dropdown">
                                        <li rel="wypadek-komunikacyjny">Głowa</li>
                                        <li rel="wypadek-w-pracy">Noga</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-holder">
                                <div class="select">
                                    <div class="form-holder">
                                        <div class="select-control">Rodzaj obrażenia</div>
                                        <i class="zmdi zmdi-caret-down"></i>
                                    </div>
                                    <ul class="dropdown">
                                        <li rel="">(zależy od kategorii)</li>
                                        <li rel="">(zależy od kategorii)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-3.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Podsumowanie zgłoszenia</h3>
                        </div>
                        <p>W tym miejscu opisz sytuację, abyśmy jak najlepiej mieli okazje poznać sprawę.</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <textarea name="" id="" placeholder="Wpisz wiadomość" class="form-control"
                                    style="height: 99px;"></textarea>
                            </div>
                        </div>
                        <div class="checkbox-circle mt-24">
                            <label>
                                <input type="checkbox" checked> Akceptuje <a href="#">regulamin?</a>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>


<?php
get_footer();