<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__menu">
                <div class="footer__menu_pages">
                    <h3>Pages</h3>
                    <nav>
                            <?php 
                                wp_nav_menu( [
                                    'menu'            => 'Main', 
                                    'container'       => false, 
                                    'menu_class'      => 'footer__menu',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="footer__menu_link">%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                    </nav>
                </div>
                <div class="footer__menu_tomothy">
                    <h3>Tomothy </h3>
                    <nav>
                        <ul>
                            <li>Eleanor Edwards</li>
                            <li>Ted Robertson</li>
                            <li>Annette Russell</li>
                            <li>Jennie Mckinney</li>
                            <li>Gloria Richards</li>    
                        </ul>
                    </nav>
                </div>
                <div class="footer__menu_jane">
                    <h3>Jane Black</h3>
                    <nav>
                        <ul>
                            <li>Philip Jones</li>
                            <li>Product</li>
                            <li>Colleen Russell</li>
                            <li>Marvin Hawkins</li>
                            <li>Bruce Simmmons</li>
                        </ul> 
                    </nav>
                </div>
                <div class="footer__contacts">
                    <div class="footer__contacts_adress">
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/footer/map_white.svg" alt="adress">
                        <p><?php the_field('adress_1',2); ?> </p>
                    </div>
                    <div class="footer__contacts_phone">
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/footer/phone_white.svg" alt="phone">
                        <a href="tel:2395550108"><?php the_field('phone_1',2); ?></a>
                    </div>
                    <div class="footer__social">
                        <a href="<?php the_field ('twitter',2); ?>" class="footer__social_link">
                            <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/footer/tw.svg" alt="twitter">
                        </a>
                        <a href="<?php the_field ('facebook',2); ?>" class="footer__social_link">
                            <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/social/fb.svg" alt="facebook">
                        </a>
                        <a href="<?php the_field ('linkedin',2); ?>" class="footer__social_link">
                            <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/footer/ln.svg" alt="linkedin">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
    wp_footer();
?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo8LmKnzQb6PFLjbCiE24Q5dBtVztpA9o"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="Scripts/VideoScript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript">
   
    (function($) { -->

        /*
        *  new_map
        *
        *  Эта функция рендерит Google карту внутри выбранного jQuery элемента
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	4.3.0
        *
        *  @param	$el (jQuery элемент)
        *  @return	n/a
        */

            function new_map( $el ) {
            
            // Переменные
                var $markers = $el.find('.marker');
            
            
            // Переменные
                var args = {
                    zoom		: 16,
                    center		: new google.maps.LatLng(0, 0),
                    mapTypeId	: google.maps.MapTypeId.ROADMAP
                };
            
            
            // Создаем карту	        	
                var map = new google.maps.Map( $el[0], args);
            
            
            // Создаем заготовку массива маркеров
                map.markers = [];
            
            
            // Добавляем маркеры
                $markers.each(function(){
                
                    add_marker( $(this), map );
                
                });
            
            
            // Центрируем карту
                center_map( map );
            
            
            // Возвращаем данные
                return map;
            
            }

        /*
        *  add_marker
        *
        *  Эта функция добавляет маркер на Google карту
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	4.3.0
        *
        *  @param	$marker (jQuery элемент)
        *  @param	map (Google Map object)
        *  @return	n/a
        */

            function add_marker( $marker, map ) {

            // Переменные
                var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            // Создаем маркер
                var marker = new google.maps.Marker({
                    position	: latlng,
                    map			: map
                });

            // Добавляем маркер в массив
                map.markers.push( marker );

            // Если маркер содержит HTML, добавим его в infoWindow
                if( $marker.html() )
                {
                // оздаем info window
                    var infowindow = new google.maps.InfoWindow({
                        content		: $marker.html()
                    });

                // Показываем info window при нажатии на маркер
                    google.maps.event.addListener(marker, 'click', function() {

                        infowindow.open( map, marker );

                    });
                }

            }

        /*
        *  center_map
        *
        *  Эта функция центрирует карту и показывает все маркеры, прикрепленные к карте
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	4.3.0
        *
        *  @param	map (Google Map object)
        *  @return	n/a
        */

            function center_map( map ) {

            // Переменные
                var bounds = new google.maps.LatLngBounds();

            // Перебираем все маркеры и создаем bounds
                $.each( map.markers, function( i, marker ){

                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                    bounds.extend( latlng );

                });

            // Только 1 маркер?
                if( map.markers.length == 1 )
                {
                // Центрируем карту
                    map.setCenter( bounds.getCenter() );
                    map.setZoom( 16 );
                }
                else
                {
                // fit to bounds
                 map.fitBounds( bounds );
                }

            }

        /*
        *  document ready
        *
        *  Эта функция рендерит каждую карту когда страница загружена
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	5.0.0
        *
        *  @param	n/a
        *  @return	n/a
        */
        // global var
            var map = null;

            $(document).ready(function(){

                $('.acf-map').each(function(){

                // Создаем карту
                map = new_map( $(this) );

                });

            }); -->

            })(jQuery);
            </script>
        </div>
    </body>
</html>