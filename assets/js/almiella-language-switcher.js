/**
 * =========================================
 * ALMIELLA Language Switcher
 * Version: 1.3.0
 * =========================================
 */


(function ($) {


    function initAlmiellaLanguageSwitcher() {


        $('.almiella-language-switcher').each(function () {


            const switcher = $(this);

            const button = switcher.find(
                '.almiella-language-trigger'
            );


            button.off('click.almiella');


            button.on(
                'click.almiella',
                function (e) {


                    e.preventDefault();

                    e.stopPropagation();


                    switcher.toggleClass(
                        'active'
                    );


                }
            );


        });



        $(document).off(
            'click.almiella'
        );


        $(document).on(
            'click.almiella',
            function () {


                $('.almiella-language-switcher')
                    .removeClass('active');


            }
        );



        $('.language-item').on(
            'click',
            function(e){

                e.stopPropagation();

            }
        );


    }



    $(document).ready(function(){

        initAlmiellaLanguageSwitcher();

    });



    $(window).on(
        'elementor/frontend/init',
        function(){

            initAlmiellaLanguageSwitcher();

        }
    );



})(jQuery);