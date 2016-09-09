
/* TransSight mods */

$('h1.navbar-brand').click(function (evt) {
    evt.preventDefault();
    // for some reason, .trigger('click') not working
    window.location.href = $(this).find('a').first().prop('href');
});
