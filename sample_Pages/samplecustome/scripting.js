
var url = window.location.href;
var hash = url.substring(url.indexOf("#"));
if (hash == "#editinfo"){
    $(function(){
        $('#tabmenu a:[href="#editinfo"]').tab('show');
    });
}