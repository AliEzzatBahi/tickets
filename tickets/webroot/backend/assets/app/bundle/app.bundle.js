"use strict";

var KTDemoPanel = function() {
    var demoPanel = KTUtil.getByID('kt_demo_panel');
    var offcanvas;

    var init = function() {
        offcanvas = new KTOffcanvas(demoPanel, {
            overlay: true,
            baseClass: 'kt-demo-panel',
            closeBy: 'kt_demo_panel_close',
            toggleBy: 'kt_demo_panel_toggle'
        });

        var head = KTUtil.find(demoPanel, '.kt-demo-panel__head');
        var body = KTUtil.find(demoPanel, '.kt-demo-panel__body');

        KTUtil.scrollInit(body, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                var height = parseInt(KTUtil.getViewPort().height);

                if (head) {
                    height = height - parseInt(KTUtil.actualHeight(head));
                    height = height - parseInt(KTUtil.css(head, 'marginBottom'));
                }

                height = height - parseInt(KTUtil.css(demoPanel, 'paddingTop'));
                height = height - parseInt(KTUtil.css(demoPanel, 'paddingBottom'));

                return height;
            }
        });

        if (typeof offcanvas !== 'undefined' && offcanvas.length === 0) {
            offcanvas.on('hide', function() {
                var expires = new Date(new Date().getTime() + 60 * 60 * 1000); // expire in 60 minutes from now
                Cookies.set('kt_demo_panel_shown', 1, { expires: expires });
            });
        }
    }

    var remind = function() {
        if (!(encodeURI(window.location.hostname) == 'keenthemes.com' || encodeURI(window.location.hostname) == 'www.keenthemes.com')) {
            return;
        }

        setTimeout(function() {
            if (!Cookies.get('kt_demo_panel_shown')) {
                var expires = new Date(new Date().getTime() + 15 * 60 * 1000); // expire in 15 minutes from now
                Cookies.set('kt_demo_panel_shown', 1, { expires: expires });
                offcanvas.show();
            }
        }, 4000);
    }

    return {
        init: function() {
            init();
            remind();
        }
    };
}();

$(document).ready(function() {
    KTDemoPanel.init();
});
"use strict";

var KTOffcanvasPanel = function() {
    var notificationPanel = KTUtil.get('kt_offcanvas_toolbar_notifications');
    var quickActionsPanel = KTUtil.get('kt_offcanvas_toolbar_quick_actions');
    var profilePanel = KTUtil.get('kt_offcanvas_toolbar_profile');
    var searchPanel = KTUtil.get('kt_offcanvas_toolbar_search');

    var initNotifications = function() {
        var head = KTUtil.find(notificationPanel, '.kt-offcanvas-panel__head');
        var body = KTUtil.find(notificationPanel, '.kt-offcanvas-panel__body');

        var offcanvas = new KTOffcanvas(notificationPanel, {
            overlay: true,
            baseClass: 'kt-offcanvas-panel',
            closeBy: 'kt_offcanvas_toolbar_notifications_close',
            toggleBy: 'kt_offcanvas_toolbar_notifications_toggler_btn'
        });

        KTUtil.scrollInit(body, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                var height = parseInt(KTUtil.getViewPort().height);

                if (head) {
                    height = height - parseInt(KTUtil.actualHeight(head));
                    height = height - parseInt(KTUtil.css(head, 'marginBottom'));
                }

                height = height - parseInt(KTUtil.css(notificationPanel, 'paddingTop'));
                height = height - parseInt(KTUtil.css(notificationPanel, 'paddingBottom'));

                return height;
            }
        });
    }

    var initQucikActions = function() {
        var head = KTUtil.find(quickActionsPanel, '.kt-offcanvas-panel__head');
        var body = KTUtil.find(quickActionsPanel, '.kt-offcanvas-panel__body');

        var offcanvas = new KTOffcanvas(quickActionsPanel, {
            overlay: true,
            baseClass: 'kt-offcanvas-panel',
            closeBy: 'kt_offcanvas_toolbar_quick_actions_close',
            toggleBy: 'kt_offcanvas_toolbar_quick_actions_toggler_btn'
        });

        KTUtil.scrollInit(body, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                var height = parseInt(KTUtil.getViewPort().height);

                if (head) {
                    height = height - parseInt(KTUtil.actualHeight(head));
                    height = height - parseInt(KTUtil.css(head, 'marginBottom'));
                }

                height = height - parseInt(KTUtil.css(quickActionsPanel, 'paddingTop'));
                height = height - parseInt(KTUtil.css(quickActionsPanel, 'paddingBottom'));

                return height;
            }
        });
    }

    var initProfile = function() {
        var head = KTUtil.find(profilePanel, '.kt-offcanvas-panel__head');
        var body = KTUtil.find(profilePanel, '.kt-offcanvas-panel__body');

        var offcanvas = new KTOffcanvas(profilePanel, {
            overlay: true,
            baseClass: 'kt-offcanvas-panel',
            closeBy: 'kt_offcanvas_toolbar_profile_close',
            toggleBy: 'kt_offcanvas_toolbar_profile_toggler_btn'
        });

        KTUtil.scrollInit(body, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                var height = parseInt(KTUtil.getViewPort().height);

                if (head) {
                    height = height - parseInt(KTUtil.actualHeight(head));
                    height = height - parseInt(KTUtil.css(head, 'marginBottom'));
                }

                height = height - parseInt(KTUtil.css(profilePanel, 'paddingTop'));
                height = height - parseInt(KTUtil.css(profilePanel, 'paddingBottom'));

                return height;
            }
        });
    }

    var initSearch = function() {
        var head = KTUtil.find(searchPanel, '.kt-offcanvas-panel__head');
        var body = KTUtil.find(searchPanel, '.kt-offcanvas-panel__body');

        var offcanvas = new KTOffcanvas(searchPanel, {
            overlay: true,
            baseClass: 'kt-offcanvas-panel',
            closeBy: 'kt_offcanvas_toolbar_search_close',
            toggleBy: 'kt_offcanvas_toolbar_search_toggler_btn'
        });

        KTUtil.scrollInit(body, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                var height = parseInt(KTUtil.getViewPort().height);

                if (head) {
                    height = height - parseInt(KTUtil.actualHeight(head));
                    height = height - parseInt(KTUtil.css(head, 'marginBottom'));
                }

                height = height - parseInt(KTUtil.css(searchPanel, 'paddingTop'));
                height = height - parseInt(KTUtil.css(searchPanel, 'paddingBottom'));

                return height;
            }
        });
    }

    return {
        init: function() {
            initNotifications();
            initQucikActions();
            initProfile();
            initSearch();
        }
    };
}();

$(document).ready(function() {
    KTOffcanvasPanel.init();
});
"use strict";

var KTQuickPanel = function() {
    var panel = KTUtil.get('kt_quick_panel');
    var notificationPanel = KTUtil.get('kt_quick_panel_tab_notifications');
    var logsPanel = KTUtil.get('kt_quick_panel_tab_logs');
    var settingsPanel = KTUtil.get('kt_quick_panel_tab_settings');

    var getContentHeight = function() {
        var height;
        var nav = KTUtil.find(panel, '.kt-quick-panel__nav');
        var content = KTUtil.find(panel, '.kt-quick-panel__content');

        height = parseInt(KTUtil.getViewPort().height) - parseInt(KTUtil.actualHeight(nav)) - (2 * parseInt(KTUtil.css(nav, 'padding-top'))) - 10;

        return height;
    }

    var initOffcanvas = function() {
        var offcanvas = new KTOffcanvas(panel, {
            overlay: true,
            baseClass: 'kt-quick-panel',
            closeBy: 'kt_quick_panel_close_btn',
            toggleBy: 'kt_quick_panel_toggler_btn'
        });
    }

    var initNotifications = function() {
        KTUtil.scrollInit(notificationPanel, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                return getContentHeight();
            }
        });
    }

    var initLogs = function() {
        KTUtil.scrollInit(logsPanel, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                return getContentHeight();
            }
        });
    }

    var initSettings = function() {
        KTUtil.scrollInit(settingsPanel, {
            disableForMobile: true,
            resetHeightOnDestroy: true,
            handleWindowResize: true,
            height: function() {
                return getContentHeight();
            }
        });
    }

    var updatePerfectScrollbars = function() {
        $(panel).find('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            KTUtil.scrollUpdate(notificationPanel);
            KTUtil.scrollUpdate(logsPanel);
            KTUtil.scrollUpdate(settingsPanel);
        });
    }

    return {
        init: function() {
            initOffcanvas();
            initNotifications();
            initLogs();
            initSettings();
            updatePerfectScrollbars();
        }
    };
}();

$(document).ready(function() {
    KTQuickPanel.init();
});
"use strict";

var KTQuickSearch = function() {
    var target;
    var form;
    var input;
    var closeIcon;
    var resultWrapper;
    var resultDropdown;
    var resultDropdownToggle;
    var inputGroup;
    var query = '';

    var hasResult = false;
    var timeout = false;
    var isProcessing = false;
    var requestTimeout = 200; // ajax request fire timeout in milliseconds 
    var spinnerClass = 'kt-spinner kt-spinner--input kt-spinner--sm kt-spinner--brand kt-spinner--right';
    var resultClass = 'kt-quick-search--has-result';
    var minLength = 2;

    var showProgress = function() {
        isProcessing = true;
        KTUtil.addClass(inputGroup, spinnerClass);

        if (closeIcon) {
            KTUtil.hide(closeIcon);
        }
    }

    var hideProgress = function() {
        isProcessing = false;
        KTUtil.removeClass(inputGroup, spinnerClass);

        if (closeIcon) {
            if (input.value.length < minLength) {
                KTUtil.hide(closeIcon);
            } else {
                KTUtil.show(closeIcon, 'flex');
            }
        }
    }

    var showDropdown = function() {
        if (resultDropdownToggle && !KTUtil.hasClass(resultDropdown, 'show')) {
            $(resultDropdownToggle).dropdown('toggle');
            $(resultDropdownToggle).dropdown('update');
        }
    }

    var hideDropdown = function() {
        if (resultDropdownToggle && KTUtil.hasClass(resultDropdown, 'show')) {
            $(resultDropdownToggle).dropdown('toggle');
        }
    }

    var processSearch = function() {
        if (hasResult && query === input.value) {
            hideProgress();
            KTUtil.addClass(target, resultClass);
            showDropdown();
            KTUtil.scrollUpdate(resultWrapper);

            return;
        }

        query = input.value;

        KTUtil.removeClass(target, resultClass);
        showProgress();

        setTimeout(function() {
            $.ajax({
                url: 'https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/inc/api/quick_search.php',
                data: {
                    query: query
                },
                dataType: 'html',
                success: function(res) {
                    hasResult = true;
                    hideProgress();
                    KTUtil.addClass(target, resultClass);
                    KTUtil.setHTML(resultWrapper, res);
                    showDropdown();
                    KTUtil.scrollUpdate(resultWrapper);
                },
                error: function(res) {
                    hasResult = false;
                    hideProgress();
                    KTUtil.addClass(target, resultClass);
                    KTUtil.setHTML(resultWrapper, '<span class="kt-quick-search__message">Connection error. Pleae try again later.</div>');
                    showDropdown();
                    KTUtil.scrollUpdate(resultWrapper);
                }
            });
        }, 1000);
    }

    var handleCancel = function(e) {
        input.value = '';
        query = '';
        hasResult = false;
        KTUtil.hide(closeIcon);
        KTUtil.removeClass(target, resultClass);
        hideDropdown();
    }

    var handleSearch = function() {
        if (input.value.length < minLength) {
            hideProgress();
            hideDropdown();

            return;
        }

        if (isProcessing == true) {
            return;
        }

        if (timeout) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(function() {
            processSearch();
        }, requestTimeout);
    }

    return {
        init: function(element) {
            // Init
            target = element;
            form = KTUtil.find(target, '.kt-quick-search__form');
            input = KTUtil.find(target, '.kt-quick-search__input');
            closeIcon = KTUtil.find(target, '.kt-quick-search__close');
            resultWrapper = KTUtil.find(target, '.kt-quick-search__wrapper');
            resultDropdown = KTUtil.find(target, '.dropdown-menu');
            resultDropdownToggle = KTUtil.find(target, '[data-toggle="dropdown"]');
            inputGroup = KTUtil.find(target, '.input-group');

            // Attach input keyup handler
            KTUtil.addEvent(input, 'keyup', handleSearch);
            KTUtil.addEvent(input, 'focus', handleSearch);

            // Prevent enter click
            form.onkeypress = function(e) {
                var key = e.charCode || e.keyCode || 0;
                if (key == 13) {
                    e.preventDefault();
                }
            }

            KTUtil.addEvent(closeIcon, 'click', handleCancel);

            // Auto-focus on the form input on dropdown form open
            var toggle = KTUtil.getByID('kt_quick_search_toggle');
            if (toggle) {
                $(toggle).on('shown.bs.dropdown', function() {
                    input.focus();
                });
            }
        }
    };
};

var KTQuickSearchMobile = KTQuickSearch;

$(document).ready(function() {
    if (KTUtil.get('kt_quick_search_default')) {
        KTQuickSearch().init(KTUtil.get('kt_quick_search_default'));
    }

    if (KTUtil.get('kt_quick_search_inline')) {
        KTQuickSearchMobile().init(KTUtil.get('kt_quick_search_inline'));
    }
});


// Make item active in sidebar
// $(document).ready(function () {
//     $('.kt-menu__nav a').click(function(e) {
//         $('.kt-menu__nav').find(".kt-menu__item--active").removeClass("kt-menu__item--active");
//         $(this).parent().addClass('kt-menu__item--active');
//         e.preventDefault();
//     });
// });

// function myFunction() {
//     setTimeout(function(){
//         $('#lat').keyup(function() {
//             $('#review_lat').html($(this).val());
//         });
//      }, 5000);
//   }

$('#event-submit').click(function(e) {
    history.go(-1);
});

// Add Ticket Type To Event
$(document).ready(function() {
    var field = 0, count = 0;
    $("#add-ticket-button").click(function() {
        count++;
        var element = '<div id="ticket-type-block-' + count + '">' +
                            '<div class="row">' +
                                '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
                                    '<input type="hidden" name="field" value="' + field + '" " />' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.name">Ticket Name</label>' +
                                        '<input id="ticket_types.' + field + '.name" type="text" name="ticket_name[' + field + ']" class="form-control" placeholder="Enter ticket name"">' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row">' +
                                '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.description">Ticket Description</label>' +
                                        '<textarea id="ticket_types.' + field + '.description" type="text" name="ticket_desc[' + field + ']" class="form-control"" />' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row">' +
                                '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.date_from">Date From</label>' +
                                        '<input id="ticket_types.' + field + '.date_from" type="date" name="price_detail_date_from[' + field + ']" class="form-control"">' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.date_to">Date To</label>' +
                                        '<input id="ticket_types.' + field + '.date_to" type="date" name="price_detail_date_to[' + field + ']" class="form-control"">' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.time">Time</label>' +
                                        '<input id="ticket_types.' + field + '.time" type="time" name="price_detail_time[' + field + ']" class="form-control"">' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row">' +
                                '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.min_seats_number">Minimum Seats Number</label>' +
                                        '<input id="ticket_types.' + field + '.min_seats_number" type="number" name="price_detail_min_seats[' + field + ']" class="form-control" placeholder="Enter minimum seats number"">' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.max_seats_num">Maximum Seats Number</label>' +
                                        '<input id="ticket_types.' + field + '.max_seats_num" type="number" name="price_detail_max_seats[' + field + ']" class="form-control" placeholder="Enter maximum seats number"">' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row">' +
                                '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.price">Price</label>' +
                                        '<input id="ticket_types.' + field + '.price" type="number" name="price_detail_price[' + field + ']" class="form-control" placeholder="Enter price"">' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row">' +
                                '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<div class="input checkbox">' +
                                            '<input type="hidden" name="is_vat" value="0">' +
                                            '<label for="ticket_types.' + field + '.is_vat" class="kt-checkbox">' +
                                                '<input type="checkbox" name="price_detail_is_vat[' + field + ']" value="1" id="ticket_types.' + field + '.is_vat">Is vat' +
                                                '<span></span>' +
                                            '</label>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' +
                                    '<div class="form-group">' +
                                        '<label for="ticket_types.' + field + '.vat">Vat</label>' +
                                        '<input id="ticket_types.' + field + '.vat" type="number" name="price_detail_vat[' + field + ']" class="form-control" placeholder="Enter vat"">' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>'

        $('#add-ticket-type-rendered').append(element);
        field++;
    });

    // Delete a Ticket Type From Event
    $(".delete-ticket-from-event").click(function() {
        var removeBtnId = $(this).attr("id");
        var priceDetailId = $("#price-detail-" + removeBtnId).val()
        var ticketTypeId = $("#ticket-type-" + removeBtnId).val()
        var url =  window.location.href = "../deleteTicketTypeFromEvent/" + priceDetailId + "/" + ticketTypeId
        console.log(priceDetailId + " " + ticketTypeId)
        $.ajax({
            type : "post",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            url: url,
            success: function(){
                alert("Item Deleted Successfully")
            },
            error: function (e) {
                console.log(e);
                console.log(url);
            }
        });
    });
});