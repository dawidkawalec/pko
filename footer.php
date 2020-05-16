<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

<?php get_template_part( 'footer-widget' ); ?>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <h3>Ważne informacje</h3>
                <p>Progressive Solicitors is a trading name of Progressive Solicitors Limited, a limited company
                    registered in England and Wales (Registered number 10361139). Our registered office address is 100A
                    Market Street, Hyde, Cheshire SK14 1ES. Progressive Solicitors Limited is authorised and regulated
                    by the Solicitors Regulation Authority (allocated registration number 634041). We have Professional
                    Indemnity Insurance in place for our England and Wales services users and details will be provided
                    when a qualifying enquiry is made. Progressive Solicitors Limited is not authorised under the
                    Financial Services and Markets Act 2000. However, we are on the Financial Services Authority
                    register so that we can carry out Insurance Mediation Activity. All other trademarks and copyrights
                    are the properties of their respective holders.
                </p>
                <p>
                    This website provides information related to the subjects covered. Before making any financial or
                    legal decisions, a professional should be consulted.</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Przydatne linki</h3>
                <ul>
                    <li><a href="#">Regulamin</a></li>
                    <li><a href="#">Polityka prywatności</a></li>
                    <li><a href="#">Interest Policy</a></li>
                    <li><a href="#">Pliki cookies</a></li>
                </ul>
                <img src="/wp-content/uploads/2020/05/chrome_ZHZqLLd43n.png" alt="obrazek">
            </div>
            <div class="col-lg-4 col-md-6">
                <h3>Szybki kontakt</h3>
                <div class="footer-kontakt">
                    <ul>
                        <li>
                            <img src="/wp-content/uploads/2020/05/chrome_PHdDjGd9uE.png" alt="">
                            <p style="line-height: 22px;">100A Market Street, Hyde,<br>Manchester SK14 1ES</p>
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2020/05/chrome_528mhJXgG9.png" alt="">
                            <p>0161 7914 669</p>
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2020/05/chrome_eR03OLFMP5.png" alt="">
                            <p>info@polskakancelariaodszkodowan.co.uk</p>
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2020/05/chrome_UuRsCx66C7.png" alt="">
                            <p>PolskaKancelariaOdszkodowanUK</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Obsługujemy Klientów z takich miast jak:</h3>
                <p>London North, London South, London West, London East, London - London City, North East, North West,
                    South East, South West, Londyn West Midlands - Birmingham, Wolverhampton, Stoke-On-Trent,
                    Burton-Upon-Trent, Sutton Coldfield, Southampton, Southend-On-Sea TelfordEast Midlands - Derby,
                    Nottingham, Leicester, NorthamptonSouth West - Bournemouth, Plymouth, Devon, Bristol, Somerset,
                    Swindon, Gloucester, Poole, CornwallSouth East - Reading, Milton Keynes, Brighton I Hove, York,
                    Coventry Portsmouth, Kent, Oxford, Surrey, West SussexWales - Cardiff, Newport, Swansea. East Of
                    England - Peterborough, Cambridge, Norfolk, Suffolk, Luton, Bedfordshire, Hertfordshire, Essex,
                    Walsall Thurrock. North West - Cheshire, Warrington, Cumbria, Manchester, Lancashire, Blackpool,
                    Liverpool, Wirral, St Helens. Yorkshire - Leeds, Doncaster, Sheffield, Kingston Upon Hull,
                    Scarborough, Barnsley</p>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-12">
                <p>2020 © Copyright Polskakancelaria. Wszelkie prawa zastrzeżone</p>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>