var currentTab = 0; // Current tab is set to be the first tab (0)
var path = [];
var formData = { "tabs": [] };
var tabs = $('.tab');
var headerOffset = $('#nav').height();

$('.contato-start').on('click', function (e) {
    e.preventDefault();
    $([document.documentElement, document.body]).animate({
        scrollTop: $('#form-contato').offset().top - headerOffset
    }, 500);
    $(this).parent().fadeOut(function () {
        console.log("done");
        // showTab(currentTab);
        $(tabs[currentTab]).fadeIn();
    });
});

$('button[data-tab]').on('click', function (e) {

    // JSON STRUCTURE:
    // {
    //     "tabs": [{
    //         "index": 1,
    //         "fields": [{
    //                 "name": "teste",
    //                 "value": "teste"
    //             },
    //             {
    //                 "name": "teste4",
    //                 "value": "teste4"
    //             }
    //         ]
    //     }, {
    //         "index": 2,
    //         "fields": [{
    //                 "name": "teste2",
    //                 "value": "teste2"
    //             },
    //             {
    //                 "name": "teste3",
    //                 "value": "teste3"
    //             }
    //         ]
    //     }]
    // }

    e.preventDefault();
    addFormData(this);

    
    $([document.documentElement, document.body]).animate({
        scrollTop: $('#form-contato').offset().top - headerOffset
    }, 500);

    var tab = $(this).data('tab');
    
    path.push(currentTab)

    $(tabs[currentTab]).fadeOut(function () {
        currentTab = tab;
        // console.log(currentTab);
        return $(tabs[currentTab]).fadeIn();
    });
    
});

$('button[type="submit"').on('click', function(e){
    e.preventDefault();
    addFormData(this);
    formSubmit();
});

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = $('.tab');
    y = $(x[currentTab]).find('input');
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == '') {
            // add an "invalid" class to the field:
            y[i].className += ' invalid';
            // and set the current valid status to false:
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        $('.step')[currentTab].className += ' finish';
    }
    return valid; // return the valid status
}

function addFormData(el){
    var name = $(el).data('name')
    var value = $(el).data('value')
    
    var textareas = $(tabs[currentTab]).find('textarea');
    var inputs = $(tabs[currentTab]).find('input');
    var selects = $(tabs[currentTab]).find('select');

    var current = formData.tabs.push({
        index: currentTab,
        fields: []
    });

    if (name && value) {
        formData.tabs[current - 1].fields.push({
            "type": "button",
            "name": name,
            "value": value
        })
        
    } else if (textareas.length && inputs.length) {
        $.map(inputs, function (value, index) {
            return formData.tabs[current - 1].fields.push({
                "type": "input",
                "name": $(value).attr('name'),
                "value": $(value).val()
            })
        });

        $.map(textareas, function (value, index) {
            return formData.tabs[current - 1].fields.push({
                "type": "textarea",
                "name": $(value).attr('name'),
                "value": $(value).val()
            })
        });


    } else if (inputs.length) {

        $.map(inputs, function (value, index) {
            return formData.tabs[current - 1].fields.push({
                "type": "input",
                "name": $(value).attr('name'),
                "value": $(value).val()
            })
        });
    } else if (selects.length) {

        $.map(selects, function (value, index) {
            return formData.tabs[current - 1].fields.push({
                "type": "select",
                "name": $(value).attr('name'),
                "value": $(value).val()
            })
        });
    }

    console.log(formData);
}

function back(){
    $(tabs[currentTab]).fadeOut(function () {
        currentTab = path[path.length - 1];
        path.pop();
        formData.tabs.pop();
        return $(tabs[currentTab]).fadeIn();
    });
}

function formSubmit(){
    var postData = $.map(formData.tabs, function(value, index){
        return value.fields;
    });

    $.post(base_url + 'contato', postData, function(status, data) {
        console.log({status, data})
    });
}


