function search(searchData) {
    $('.projects').html(' ');
    if (searchData != ''){
        console.log('search is not empty! Filtering data.');
        return renderProjects(searchData);
    }
    console.log('search is empty! Returning all projects.')
    return renderProjects(projects);
}

function renderProjects(data) {
    $.each(data, function (index, value) {
        setProject(index, value);
    });
}

function setProject(index, projeto) {
    var html =
        '<div class="col-sm-6 col-md-4 col-lg-3">' +
        '<div class="bg-dark p-3 d-flex flex-wrap" style="background-image: url(' + projeto.capa + '); height: 350px; background-blend-mode: multiply; background-position: center; backgrond-size: cover">' +
        '<div class="d-block w-100">' +
        '<h4 class="text-uppercase text-white d-block w-100 font-weight-light">' + projeto.title + '</h4>' +
        '<h4 class="text-uppercase font-weight-bold text-white d-block w100 mb-3">' +
        projeto.cliente.title +
        '</h4>' +
        '</div>' +
        '<div class="d-block w-100 align-self-end">' +
        '<div class="tags">' +

        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';

    $('.projects').append(html);
    return setTags(index, projeto.tags)
}

function setTags(elIndex, tags) {
    var el = $('.tags');
    $.each(tags, function (index, value) {
        var appended = $(el[elIndex]).append(
            '<a href="#" class="btn btn-outline-light badge badge-pill mr-2 mb-3 px-4 py-2 font-weight-light">' +
            value +
            '</a>'
        );
    });
    return;
}
