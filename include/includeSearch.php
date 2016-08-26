<?php
    
    $content ='<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
    $(function(){
    $(".search").keyup(function() 
    { 
    var searchid = $(this).val();
    var dataString = \'search=\'+ searchid;
    if(searchid!=\'\')
    {
        $.ajax({
        type: "POST",
        url: "searchSearch.php",
        data: dataString,
        cache: false,
        success: function(html)
        {
        $("#result").html(html).show();
        }
        });
    }return false;    
    });
    
    jQuery("#result").live("click",function(e){ 
        var $clicked = $(e.target);
        var $name = $clicked.find(\'.name\').html();
        var decoded = $("<div/>").html($name).text();
        $(\'#searchid\').val(decoded);
    });
    jQuery(document).live("click", function(e) { 
        var $clicked = $(e.target);
        if (! $clicked.hasClass("search")){
        jQuery("#result").fadeOut(); 
        }
    });
    $(\'#searchid\').click(function(){
        jQuery("#result").fadeIn();
    });
    });
    </script>
        <div class="content">
        <div class="form-group">
    
          <div class="input-group">
    
            <input type="text" class="search" name="searchQuery" id="searchid" placeholder="Search" /><div id="result"></div> 
            <span class="input-group-btn">
              <button class="btn btn-custom" type="submit">
                                    <span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div>
        </div>
        </div>
    
    ';
    $pre = 1;
?>
<script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
                                </p>
<p>
    <?php if(!isset($pre)) {?>
    <pre>

                                    <?php print_r($content); ?>
    </pre>
    <?php }else{ ?>
    <?php print_r($content); ?>
    <?php } ?>
</p>