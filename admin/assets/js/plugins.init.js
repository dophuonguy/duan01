/* Template Name: Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 2.0.0
   Created: May 2022
   File Description: Common JS file of the template(plugins.init.js)
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Tiny Slider          *
 *     02.  Swiper slider        *
 *     03.  Countdown Js         * (For Comingsoon pages)
 *     04.  Maintenance js       * (For Maintenance page)
 *     05.  Data Counter         *
 *     06.  Datepicker js        *
 *     07.  Gallery filter js    * (For Portfolio pages)
 *     08.  Tobii lightbox       * (For Portfolio pages)
 *     09.  CK Editor            * (For Compose mail)
 *     10.  Fade Animation       * 
 *     11.  Typed Text animation (animation) * 
 *     12.  Validation Form      * 
 *     13.  Switcher Pricing Plan* 
 *     14.  Cookies Policy       *
 *     15.  Back Button          *
 *     16.  Particles            *
 *     17.  Components           *
 *          1. Navtabs           *
 *          2. Modal             *
 *          3. Carousel          *
 *          4. Accordions        *
 *     18. Upload Profile        *
 *     19. Custom Dropdown       * (For Dropdown)
 *     20. Connect wallet        * (Only For MetaMask)
 ================================*/
         
//=========================================//
/*            01) Tiny slider              */
//=========================================//

if(document.getElementsByClassName('tiny-single-item').length > 0) {
    var slider = tns({
        container: '.tiny-single-item',
        items: 1,
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        speed: 400,
        gutter: 16,
    });
};

if(document.getElementsByClassName('tiny-one-item').length > 0) {
    var slider = tns({
        container: '.tiny-one-item',
        items: 1,
        controls: true,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
        nav: false,
        speed: 400,
        gutter: 0,
    });
};

//=========================================//
/*            06) Countdown                */
//=========================================//
try {
    if(document.getElementById("days")){
        // The data/time we want to countdown to
        var eventCountDown = new Date("December 25, 2023 16:37:52").getTime();

        // Run myfunc every second
        var myfunc = setInterval(function () {

            var now = new Date().getTime();
            var timeleft = eventCountDown - now;

            // Calculating the days, hours, minutes and seconds left
            var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

            // Result is output to the specific element
            document.getElementById("days").innerHTML = days + "<p class='count-head'>Days</p> "
            document.getElementById("hours").innerHTML = hours + "<p class='count-head'>Hours</p> "
            document.getElementById("mins").innerHTML = minutes + "<p class='count-head'>Mins</p> "
            document.getElementById("secs").innerHTML = seconds + "<p class='count-head'>Secs</p> "

            // Display the message when countdown is over
            if (timeleft < 0) {
                clearInterval(myfunc);
                document.getElementById("days").innerHTML = ""
                document.getElementById("hours").innerHTML = ""
                document.getElementById("mins").innerHTML = ""
                document.getElementById("secs").innerHTML = ""
                document.getElementById("end").innerHTML = "00:00:00:00";
            }
        }, 1000);
    }
} catch (err) {

}


//=========================================//
/*/*            04) Maintenance js         */
//=========================================//

try {
    if(document.getElementById("maintenance")){
        var seconds = 3599;
        function secondPassed() {
            var minutes = Math.round((seconds - 30) / 60);
            var remainingSeconds = seconds % 60;
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }
            document.getElementById('maintenance').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
                clearInterval(countdownTimer);
                document.getElementById('maintenance').innerHTML = "Buzz Buzz";
            } else {
                seconds--;
            }
        }
        var countdownTimer = setInterval('secondPassed()', 1000);
    }
} catch (err) {

}

//=========================================//
/*/*            05) Data Counter           */
//=========================================//

try {
    const counter = document.querySelectorAll('.counter-value');
    const speed = 2500; // The lower the slower

    counter.forEach(counter_value => {
        const updateCount = () => {
            const target = +counter_value.getAttribute('data-target');
            const count = +counter_value.innerText;

            // Lower inc to slow and higher to slow
            var inc = target / speed;

            if (inc < 1) {
                inc = 1;
            }

            // Check if target is reached
            if (count < target) {
                // Add inc to count and output in counter_value
                counter_value.innerText = (count + inc).toFixed(0);
                // Call function every ms
                setTimeout(updateCount, 1);
            } else {
                counter_value.innerText = target;
            }
        };

        updateCount();
    });
} catch (err) {

}

//=========================================//
/*/*            07) Gallery filter js      */
//=========================================//

try {
    var Shuffle = window.Shuffle;

    class Demo {
        constructor(element) {
            if(element){
                this.element = element;
                this.shuffle = new Shuffle(element, {
                    itemSelector: '.picture-item',
                    sizer: element.querySelector('.my-sizer-element'),
                });

                // Log events.
                this.addShuffleEventListeners();
                this._activeFilters = [];
                this.addFilterButtons();
            }
        }

        /**
         * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
         * for them like you normally would (with jQuery for example).
         */
        addShuffleEventListeners() {
            this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                console.log('layout. data:', data);
            });
            this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                console.log('removed. data:', data);
            });
        }

        addFilterButtons() {
            const options = document.querySelector('.filter-options');
            if (!options) {
                return;
            }

            const filterButtons = Array.from(options.children);
            const onClick = this._handleFilterClick.bind(this);
            filterButtons.forEach((button) => {
                button.addEventListener('click', onClick, false);
            });
        }

        _handleFilterClick(evt) {
            const btn = evt.currentTarget;
            const isActive = btn.classList.contains('active');
            const btnGroup = btn.getAttribute('data-group');

            this._removeActiveClassFromChildren(btn.parentNode);

            let filterGroup;
            if (isActive) {
                btn.classList.remove('active');
                filterGroup = Shuffle.ALL_ITEMS;
            } else {
                btn.classList.add('active');
                filterGroup = btnGroup;
            }

            this.shuffle.filter(filterGroup);
        }

        _removeActiveClassFromChildren(parent) {
            const { children } = parent;
            for (let i = children.length - 1; i >= 0; i--) {
                children[i].classList.remove('active');
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        window.demo = new Demo(document.getElementById('grid'));
    });
} catch (err) {

}


//=========================================//
/*/*            08) Tobii lightbox         */
//=========================================//

try {
    const tobii = new Tobii()
} catch (err) {

}


//=========================================//
/*/*            09) CK Editor              */
//=========================================//

try {
    ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
} catch(err) {

}

//=========================================//
/*/*            15) Back Button            */
//=========================================//
document.getElementsByClassName("back-button")[0]?.addEventListener("click", (e)=>{
    if (document.referrer !== "") {
        e.preventDefault();
        window.location.href = document.referrer;
      }
})

  

//=========================================//
/*            17) Components               */
//=========================================//

//============= 01) Navtabs ===============//
try {
    const Default = {
        defaultTabId: null,
        activeClasses: 'text-white bg-indigo-600',
        inactiveClasses: 'hover:text-indigo-600 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-slate-800',
        onShow: () => { }
    }
    
    class Tabs {
        constructor(items = [], options = {}) {
            this._items = items
            this._activeTab = options ? this.getTab(options.defaultTabId) : null
            this._options = { ...Default, ...options }
            this._init()
        }
    
        _init() {
            if (this._items.length) {
                // set the first tab as active if not set by explicitly
                if (!this._activeTab) {
                    this._setActiveTab(this._items[0])
                }
    
                // force show the first default tab
                this.show(this._activeTab.id, true)
    
                // show tab content based on click
                this._items.map(tab => {
                    tab.triggerEl.addEventListener('click', () => {
                        this.show(tab.id)
                    })
                })
            }
        }
    
        getActiveTab() {
            return this._activeTab
        }
    
        _setActiveTab(tab) {
            this._activeTab = tab
        }
    
        getTab(id) {
            return this._items.filter(t => t.id === id)[0]
        }
    
        show(id, forceShow = false) {
            const tab = this.getTab(id)
    
            // don't do anything if already active
            if (tab === this._activeTab && !forceShow) {
                return
            }
    
            // hide other tabs
            this._items.map(t => {
                if (t !== tab) {
                    t.triggerEl.classList.remove(...this._options.activeClasses.split(" "));
                    t.triggerEl.classList.add(...this._options.inactiveClasses.split(" "));
                    t.targetEl.classList.add('hidden')
                    t.triggerEl.setAttribute('aria-selected', false)
                }
            })
    
            // show active tab
            tab.triggerEl.classList.add(...this._options.activeClasses.split(" "));
            tab.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "));
            tab.triggerEl.setAttribute('aria-selected', true)
            tab.targetEl.classList.remove('hidden')
    
            this._setActiveTab(tab)
    
            // callback function
            this._options.onShow(this, tab)
        }
    
    }
    
    window.Tabs = Tabs;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-tabs-toggle]').forEach(triggerEl => {
    
            const tabElements = []
            let defaultTabId = null
            triggerEl.querySelectorAll('[role="tab"]').forEach(el => {
                const isActive = el.getAttribute('aria-selected') === 'true'
                const tab = {
                    id: el.getAttribute('data-tabs-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-tabs-target'))
                }
                tabElements.push(tab)
    
                if (isActive) {
                    defaultTabId = tab.id
                }
            })
            new Tabs(tabElements, {
                defaultTabId: defaultTabId
            })
        })
    })
} catch (error) {
    
}

//********* 2) Modals ********//
try {
    const Default = {
        placement: 'center',
        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
        onHide: () => {},
        onShow: () => {},
        onToggle: () => {}
    }
    class Modal {
        constructor(targetEl = null, options = {}) {
            this._targetEl = targetEl
            this._options = { ...Default, ...options }
            this._isHidden = true
            this._init()
        }
    
        _init() {
            this._getPlacementClasses().map(c => {
                this._targetEl.classList.add(c)
            })
        }
    
        _createBackdrop() {
            if(this._isHidden) {
                const backdropEl = document.createElement('div');
                backdropEl.setAttribute('modal-backdrop', '');
                backdropEl.classList.add(...this._options.backdropClasses.split(" "));
                document.querySelector('body').append(backdropEl);
            }
        }
    
        _destroyBackdropEl() {
            if (!this._isHidden) {
                document.querySelector('[modal-backdrop]').remove();
            }
        }
    
        _getPlacementClasses() {
            switch (this._options.placement) {
    
                // top
                case 'top-left':
                    return ['justify-start', 'items-start']
                case 'top-center':
                    return ['justify-center', 'items-start']
                case 'top-right':
                    return ['justify-end', 'items-start']
    
                // center
                case 'center-left':
                    return ['justify-start', 'items-center']
                case 'center':
                    return ['justify-center', 'items-center']
                case 'center-right':
                    return ['justify-end', 'items-center']
    
                // bottom
                case 'bottom-left':
                    return ['justify-start', 'items-end']
                case 'bottom-center':
                    return ['justify-center', 'items-end']
                case 'bottom-right':
                    return ['justify-end', 'items-end']
    
                default:
                    return ['justify-center', 'items-center']
            }
        }
    
        toggle() {
            if (this._isHidden) {
                this.show()
            } else {
                this.hide()
            }
    
            // callback function
            this._options.onToggle(this)
        }
    
        show() {
            this._targetEl.classList.add('flex')
            this._targetEl.classList.remove('hidden')
            this._targetEl.setAttribute('aria-modal', 'true')
            this._targetEl.setAttribute('role', 'dialog')
            this._targetEl.removeAttribute('aria-hidden')
            this._createBackdrop()
            this._isHidden = false
    
            // callback function
            this._options.onShow(this)
        }
    
        hide() {
            this._targetEl.classList.add('hidden')
            this._targetEl.classList.remove('flex')
            this._targetEl.setAttribute('aria-hidden', 'true')
            this._targetEl.removeAttribute('aria-modal')
            this._targetEl.removeAttribute('role')
            this._destroyBackdropEl()
            this._isHidden = true
    
            // callback function
            this._options.onHide(this)
        }
    
    }
    
    window.Modal = Modal;
    
    const getModalInstance = (id, instances) => {
        if (instances.some(modalInstance => modalInstance.id === id)) {
            return instances.find(modalInstance => modalInstance.id === id)
        }
        return false
    }
    
    document.addEventListener('DOMContentLoaded', () => {
        let modalInstances = []
        document.querySelectorAll('[data-modal-toggle]').forEach(el => {
            const modalId = el.getAttribute('data-modal-toggle');
            const modalEl = document.getElementById(modalId);
            const placement = modalEl.getAttribute('data-modal-placement')
    
            if (modalEl) {
                if (!modalEl.hasAttribute('aria-hidden') && !modalEl.hasAttribute('aria-modal')) {
                    modalEl.setAttribute('aria-hidden', 'true');
                }
            }
    
            let modal = null
            if (getModalInstance(modalId, modalInstances)) {
                modal = getModalInstance(modalId, modalInstances)
                modal = modal.object
            } else {
                modal = new Modal(modalEl, {
                    placement: placement ? placement : Default.placement
                })
                modalInstances.push({
                    id: modalId,
                    object: modal
                })
            }
    
            el.addEventListener('click', () => {
                modal.toggle()
            })
        })
    })
} catch (error) {
    
}

//********4) Accordions********/
try {
    const Default = {
        alwaysOpen: false,
        activeClasses: 'bg-gray-50 dark:bg-slate-800 text-indigo-600',
        inactiveClasses: 'text-dark dark:text-white',
        onOpen: () => { },
        onClose: () => { },
        onToggle: () => { }
    }
    
    class Accordion {
        constructor(items = [], options = {}) {
            this._items = items
            this._options = { ...Default, ...options }
            this._init()
        }
    
        _init() {
            if (this._items.length) {
                // show accordion item based on click
                this._items.map(item => {
    
                    if (item.active) {
                        this.open(item.id)
                    }
    
                    item.triggerEl.addEventListener('click', () => {
                        this.toggle(item.id)
                    })
                })
            }
        }
    
        getItem(id) {
            return this._items.filter(item => item.id === id)[0]
        }
    
        open(id) {
            const item = this.getItem(id)
    
            // don't hide other accordions if always open
            if (!this._options.alwaysOpen) {
                this._items.map(i => {
                    if (i !== item) {
                        i.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
                        i.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
                        i.targetEl.classList.add('hidden')
                        i.triggerEl.setAttribute('aria-expanded', false)
                        i.active = false
    
                        // rotate icon if set
                        if (i.iconEl) {
                            i.iconEl.classList.remove('rotate-180')
                        }
                    }
                })
            }
    
            // show active item
            item.triggerEl.classList.add(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "))
            item.triggerEl.setAttribute('aria-expanded', true)
            item.targetEl.classList.remove('hidden')
            item.active = true
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.add('rotate-180')
            }
    
            // callback function
            this._options.onOpen(this, item)
        }
    
        toggle(id) {
            const item = this.getItem(id)
    
            if (item.active) {
                this.close(id)
            } else {
                this.open(id)
            }
    
            // callback function
            this._options.onToggle(this, item)
        }
    
        close(id) {
            const item = this.getItem(id)
    
            item.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
            item.targetEl.classList.add('hidden')
            item.triggerEl.setAttribute('aria-expanded', false)
            item.active = false
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.remove('rotate-180')
            }
    
            // callback function
            this._options.onClose(this, item)
        }
    
    }
    
    window.Accordion = Accordion;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-accordion]').forEach(accordionEl => {
    
            const alwaysOpen = accordionEl.getAttribute('data-accordion')
            const activeClasses = accordionEl.getAttribute('data-active-classes')
            const inactiveClasses = accordionEl.getAttribute('data-inactive-classes')
    
            const items = []
            accordionEl.querySelectorAll('[data-accordion-target]').forEach(el => {
                const item = {
                    id: el.getAttribute('data-accordion-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-accordion-target')),
                    iconEl: el.querySelector('[data-accordion-icon]'),
                    active: el.getAttribute('aria-expanded') === 'true' ? true : false
                }
                items.push(item)
            })
    
            new Accordion(items, {
                alwaysOpen: alwaysOpen === 'open' ? true : false,
                activeClasses: activeClasses ? activeClasses : Default.activeClasses,
                inactiveClasses: inactiveClasses ? inactiveClasses : Default.inactiveClasses
            })
        })
    })
} catch (error) {
    
}



//=========================================//
/*            18) Upload Profile           */
//=========================================//
try {
    var loadFile = function (event) {
        
        var image = document.getElementById(event.target.name);
        image.src = URL.createObjectURL(event.target.files[0]);
    };
      
} catch (error) {
    
}

//=========================================//
/*            19) Custom Dropdown          */
//=========================================//

document.querySelectorAll(".dropdown").forEach(function (item) {
    item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
        subitem.addEventListener("click", function (event) {
            subitem.classList.toggle("block");
            if (subitem.classList.contains("block") != true) {
                item.querySelector(".dropdown-menu").classList.remove("block")
                item.querySelector(".dropdown-menu").classList.add("hidden")
            } else {
                dismissDropdownMenu()
                item.querySelector(".dropdown-menu").classList.add("block")
                item.querySelector(".dropdown-menu").classList.remove("hidden")
                if (item.querySelector(".dropdown-menu").classList.contains("block")) {
                    subitem.classList.add("block")
                } else {
                    subitem.classList.remove("block")
                }
                event.stopPropagation();
            }
        });
    });
  });
  
  function dismissDropdownMenu() {
    document.querySelectorAll(".dropdown-menu").forEach(function (item) {
        item.classList.remove("block")
        item.classList.add("hidden")
    });
    document.querySelectorAll(".dropdown-toggle").forEach(function (item) {
        item.classList.remove("block")
    });
  }
  
  window.addEventListener('click', function (e) {
    dismissDropdownMenu();
  });

  

try {
    
} catch (error) {

}