/**
 * =========================================
 * ALMIELLA Language Switcher JS
 * Version: 1.0.0
 * =========================================
 */


(function ($) {


    "use strict";



    function initLanguageSwitcher() {


        $('.almiella-language-switcher').each(function () {


            const wrapper = $(this);

            const button = wrapper.find(
                '.almiella-language-trigger'
            );


            const menu = wrapper.find(
                '.almiella-language-menu'
            );



            if (!button.length || !menu.length) {

                return;

            }




            button.on('click', function (e) {


                e.preventDefault();


                e.stopPropagation();



                wrapper.toggleClass(
                    'active'
                );


            });





            $(document).on(
                'click',
                function () {


                    wrapper.removeClass(
                        'active'
                    );


                }
            );





            menu.on(
                'click',
                function(e){

                    e.stopPropagation();

                }
            );



        });


    }






    $(document).ready(function(){


        initLanguageSwitcher();


    });




})(jQuery);