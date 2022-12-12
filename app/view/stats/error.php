<?php
use App\Library\Data\Errors;

# Server seems down
if((isset($stats)) && (($stats === false) || ($stats == array())))
{ ?>
    <div class="header corner full-size padding" style="margin-top:10px;text-align:center;">
        <?php
        # Asking server of cluster stats
        if(isset($_REQUEST['server']))
        {
            echo ($_ini->cluster($_REQUEST['server'])) ? 'All servers from Cluster ' . $_REQUEST['server'] : 'Server '  . $_REQUEST['server'], ' did not respond !';
        }
        # All servers stats
        else
        {
            echo 'Servers did not respond !';
        } ?>
    </div>
    <div class="container corner full-size padding">
        <span class="left">Error message</span>
        <br/>
        <?php echo Errors::last(); ?>
        <br/>
        <br/>
        Please check above error message, your configuration or your server status and retry
    </div>
<?php
}
# No slabs used
elseif((isset($slabs)) && ($slabs === false))
{
?>
    <div class="header corner full-size padding" style="margin-top:10px;text-align:center;">
        No slabs used in this server !
    </div>
    <div class="container corner full-size padding">
        <span class="left">Error message</span>
        <br/>
        Maybe this server is not used, check your configuration or your server status and retry
    </div>
<?php
}
# No Items in slab
elseif((isset($items)) && ($items === false))
{
?>
    <div class="header corner full-size padding" style="margin-top:10px;text-align:center;">
        No item in this slab !
    </div>
    <div class="container corner full-size padding">
        <span class="left">Error message</span>
        <br/>
        This slab is allocated, but is empty
        <br/>
        <br/>
        Go back to <a href="?server=<?php echo $_REQUEST['server']; ?>&amp;show=slabs" class="green">Server Slabs</a>
    </div>
<?php
}
