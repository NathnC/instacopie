<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.9/jquery.jscroll.js"></script>


<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<div class="text-center load-icon"> <img src="../images/dev/progress.gif"> </div>', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH
            padding: 450,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>




<script>
    var ul = document.getElementsByTagName('body')[0];
    twemoji.parse(ul, {"size":16});
</script>