//reference: http://stackoverflow.com/questions/10523433/how-do-i-keep-the-current-tab-active-with-twitter-bootstrap-after-a-page-reload
$(function() { 
    // for bootstrap 3 use 'shown.bs.tab'
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        // save the latest pill;
        localStorage.setItem('lastPill', $(this).attr('href'));
    });

    // go to the latest pill, if it exists:
    var lastPill = localStorage.getItem('lastPill');
    if (lastPill) {
        $('[href="' + lastPill + '"]').tab('show');
    }
});