var $accountBalance, $timer, debug, $blockedCountry;

function initUpdateTimer() {
    clearInterval($timer);
    $timer = setInterval(function() {
        $.post(WP_Trader['admin_ajax'], {action: 'backend', t_action: 'update_customer'}, function(response) {
            $(".badge").html(response['open_positions']);
            $accountBalance.html(response['accountBalance']);
        });
    }, 60000 * 2);
}


var BrandSelector = function($countryDropDown) {

    this.init = function() {
        $countryDropDown.change(this.updateBrands);
        $countryDropDown.trigger("change");
    };

    this.updateBrands = function() {
        $countryDropDown.parents('.signup-form').find(".alert-danger").slideUp(200);
        var brandsSelectBox = $countryDropDown.parents(".signup-form").find(".lpform_brands");
        jQuery.get("", {'wp-trade-action': 'brandsByCountry', 'country_id': $countryDropDown.val()}, function(brands) {
            // Remove all brokers from selectbox
            brandsSelectBox.html("");
            // Loop brands
            for (i in brands) {
                var brand = brands[i];
                // Insert broker
                brandsSelectBox.append(jQuery("<option>", {value: brand['id'], text: brand['name']}));
            }

            brandsSelectBox.find("option:first").attr("selected", "selected");

            if (brands.length == 1) {
                brandsSelectBox.parents(".wp-trade-row").find("*").not("option").slideUp(100);
            } else {
                brandsSelectBox.parents(".wp-trade-row").find("*").not("option").slideDown(100);
            }

            if (brands.length == 0) {
                $blockedCountry = true;
                $countryDropDown.parents('.signup-form').find(".alert-danger").text(WP_Trader['strings']['blockedRegCountry']).slideDown(300);
                brandsSelectBox.parents(".wp-trade-row").find("*").not("option").slideUp(100);
                return;
            }

            $blockedCountry = false;
        });
    };

    this.init();

};

jQuery(function($) {

    if (typeof WP_Trader.customer !== 'undefined' && WP_Trader.customer.id && WP_Trader.customer.credit_cards !== null && WP_Trader.customer.credit_cards.length > 0) {
        $(".deposit-modal-form li:last a").click();
        $('#deposit_existing_fund_id').val($('#deposit_existing_fund_id option:last').val()).trigger("chosen:updated");
    }

    $blockedCountry = false;

    /*
     * ----------------------
     * Add Validation Methods
     * ----------------------
     */


    // Generate brand selector for each country list box
    $("#signupForm .lpform_country").each(function() {
        new BrandSelector($(this));
    });

    $.validator.addMethod("nameRegex", function(value, element) {
        var nonumbers = !(/\d/.test(value));
        var spaceVal = $.trim(value).replace(" ", "");
        var nospecialChars = this.optional(element) || /^[^{}*\-\[\]~!@#\$%\^&\*()\+\,\.\=\\\/;:<>\"\'`\?\s]+$/i.test(spaceVal);
        return (nonumbers && nospecialChars);
    });

    /* reg exit to not allow a spesific value */
    $.validator.addMethod("notEqual", function(value, element, param) {
        return this.optional(element) || value != param;
    });

    /* scripts checks to see no more than two dots after @ sign*/
    $.validator.addMethod("EmailTwoDots", function(value, element) {
        var checkemail = value;
        etstring = checkemail.split('@', 2);
        var dotcheck = etstring[1];
        dotcheck = dotcheck.split('.');
        if (dotcheck.length < 4) {
            return true;
        } else {
            return false;
        }
    });

    /**
     * Overwrite the `equalTo` function
     **/
    $.validator.addMethod("equalTo", function(value, element, params) {
        return (value === $(element).parents("form").find(params).val());
    });

    jQuery.extend(jQuery.validator.messages, {
        required: WP_Trader['strings']['required'],
        remote: WP_Trader['strings']['remote'],
        email: WP_Trader['strings']['email'],
        url: WP_Trader['strings']['url'],
        date: WP_Trader['strings']['date'],
        dateISO: WP_Trader['strings']['dateISO'],
        number: WP_Trader['strings']['number'],
        digits: WP_Trader['strings']['digits'],
        creditcard: WP_Trader['strings']['creditcard'],
        equalTo: WP_Trader['strings']['equalTo'],
        accept: WP_Trader['strings']['accept'],
        maxlength: WP_Trader['strings']['maxlength'],
        minlength: WP_Trader['strings']['minlength'],
        rangelength: WP_Trader['strings']['rangelength'],
        range: WP_Trader['strings']['range'],
        max: WP_Trader['strings']['max'],
        min: WP_Trader['strings']['min'],
        nameRegex: WP_Trader['strings']['nameRegex'],
        country: WP_Trader['strings']['country'],
        repeatPassword: WP_Trader['strings']['repeatPassword'],
        emailExist: WP_Trader['strings']['emailExist'],
        unAllowedCountry: WP_Trader['strings']['unAllowedCountry'],
        maxCurrency: WP_Trader['strings']['maxCurrency'],
        minCurrency: WP_Trader['strings']['minCurrency'],
        altMin: WP_Trader['strings']['altMin'],
        checkboxesOptions: WP_Trader['strings']['checkboxesOptions'],
        EmailTwoDots: WP_Trader['strings']['email']
    });

    /*
     * ---------------------------
     * Add Sign up Form Validation
     * ---------------------------
     */
    var validationRules = {
        rules: {
            lpform_firstname: {
                required: true,
                nameRegex: true
            },
            lpform_lastname: {
                required: true,
                nameRegex: true
            },
            lpform_email: {
                required: true,
                email: true,
                EmailTwoDots: true
            },
            lpform_phone: {
                required: true,
                digits: true,
                minlength: 6
            },
            lpform_password: {
                required: true,
                minlength: 6
            },
            lpform_confirm_password: {
                required: true,
                minlength: 6,
                equalTo: "#lpform_password"
            }
        }
    };


    $accountBalance = $(".accountBalance");

    if (WP_Trader['customer']) {
        var phoneNum = (WP_Trader['customer']['phone']) ? WP_Trader['customer']['phone'] : false;
        if (!phoneNum) {
            phoneNum = (WP_Trader['customer']['Phone']) ? WP_Trader['customer']['Phone'] : '';
        }
        // Setup data in deposit form
        $("#deposit_first_name").val(WP_Trader['customer']['FirstName']);
        $("#deposit_last_name").val(WP_Trader['customer']['LastName']);
        $("#deposit_address").val(WP_Trader['customer']['street']);
        $("#deposit_city").val(WP_Trader['customer']['City']);
        $("#deposit_post_code").val(WP_Trader['customer']['postCode']);
        $("#deposit_phone").val(phoneNum);
        initUpdateTimer();
    }

    $("#delete_credit_card").click(function() {
        $("#deposit_errors_wrapper").slideUp();

        if ($("#deposit_existing_fund_id_delete").val() == '-1') {
            $("#deposit_errors_wrapper").html(WP_Trader['strings']['creditCardDeleteError']).slideDown();
            return false;
        }

        if (!confirm(WP_Trader['strings']['creditCardDeleteWarning'])) {
            return false;
        }

        var self = $(this);
        var old_value = $(this).html();
        $(this).attr("disabled", "disabled");

        /*
         | Prepare Data
         */

        var deposit_data = {
            csrf: WP_Trader['csrf_tokens']['delete_credit_card'],
            fundId: $("#deposit_existing_fund_id_delete").val(),
            action: 'backend',
            t_action: 'delete_credit_card'
        };

        /*
         | Ajax Request
         */

        $.ajax({
            dataType: "json",
            method: "post",
            url: WP_Trader['admin_ajax'],
            data: deposit_data,
            success: function(response) {
                self.removeAttr("disabled");
                self.html(old_value);
                // Check for errors
                if (response['error']) {
                    $("#deposit_errors_wrapper").html(response['error']);
                    $("#deposit_errors_wrapper").slideDown();
                    return false;
                }

                if (response['credit_card'] == null) {
                    update_credit_cards([]);
                }

                if (response['credit_card']) {
                    update_credit_cards(response['credit_card']);
                }
                // Check for success
                if (response['ok']) {
                    $("#deposit_modal").modal("hide");
                    update_popup(response['ok'], true, 4100);
                    return true;
                }

                // Invalid server response, show general erorr.
                update_popup(WP_Trader['strings']['unexcepted'], true, 4100);

            }
        });

    });

    // Deposit modal tabs change
    $(".deposit-modal-form ul li").click(function() {
        // Hide error message
        $("#deposit_errors_wrapper").hide();
    });

    /*
     | Quick Deposit Click Event
     | Open the deposit modal with the wanted amount.
     */
    $("#quick_deposit_btn").click(function() {
        $("#account_modal").modal("hide");
        $("#deposit_modal").modal("show");
        var amount = $("#quick_deposit_amount").val();
        $("#quick_deposit_amount").val('');
        $("#deposit_amount_value").val(amount);
        $("#deposit_existing_amount").val(amount);
    });

    /*
     | Deposit From Existing Credit Card Event
     */
    $("#deposit_from_existing").click(function() {


        /*
         | Some Validation
         */

        if ($("#deposit_existing_amount").val() == '') {
            $("#deposit_errors_wrapper").html(WP_Trader['strings']['depositDescription']).slideDown();
            $("#deposit_existing_amount").select();
            return false;
        }

        if ($("#deposit_existing_fund_id").val() == '-1') {
            $("#deposit_errors_wrapper").html(WP_Trader['strings']['creditCardSelectError']).slideDown();
            return false;
        }

        /*
         | Show loading state
         */
        $("#deposit_errors_wrapper").slideUp();
        var self = $(this);
        var old_value = $(this).html();
        $(this).attr("disabled", "disabled");

        /*
         | Prepare Data
         */

        var deposit_data = {
            csrf: WP_Trader['csrf_tokens']['add_deposit'],
            amount: $("#deposit_existing_amount").val(),
            fundId: $("#deposit_existing_fund_id").val(),
            action: 'backend',
            t_action: 'add_deposit'
        };

        /*
         | Ajax Request
         */

        $.ajax({
            dataType: "json",
            method: "post",
            url: WP_Trader['admin_ajax'],
            data: deposit_data,
            success: function(response) {
                /*
                 | Back to normal state
                 */
                self.removeAttr("disabled");
                self.html(old_value);

                // Check for errors

                if (response['error']) {
                    $("#deposit_errors_wrapper").html(response['error']);
                    $("#deposit_errors_wrapper").slideDown();
                    return false;
                }

                // Check for success

                if (response['ok']) {
                    $("#deposit_modal").removeAttr("data-backdrop");
                    $("#deposit_modal").removeAttr("data-keyboard");
                    $("#deposit_modal .close").show();
                    initUpdateTimer();
                    $("#deposit_modal").modal("hide");
                    update_popup(response['ok'], true, 4100);
                    $("#update_modal .modal-footer button").click(function() {
                        location.reload();
                    });
                    // Update account balance after deposit
                    var updatedBalace = parseFloat($accountBalance.html()) + parseFloat(deposit_data['amount']);
                    WP_Trader['customer'].accountBalance = updatedBalace;
                    $accountBalance.html(updatedBalace.toFixed(2));
                    return true;
                }

                // Invalid server response, show general erorr.

                update_popup(WP_Trader['strings']['unexcepted'], true, 4100);

            }
        });

    });

    /*
     | Deposit From a New Credit Card Event
     */
    $("#deposit_button").click(function() {

        if ($("#credit_card_number").val() == '') {
            $("#deposit_errors_wrapper").html(WP_Trader['strings']['creditCardEmptyError']).slideDown();
            $("#credit_card_number").select();
            return false;
        }

        if ($("#credit_card_cvv").val() == '') {
            $("#deposit_errors_wrapper").html(WP_Trader['strings']['creditCardCVVError']).slideDown();
            $("#credit_card_cvv").select();
            return false;
        }

        if ($("#deposit_amount_value").val() == '') {
            $("#deposit_errors_wrapper").html(WP_Trader['strings']['depositDescription']).slideDown();
            $("#deposit_amount_value").select();
            return false;
        }

        $("#deposit_errors_wrapper").slideUp();

        var self = $(this);
        var old_value = $(this).html();
        $(this).attr("disabled", "disabled");

        var deposit_data = {
            csrf: WP_Trader['csrf_tokens']['add_deposit'],
            FirstName: $("#deposit_first_name").val(),
            LastName: $("#deposit_last_name").val(),
            Address: $("#deposit_address").val(),
            City: $("#deposit_city").val(),
            postCode: $("#deposit_post_code").val(),
            Phone: $("#deposit_phone").val(),
            fundId: -1,
            cardType: $("credit_card_type").val(),
            cardNum: $("#credit_card_number").val(),
            ExpMonth: $("#deposit_ex_m").val(),
            ExpYear: $("#deposit_ex_y").val(),
            CVV: $("#credit_card_cvv").val(),
            amount: $("#deposit_amount_value").val(),
            Country: $("#deposit_country").val(),
            action: 'backend',
            t_action: 'add_deposit'
        };

        $.ajax({
            dataType: "json",
            method: "post",
            url: WP_Trader['admin_ajax'],
            data: deposit_data,
            success: function(response) {
                self.removeAttr("disabled");
                self.html(old_value);

                if (response['error']) {
                    $("#deposit_errors_wrapper").html(response['error']);
                    $("#deposit_errors_wrapper").slideDown();
                }

                if (response['credit_card'] == null) {
                    update_credit_cards([]);
                }

                if (response['credit_card']) {
                    update_credit_cards(response['credit_card']);
                }
                if (response['ok']) {
                    $("#deposit_modal").modal("hide");
                    $("#deposit_modal .modal-header .close").show();
                    update_popup(response['ok'], true, 4100);
                    if (response['balance']) {
                        $accountBalance.html(response['balance']);
                    }
                }
            }

        });
    });

    /*
     | Get the current user location
     */
    if (typeof current_location_iso !== 'undefined' && current_location_iso.length > 0) {
        $("#lpform_country option:selected").removeAttr("selected");
        $("#lpform_country option[data-iso=" + current_location_iso + "]").attr("selected", "selected");
    }

    /*
     | Sign In & Sign Up events
     */
    $(".wp-trade-form").submit(function(e) {

        dontShowAlert = true;

        var $form = $(this);

        var $submit_btn = $(this).find(".wp-trade-submit-button");
        var old_submit_text = $submit_btn.val();

        $submit_btn.attr("disabled", "disabled");

        /**
         * Current form serialize data
         */
        var data = $(this).serialize();

        /**
         * Global action var
         */
        var $action = $(this).attr("data-action");

        /**
         * Find relative error box
         */
        var $ajax_box = $(this).find('.alert-danger');
        // In case it was not found, use a global one
        if (!$ajax_box.length) {
            $ajax_box = $("#wp-trade-ajax-" + $action);
        }

        e.preventDefault();

        switch ($action) {
            case "email":

                if ($blockedCountry) {
                    console.log("Blocked Country, form was not sent.");
                    $submit_btn.val(old_submit_text);
                    $submit_btn.removeAttr("disabled");
                    return false;
                }

                $ajax_box.slideUp();

                $.ajax({
                    dataType: "json",
                    method: "post",
                    url: WP_Trader['admin_ajax'] + "?set-lang=" + WP_Trader['lang'],
                    data: data,
                    success: function(response) {
                        $submit_btn.val(old_submit_text);
                        $submit_btn.removeAttr("disabled");
                        if (response['error']) {
                            $ajax_box.html(response['error']).slideDown();
                        }
                        if (response["saved"] && response["saved"] === true) {
                            if (!WP_Trader.hasOwnProperty('redirect_url')) {
                                location.reload();
                            } else {
                                window.location = WP_Trader['redirect_url'];
                            }
                        }
                    }
                });
                break;
            case "signin":
                $ajax_box.slideUp();
                $.ajax({
                    dataType: "json",
                    method: "post",
                    url: WP_Trader['admin_ajax'],
                    data: {action: 'backend', t_action: 'signin', email: $("#wp_trade_email").val(), password: $("#wp_trade_password").val(), brand_id: $("#lpform_brands").val()},
                    complete: function() {
                        $submit_btn.val(old_submit_text);
                        $submit_btn.removeAttr("disabled");
                    },
                    success: function(response) {
                        if (response['error']) {
                            $ajax_box.html(response['error']).slideDown();
                        }
                        if (response["logged"] && response["logged"] === true) {
                            $("#ploader").show();
                            if (!WP_Trader.hasOwnProperty('redirect_url')) {
                                location.reload();
                            } else {
                                window.location = WP_Trader['redirect_url'];
                            }
                        } else {
                            $ajax_box.html(WP_Trader['strings']['emailPasswordError']).slideDown();
                            $("#wp_trade_password").val('');
                            $("#wp_trade_password").select();
                        }
                    }
                });
                break;
            case "signup":
                $ajax_box.slideUp();
                //validationRules.rules.lpform_confirm_password.equalTo = "#lpform_confirm_password";
                var data = $form.validate(validationRules);

                data.form();

                if (data.errorList.length > 0) {
                    $submit_btn.val(old_submit_text);
                    $submit_btn.removeAttr("disabled");
                    return false;
                }

                var custom_fields = {};
                $('.lpform_custom').each(function() {
                    custom_fields[$(this).attr('data-name')] = $(this).val();
                });
                $.ajax({
                    dataType: "json",
                    method: "post",
                    url: WP_Trader['admin_ajax'],
                    data: {
                        action: 'backend',
                        t_action: 'signup',
                        brand_id: $form.find("#lpform_brands").val(),
                        firstname: $form.find("#lpform_firstname").val(),
                        lastname: $form.find("#lpform_lastname").val(),
                        email: $form.find("#lpform_email").val(),
                        phone: $form.find("#lpform_phone").val().replace('+', ''),
                        currency: $form.find("#lpform_currency").val(),
                        country_id: $form.find("#lpform_country").val(),
                        password: $form.find("#lpform_password").val(),
                        confirm_password: $form.find("#lpform_confirm_password").val(),
                        custom_fields: custom_fields,
                        post_id: $form.find("#lp_form_post_id").val(),
                        a_aid: WP_Trader['get']['a_aid'],
                        a_bid: WP_Trader['get']['a_bid'],
                        a_cid: WP_Trader['get']['a_cid'],
                        isTest: $("#isTest").val()
                    },
                    success: function(response) {
                        $submit_btn.val(old_submit_text);
                        $submit_btn.removeAttr("disabled");
                        if (response['error']) {
                            $ajax_box.html(response['error']).slideDown();
                            return false;
                        }
                        if (response['errors'] && response['errors']['error']) {
                            if ($.isArray(response['errors']['error'])) {
                                var $list = $("<ul>");
                                for (err in response['errors']['error']) {
                                    var str = response['errors']['error'][err].replace(/([A-Z]+)/g, " $1").replace(/^/, "");
                                    $list.append($("<li>", {text: str}));
                                }
                                $ajax_box.html($list).slideDown();
                                return false;
                            } else {
                                var str = response['errors']['error'].replace(/([A-Z]+)/g, " $1").replace(/^/, "");
                                $ajax_box.html(str).slideDown();
                                return false;
                            }
                        }
                        if (!WP_Trader.hasOwnProperty('redirect_url')) {
                            location.reload();
                        } else {
                            window.location = WP_Trader['redirect_url'];
                        }
                    }
                });
                break;
        }
        return false;
    });
    /**
     * Click event for a withdrawal request
     */
    $(".withdrawal_request").click(function() {
        // Get the amount element
        var $amount = $("#withdrawal_amount");
        // Remove style attribute
        $amount.removeAttr("style");

        // Check for invalid amount value
        if ($amount.val() == '') {
            $amount.css("border-color", "red");
            $amount.select();
            return;
        }

        // Hide my account modal
        $("#account_modal").modal("hide");
        // Prepare the request data
        var request_data = {
            action: 'backend',
            t_action: 'withdrawal_add',
            csrf_token: WP_Trader['csrf_tokens']['withdrawal_add'],
            amount: $amount.val()
        };
        // Do a ajax request
        $.ajax({
            url: WP_Trader['admin_ajax'],
            cache: false,
            async: true,
            dataType: 'json',
            type: 'POST',
            data: request_data,
            beforeSend: function() {
                update_popup(WP_Trader['strings']['Connecting']);
            },
            success: function(data) {
                if (data['error']) {
                    update_popup(data['error'], true, 4100);
                    return false;
                }
                if (data['ok']) {
                    $amount.val('');
                    update_popup(data['ok'], true, 2500);
                    if (data['requests']) {
                        $("#w_pending").html(data['requests']['pending']);
                        $("#w_approved").html(data['requests']['approved']);
                        $("#w_canceled").html(data['requests']['canceled']);
                    }
                    return true;
                }
            }
        });
    });
    $(".lpform_country").change(function() {
        update_phone_prefix($(this));
    });
    $(".lpform_country").each(function() {
        update_phone_prefix($(this));
    });
});

function update_phone_prefix(self) {
    var prefix = self.find("option:selected").attr("data-prefix");
    self.parents("form").find("input[name=lpform_phone]").val(prefix);
}

function update_credit_cards(credit_cards) {
    $("#deposit_existing_fund_id").html("");
    $("#deposit_existing_fund_id_delete").html("");
    for (i in credit_cards) {
        var new_credit_card = credit_cards[i];
        //console.log(new_credit_card);
        var option = '<option value="' + new_credit_card['fundId'] + '">' + new_credit_card['ccType'] + ' ' + new_credit_card['cardNum'] + '</option>';
        $("#deposit_existing_fund_id").append(option);
        $("#deposit_existing_fund_id_delete").append(option);
    }
    $("#deposit_existing_fund_id").trigger("chosen:updated");
}

function cancelWit(id) {
    var request_data = {
        action: 'backend',
        t_action: 'cancel_withdrawal',
        csrf_token: WP_Trader['csrf_tokens']['cancel_withdrawal'],
        id: id
    };
    $.ajax({
        url: WP_Trader['admin_ajax'],
        data: request_data,
        dataType: 'json',
        type: 'POST',
        beforeSend: function() {
            update_popup(WP_Trader['strings']['Connecting']);
        },
        success: function(data) {
            if (data['error']) {
                update_popup(data['error'], true, 4100);
                return false;
            }
            if (data['ok']) {
                update_popup(data['ok'], true, 2500);
                if (data['requests']) {
                    $("#w_pending").html(data['requests']['pending']);
                    $("#w_approved").html(data['requests']['approved']);
                    $("#w_canceled").html(data['requests']['canceled']);
                }
                return true;
            }
        }
    });
}
