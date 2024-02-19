window.addEventListener('load', function () {
    function select_element(element) {
        let selected_element = document.querySelector(element);
        if(element){
            return selected_element;
        }
    }
    function select_multiple_elements(element) {
        let selected_element = document.querySelectorAll(element);
        if(selected_element){
            return selected_element;
        }
    }
    function add_class(element, class_names = []){
        let selected_element = document.querySelector(element);
        if(selected_element){
            return selected_element.classList.add(...class_names);
        }
    }
    function remove_class(element, class_names = []){
        let selected_element = document.querySelector(element);
        if(selected_element){
            return selected_element.classList.remove(...class_names);
        }
    }
    function toggle_class(element, class_names) {
        let selected_element = document.querySelector(element);
        if(selected_element){
            return selected_element.classList.toggle(class_names);
        }
    }
    function add_scrolling_element(element, add_class_point){
        let scroll_point;
        let scroll_down_point = add_class_point;
        let start_animation_point = 1.5*scroll_down_point;
        let end_animation_point = 1.5*scroll_down_point;

        let scroll_position = window.scrollY;
        if(scroll_position > 0){
            add_class(element, ['scrolled'])
        }

        window.addEventListener('scroll', function () {
            let scroll_height = window.scrollY;

            if(scroll_height > scroll_point && scroll_height > start_animation_point){
                add_class(element, ['start-animate']);
            }

            if(scroll_height > scroll_point){
                add_class(element, ['scroll-down']);
                remove_class(element, ['scroll-up', 'end-animate']);
            } else {
                add_class(element, ['scroll-up']);
                remove_class(element, ['scroll-down', 'start-animate']);
            }

            if(scroll_height < scroll_point && scroll_height < end_animation_point){
                add_class(element, ['end-animate']);
            }

            scroll_point = scroll_height;

            if(scroll_point < scroll_down_point || scroll_point === 0){
                remove_class(element, ['scroll-down', 'scroll-up', 'start-animate']);
            }
            if(scroll_height < 100){
                remove_class(element, ['end-animate']);
            }
            remove_class(element, ['scrolled'])
        });
    }

    //  Functions call
    add_scrolling_element('.header-jump_js', 1000);
    add_scrolling_element('.header-transparent_js', 200);
    add_scrolling_element('.header-reduce_js', 1000);

    /***
     *   General Menu
     ***/
        //  Menu
    let menu_open_btn  = select_element('.menu-open-btn_js');
    let menu_close_btn = select_element('.menu-close-btn_js');
    let menu_overlay   = select_element('.menu-overlay_js');
    // Menu: Open Close
    menu_open_btn.addEventListener('click', function () {
        add_class('.prefix-menu', ['active']);
        add_class('.menu-overlay_js', ['active']);
        add_class('body', ['no-ovrf']);
        add_class('html', ['no-ovrf']);
    });
    menu_close_btn.addEventListener('click', function () {
        remove_class('.prefix-menu', ['active']);
        remove_class('.menu-overlay_js', ['active']);
        remove_class('body', ['no-ovrf'])
        remove_class('html', ['no-ovrf']);
    });
    //  Overlay: Show Hide
    menu_overlay.addEventListener('click', function () {
        remove_class('.menu-overlay_js', ['active']);
        remove_class('.prefix-menu', ['active']);
        remove_class('body', ['no-ovrf']);
        remove_class('html', ['no-ovrf']);
    });

    //  Menu: Items show hide
    let menu_items_icon    = select_multiple_elements('.general-menu_js > .menu-item-has-children > .mobile-menu-icon');
    let submenu_items_icon = select_multiple_elements('.sub-menu_js > .menu-item-has-children > .mobile-menu-icon');

    //  Menu items
    for(let i = 0; i < menu_items_icon.length; i++){
        let current = menu_items_icon[i];
        current.addEventListener('click', function () {
            /** Accordion Expand
             let submenu_item_active = select_element('.menu-item-has-children .active');
             if(submenu_item_active){
                    submenu_item_active.classList.remove('active');
                }
             current.classList.add('active');
             **/
            current.classList.toggle('active');
        })
    }
    //  SubMenu items
    for(let j = 0; j < submenu_items_icon.length; j++){
        let current = submenu_items_icon[j];
        current.addEventListener('click', function () {
            current.classList.toggle('active');
        })
    }

})



