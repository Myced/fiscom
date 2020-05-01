<script src="/assets/js/jquery-latest.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/materialize.min.js"></script>
<script src="/assets/js/custom.js"></script>

<script src="/assets/notty/lib/noty.min.js"></script>
<script type="text/javascript">
    //function for notty js
    function notify(text, type){

    var mytext = "<strong>" + text + "</strong>";

    new Noty({
       type: type,
       layout: 'topRight',
       text: mytext,
       timeout: 5000,
       modal: false,
       theme : "nest",
       animation: {
         open: " animated bounceInRight ",
         close: "animated bounceOutRight"
       }
     }).show()
    }
</script>
