<?php
use App\Library\Data\Analysis;
?>
    <div class="size-4" style="float:left;">
        <div class="sub-header corner padding">Get <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Hits</span>
                <?php echo htmlspecialchars(Analysis::hitResize($stats['get_hits'])); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['get_hits_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Miss</span>
                <?php echo htmlspecialchars(Analysis::hitResize($stats['get_misses'])); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['get_misses_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars($stats['get_rate']); ?> Request/sec
            </div>
        </div>

        <div class="sub-header corner padding">Set <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Total</span>
                <?php echo htmlspecialchars(Analysis::hitResize($stats['cmd_set'])); ?>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars($stats['set_rate']); ?> Request/sec
            </div>
        </div>

        <div class="sub-header corner padding">Delete <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Hits</span>
                <?php echo htmlspecialchars((isset($stats['delete_hits'])) ? Analysis::hitResize($stats['delete_hits']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['delete_hits_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Miss</span>
                <?php echo htmlspecialchars((isset($stats['delete_misses'])) ? Analysis::hitResize($stats['delete_misses']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['delete_misses_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars((isset($stats['delete_hits'])) ? $stats['delete_rate'] . ' Request/sec' : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>

        <div class="sub-header corner padding">Cas <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Hits</span>
                <?php echo htmlspecialchars((isset($stats['cas_hits'])) ? Analysis::hitResize($stats['cas_hits']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['cas_hits_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Miss</span>
                <?php echo htmlspecialchars((isset($stats['cas_misses'])) ? Analysis::hitResize($stats['cas_misses']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['cas_misses_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Bad Value</span>
                <?php echo htmlspecialchars((isset($stats['cas_badval'])) ? Analysis::hitResize($stats['cas_badval']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['cas_badval_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars((isset($stats['cas_hits'])) ? $stats['cas_rate'] . ' Request/sec' : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>

        <div class="sub-header corner padding">Increment <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Hits</span>
                <?php echo htmlspecialchars((isset($stats['incr_hits'])) ? Analysis::hitResize($stats['incr_hits']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['incr_hits_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Miss</span>
                <?php echo htmlspecialchars((isset($stats['incr_misses'])) ? Analysis::hitResize($stats['incr_misses']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['incr_misses_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars((isset($stats['incr_hits'])) ? $stats['incr_rate'] . ' Request/sec' : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>

        <div class="sub-header corner padding">Decrement <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Hits</span>
                <?php echo htmlspecialchars((isset($stats['decr_hits'])) ? Analysis::hitResize($stats['decr_hits']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['decr_hits_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Miss</span>
                <?php echo htmlspecialchars((isset($stats['decr_misses'])) ? Analysis::hitResize($stats['decr_misses']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['decr_misses_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars((isset($stats['decr_hits'])) ? $stats['decr_rate'] . ' Request/sec' : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>

        <div class="sub-header corner padding">Touch <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Hits</span>
                <?php echo htmlspecialchars((isset($stats['touch_hits'])) ? Analysis::hitResize($stats['touch_hits']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['touch_hits_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Miss</span>
                <?php echo htmlspecialchars((isset($stats['touch_misses'])) ? Analysis::hitResize($stats['touch_misses']) : 'N/A on ' . $stats['version']); ?>
                <span class="right">[<?php echo htmlspecialchars($stats['touch_misses_percent']); ?>%]</span>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars((isset($stats['touch_hits'])) ? $stats['touch_rate'] . ' Request/sec' : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>

        <div class="sub-header corner padding">Flush <span class="green">Stats</span></div>
        <div class="container corner padding" style="height:48px;">
            <div class="line">
                <span class="left">Total</span>
                <?php echo htmlspecialchars((isset($stats['cmd_flush'])) ? Analysis::hitResize($stats['cmd_flush']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left">Rate</span>
                <?php echo htmlspecialchars((isset($stats['cmd_flush'])) ? $stats['flush_rate'] . ' Request/sec' : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>
    </div>

    <div class="size-2" style="float:left;padding-left:9px;">
<?php
# Viewing a single server
if((isset($_REQUEST['server'])) && ($_ini->server($_REQUEST['server'])))
{ ?>
        <div class="header corner padding size-3cols" style="text-align:center;margin-top:10px;">
            <a href="?server=<?php echo urlencode($_REQUEST['server']); ?>&amp;show=slabs">See this Server Slabs Stats</a>
        </div>
<?php
} ?>
        <div class="sub-header corner padding"><?php echo htmlspecialchars((isset($_REQUEST['server'])) && ($_ini->server($_REQUEST['server'])) ? 'Server' : 'Cluster'); ?> <span class="green">Stats</span></div>
        <div class="container corner padding size-3cols">
<?php
# Viewing a single server
if((isset($_REQUEST['server'])) && ($_ini->server($_REQUEST['server'])))
{ ?>
            <div class="line">
                <span class="left setting">Uptime</span>
                <?php echo htmlspecialchars(Analysis::uptime($stats['uptime'])); ?>
            </div>
            <div class="line" style="margin-bottom:4px;">
                <span class="left setting">Memcached</span>
                Version <?php echo htmlspecialchars($stats['version']); ?>
            </div>
<?php
} ?>
            <div class="line">
                <span class="left setting">Curr Connections</span>
                <?php echo htmlspecialchars($stats['curr_connections']); ?>
            </div>
            <div class="line">
                <span class="left setting">Total Connections</span>
                <?php echo htmlspecialchars(Analysis::hitResize($stats['total_connections'])); ?>
            </div>
            <div class="line">
                <span class="left setting">Max Connections Errors</span>
                <?php echo htmlspecialchars((isset($stats['listen_disabled_num'])) ? Analysis::hitResize($stats['listen_disabled_num']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line" style="margin-top:4px;">
                <span class="left setting">Current Items</span>
                <?php echo htmlspecialchars(Analysis::hitResize($stats['curr_items'])); ?>
            </div>
            <div class="line">
                <span class="left setting">Total Items</span>
                <?php echo htmlspecialchars(Analysis::hitResize($stats['total_items'])); ?>
            </div>
<?php
# Viewing a single server
if((isset($_REQUEST['server'])) && ($_ini->server($_REQUEST['server'])))
{ ?>
            <div class="line">
                <span class="left setting">Oldest Item</span>
                <?php echo htmlspecialchars((isset($settings['oldest'])) ? Analysis::uptime($settings['oldest']) : 'N/A on ' . $stats['version']); ?>
            </div>
<?php
} ?>
        </div>

        <div class="sub-header corner padding">Eviction &amp; Reclaimed <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left setting">Items Eviction</span>
                <?php echo htmlspecialchars(Analysis::hitResize($stats['evictions'])); ?>
            </div>
            <div class="line">
                <span class="left setting">Rate</span>
                <?php echo htmlspecialchars($stats['eviction_rate']); ?> Eviction/sec
            </div>
            <div class="line" style="margin-top:4px;">
                <span class="left setting">Reclaimed</span>
                <?php echo htmlspecialchars((isset($stats['reclaimed'])) ? Analysis::hitResize($stats['reclaimed']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting">Rate</span>
                <?php echo htmlspecialchars((isset($stats['reclaimed'])) ? $stats['reclaimed_rate'] . ' Reclaimed/sec' : 'N/A on ' . $stats['version']); ?>
            </div>

            <div class="line" style="margin-top:4px;">
                <span class="left setting help" title="Internal name : expired_unfetched&#013;Items pulled from LRU that were never touched by get/incr/append/etc before expiring">Expired unfetched</span>
                <?php echo htmlspecialchars((isset($stats['expired_unfetched'])) ? Analysis::hitResize($stats['expired_unfetched']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : evicted_unfetched&#013;Items evicted from LRU that were never touched by get/incr/append/etc">Evicted unfetched</span>
                <?php echo htmlspecialchars((isset($stats['evicted_unfetched'])) ? Analysis::hitResize($stats['evicted_unfetched']) : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>

<?php
# Viewing a server
if((isset($_REQUEST['server'])) && ($_ini->server($_REQUEST['server'])))
{ ?>
        <div class="sub-header corner padding">Server <span class="green">Configuration</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left setting help" title="Internal name : accepting_conns&#013;Whether the server is accepting connection or not">Accepting Connections</span>
                <?php
                # Northscale/Membase server specific
                if(isset($stats['accepting_conns']))
                {
                    if($stats['accepting_conns']) { echo 'Yes'; } else { echo 'No'; }
                }
                else
                {
                    echo htmlspecialchars('N/A on ' . $stats['version']);
                }?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : maxbytes&#013;Maximum number of bytes allowed in this cache">Max Bytes</span>
                <?php echo htmlspecialchars((isset($settings['maxbytes'])) ? Analysis::byteResize($settings['maxbytes']) . 'Bytes' : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : maxconns&#013;Maximum number of clients allowed">Max Connection</span>
                <?php echo htmlspecialchars((isset($settings['maxconns'])) ? $settings['maxconns'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : tcpport &amp; udpport&#013;TCP &amp; UDP listen port">TCP/UDP Port</span>
                <?php echo htmlspecialchars((isset($settings['tcpport'], $settings['udpport'])) ? 'TCP : ' . $settings['tcpport'] . ', UDP : ' . $settings['udpport'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : inter&#013;Listen interface">Listen Interface</span>
                <?php echo htmlspecialchars((isset($settings['inter'])) ? $settings['inter'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : evictions&#013;When Off, LRU evictions are disabled">Evictions</span>
                <?php echo htmlspecialchars((isset($settings['evictions'])) ? ucfirst($settings['evictions']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : domain_socket&#013;Path to the domain socket (if any)">Path to Domain Socket</span>
                <?php echo htmlspecialchars((isset($settings['domain_socket'])) ? $settings['domain_socket'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : umask&#013;Umask for the creation of the domain socket">Domain Socket Umask</span>
                <?php echo htmlspecialchars((isset($settings['umask'])) ? $settings['umask'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : chunk_size&#013;Minimum space allocated for key + value + flags">Chunk Size</span>
                <?php echo htmlspecialchars((isset($settings['chunk_size'])) ? $settings['chunk_size'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : growth_factor&#013;Chunk size growth factor">Chunk Growth Factor</span>
                <?php echo htmlspecialchars((isset($settings['growth_factor'])) ? $settings['growth_factor'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : num_threads&#013;Number of threads (including dispatch)">Max Threads</span>
                <?php echo htmlspecialchars((isset($settings['num_threads'])) ? $settings['num_threads'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : detail_enabled&#013;If yes, stats detail is enabled">Detail Enabled</span>
                <?php echo htmlspecialchars((isset($settings['detail_enabled'])) ? ucfirst($settings['detail_enabled']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : reqs_per_event&#013;Max num IO ops processed within an event">Max IO Ops/Event</span>
                <?php echo htmlspecialchars((isset($settings['reqs_per_event'])) ? $settings['reqs_per_event'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : cas_enabled&#013;When no, CAS is not enabled for this server">CAS Enabled</span>
                <?php echo htmlspecialchars((isset($settings['cas_enabled'])) ? ucfirst($settings['cas_enabled']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : tcp_backlog&#013;TCP listen backlog">TCP Listen Backlog</span>
                <?php echo htmlspecialchars((isset($settings['tcp_backlog'])) ? $settings['tcp_backlog'] : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left setting help" title="Internal name : auth_enabled_sasl&#013;SASL auth requested and enabled">SASL Auth</span>
                <?php echo htmlspecialchars((isset($settings['auth_enabled_sasl'])) ? ucfirst($settings['auth_enabled_sasl']) : 'N/A on ' . $stats['version']); ?>
            </div>
        </div>
<?php
}
# Viewing a cluster
elseif((isset($_REQUEST['server'])) && ($cluster = $_ini->cluster($_REQUEST['server'])))
{ ?>
        <div class="sub-header corner padding">Cluster <?php echo htmlspecialchars($_REQUEST['server']); ?> <span class="green">Servers List</span></div>
        <div class="container corner padding">
<?php
    # Displaying first 8 servers
    $displayed = 0;
    foreach($cluster as $name => $server)
    { ?>
            <div class="line server" style="<?php if($displayed > 8) { echo 'display:none;'; } else { $displayed++; } ?>">
                <span class="left setting"><?php echo htmlspecialchars((strlen($name) > 27) ? substr($name, 0, 27) . ' [...]' : $name); ?></span>
                <span class="right" style="font-weight:bold;"><a href="index.php?server=<?php echo urlencode($name); ?>" class="green">See Server Stats</a></span>
                <div class="line" style="margin-left:5px;">
                    <?php echo htmlspecialchars(($status[$name] != '') ? 'Version ' . $status[$name] . ', Uptime : ' . Analysis::uptime($uptime[$name]) : 'Server did not respond'); ?>
                </div>
            </div>
<?php
    }
    # Displaying remaining X server line
    $remaining = (count($cluster) - $displayed);
    if(($displayed > 8) && ($remaining >= 0))
    { ?>
            <div class="line more">
            	<span class="left" style="font-weight:bold;">
            	<?php echo htmlspecialchars($remaining); ?> Server<?php echo ($remaining > 1) ? 's are' : ' is'; ?> not displayed</span>
            	<span class="right" style="font-weight:bold;"><a href="#" onclick="javascript:show('server');javascript:hide('more');" class="green">See all <?php echo count($cluster); ?> Servers</a></span>
            </div>
<?php
    } ?>
    </div>
<?php
} ?>
    </div>
<?php
    # Fixing issue 163, some results from stats slabs mem_requested are buggy @FIXME
    if($slabs['total_malloced'] > $stats['limit_maxbytes'])
    {
        $slabs['total_wasted'] = $stats['limit_maxbytes'] - ($slabs['total_malloced'] - $slabs['total_wasted']);
        $slabs['total_malloced'] = $stats['limit_maxbytes'];
    }

    # Making cache size stats
    $wasted_percent = sprintf('%.1f', $slabs['total_wasted'] / $stats['limit_maxbytes'] * 100);
    $used_percent = sprintf('%.1f', ($slabs['total_malloced'] - $slabs['total_wasted']) / $stats['limit_maxbytes'] * 100);
    $free_percent = sprintf('%.1f', ($stats['limit_maxbytes'] - $slabs['total_malloced']) / $stats['limit_maxbytes'] * 100);
?>
    <div class="size-4" style="float:left; padding-left:9px;clear:right;">
        <div class="sub-header corner padding">Cache Size <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Used</span>
                <?php echo htmlspecialchars(Analysis::byteResize($slabs['total_malloced'])); ?>Bytes
            </div>
            <div class="line">
                <span class="left">Total</span>
                <?php echo htmlspecialchars(Analysis::byteResize($stats['limit_maxbytes'])); ?>Bytes
            </div>
            <div class="line">
                <span class="left">Wasted</span>
                <?php echo htmlspecialchars(Analysis::byteResize($slabs['total_wasted'])); ?>Bytes
            </div>
            <!--
            <div class="line">
                <span class="left">Percent</span>
                <?php echo sprintf('%.1f', $stats['bytes'] / $stats['limit_maxbytes'] * 100, 1); ?>%
            </div>-->
         </div>

        <div class="sub-header corner padding">Cache Size <span class="green">Graphic</span></div>
        <div class="container corner padding">
        <div id="cacheUsageContainer"></div>
            <script>
                new Highcharts.Chart({
                    chart: {
                        backgroundColor: '#EBEBEB',
                        plotBorderWidth: null,
                        plotShadow: false,
                        width: 274,
                        height: 234,
                        marginLeft: 0,
                        marginRight: 0,
                        marginTop: 0,
                        marginBottom: 0,
                        renderTo: 'cacheUsageContainer'
                    },
                    title: {
                        text: '<b><?php echo htmlspecialchars(Analysis::byteResize($stats['limit_maxbytes'])); ?>Bytes</b>',
                        y: 110,
                        style: {
                            fontSize: '12px'
                        }
                    },
                    tooltip: {
                    	enabled: false
                    },
                    plotOptions: {
                        pie: {
                        	borderWidth: 0,
                            allowPointSelect: false,
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                distance: 15,
                                connectorWidth: 1.5,
                                format: '<b>{point.name}</b><br/>{point.percentage:.1f} %'
                            },
                            center: ['50%', '50%']
                        }
                    },
                    credits: {
                        enabled: false
                    },
                    series: [{
                        type: 'pie',
                        name: 'Cache Size',
                        size: '70%',
                        innerSize: '55%',
                        data: [{name: 'Wasted',
                                y: <?php echo htmlspecialchars($wasted_percent); ?>,
                                color: '#B5463F'},
                               {name: 'Used',
                                y: <?php echo htmlspecialchars($used_percent); ?>,
                                color: '#2A707B'},
                               {name: 'Free',
                                y: <?php echo htmlspecialchars($free_percent); ?>,
                                color: '#FFFFFF'}]
                    }]
                });
            </script>
        </div>
<?php
# Viewing a single server
if((isset($_REQUEST['server'])) && ($_ini->server($_REQUEST['server'])))
{ ?>
        <div class="sub-header corner padding">Hash Table <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left help" title="Internal name : hash_power_level&#013;Current size multiplier for hash table">Power Level</span>
                <?php echo htmlspecialchars((isset($stats['hash_power_level'])) ? Analysis::byteResize($stats['hash_power_level']) . 'Bytes' : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left">Size</span>
                <?php echo htmlspecialchars((isset($stats['hash_bytes'])) ? Analysis::byteResize($stats['hash_bytes']) . 'Bytes' : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span class="left help" title="Internal name : hash_is_expanding&#013;Indicates if the hash table is being grown to a new size">Expanding</span>
                <?php if(isset($stats['hash_is_expanding'])) { if($stats['hash_is_expanding']) { echo 'Yes'; } else { echo 'No'; } } else { echo htmlspecialchars('N/A on ' . $stats['version']); } ?>
            </div>
         </div>
<?php
}
# Viewing a cluster
elseif((isset($_REQUEST['server'])) && ($cluster = $_ini->cluster($_REQUEST['server'])))
{ ?>
        <div class="sub-header corner padding">Hash Table <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Size</span>
                <?php echo htmlspecialchars((isset($stats['hash_bytes'])) ? Analysis::byteResize($stats['hash_bytes']) . 'Bytes' : 'N/A on ' . $stats['version']); ?>
            </div>
         </div>
<?php
} ?>
        <div class="sub-header corner padding">Slab <span class="green">Reassign & Automove</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left help" title="Internal name : slabs_moved&#013;Indicates how many pages have been successfully moved">Slabs Moved</span>
                <?php echo htmlspecialchars((isset($stats['slabs_moved'])) ? Analysis::hitResize($stats['slabs_moved']) : 'N/A on ' . $stats['version']); ?>
            </div>
            <div class="line">
                <span  class="left help" title="Internal name : slab_reassign_running&#013;Indicates if the slab thread is attempting to move a page.&#013;It may need to wait for some memory to free up, so it could take several seconds.">Reassigning</span>
                <?php if(isset($stats['slab_reassign_running'])) { if($stats['slab_reassign_running']) { echo 'Yes'; } else { echo 'No'; } } else { echo htmlspecialchars('N/A on ' . $stats['version']); } ?>
            </div>
         </div>

        <div class="sub-header corner padding">Hit &amp; Miss Rate <span class="green">Graphic</span></div>
        <div class="container corner padding">
        <div id="hitsContainer"></div>
            <script>
                new Highcharts.Chart({
                    chart: {
                        backgroundColor: '#EBEBEB',
                        width: 274,
                        height: 147,
                        marginLeft: 0,
                        marginRight: 0,
                        marginTop: 0,
                        marginBottom: 20,
                        renderTo: 'hitsContainer'
                    },
                    title: {
                        text: null
                    },
                    tooltip: {
                    	enabled: false
                    },
                    plotOptions: {
                    	column: {
                            dataLabels: {
                                enabled: true,
                                format: '<b>{y} %</b>'
                            }
                        }
                    },
                    credits: {
                        enabled: false
                    },
                    legend: {
                        enabled: false
                    },
                    xAxis: {
                    	categories: ['Hits', 'Misses']
                    },
                    yAxis: {
                    	gridLineWidth: 0
                    },
                    series: [{
                        type: 'column',
                        name: 'Cache Size',
                        data: [{name: 'Hits',
                                <?php echo $stats['get_hits_percent'] = ' - ' ? '' : 'y: ' . $stats['get_hits_percent'] . ','; ?>
                                color: '#2A707B'},
                               {name: 'Misses',
                                <?php echo $stats['get_misses_percent'] = ' - ' ? '' : 'y: ' . $stats['get_misses_percent'] . ','; ?>
                                color: '#B5463F'}]
                    }]
                });
            </script>
        </div>

        <div class="sub-header corner padding">Network <span class="green">Stats</span></div>
        <div class="container corner padding">
            <div class="line">
                <span class="left">Bytes Read</span>
                <?php echo htmlspecialchars(Analysis::byteResize($stats['bytes_read'])); ?>Bytes
            </div>
            <div class="line">
                <span class="left">Bytes Written</span>
                <?php echo htmlspecialchars(Analysis::byteResize($stats['bytes_written'])); ?>Bytes
            </div>
        </div>
    </div>