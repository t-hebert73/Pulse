<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 5/4/15
 * Time: 10:41 PM
 */
?>

<?php
    /**
     * Function for songs uploaded through the website
     */
?>
<?php function AddUploadedSong($songTitle, $fileName, $uploadedIndex) { ?>

        <div class="song-container">
            <div class="song-info">
                <div class="content">
                    <h4 class="song-title"><?php echo $songTitle; ?></h4>
                    <h4 class="band-name">Pulse Cover </h4>
                </div>
            </div>
            <div id="jquery_jplayer_<?php echo $uploadedIndex; ?>" class="jp-jplayer"></div>
            <div id="jp_container_<?php echo $uploadedIndex; ?>" class="jp-audio">
                <div class="jp-type-single">
                    <div class="jp-gui jp-interface">
                        <ul class="jp-controls">
                            <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                            <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                            <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                            <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                            <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                            <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                        </ul>
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                        <div class="jp-time-holder">
                            <div class="jp-current-time"></div>
                            <div class="jp-duration"></div>
                            <ul class="jp-toggles">
                                <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp-details">
                        <ul>
                            <li><span class="jp-title"></span></li>
                        </ul>
                    </div>
                    <div class="jp-no-solution">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>


    <script type="text/javascript">
        var $songTitleJs = "<?php echo $songTitle; ?>",
            $uploadedIndex = "<?php echo $uploadedIndex; ?>";

        $("#jquery_jplayer_" + $uploadedIndex).jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    title: $songTitleJs,
                    mp3: "/audio/uploaded/<?php echo $fileName; ?>"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath: "/js/jplayer",
            supplied: "mp3",
            cssSelectorAncestor: '#jp_container_' + $uploadedIndex
        });
    </script>

 <?php } ?>

<?php
    /**
     * Function for songs uploaded manually through phpstorm
     */
?>
<?php function AddSong($songTitle2, $fileName2, $index) { ?>

    <div class="song-container">
        <div class="song-info">
            <div class="content">
                <h4 class="song-title"><?php echo $songTitle2; ?></h4>
                <h4 class="band-name">Pulse Cover </h4>
            </div>
        </div>
        <div id="jquery_jplayer_<?php echo $index; ?>" class="jp-jplayer"></div>
        <div id="jp_container_<?php echo $index; ?>" class="jp-audio">
            <div class="jp-type-single">
                <div class="jp-gui jp-interface">
                    <ul class="jp-controls">
                        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                        <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                        <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                        <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                    </ul>
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                    <div class="jp-time-holder">
                        <div class="jp-current-time"></div>
                        <div class="jp-duration"></div>
                        <ul class="jp-toggles">
                            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                        </ul>
                    </div>
                </div>
                <div class="jp-details">
                    <ul>
                        <li><span class="jp-title"></span></li>
                    </ul>
                </div>
                <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>


    <script type="text/javascript">
        var $songTitleJsd = "<?php echo $songTitle2; ?>",
            $index = "<?php echo $index; ?>";

        $("#jquery_jplayer_" + $index).jPlayer({
            ready: function () {
                $(this).jPlayer("setMedia", {
                    title: $songTitleJsd,
                    mp3: "/audio/<?php echo $fileName2; ?>"
                });
            },
            play: function() { // To avoid both jPlayers playing together.
                $(this).jPlayer("pauseOthers");
            },
            swfPath: "/js/jplayer",
            supplied: "mp3",
            cssSelectorAncestor: '#jp_container_' + $index
        });
    </script>

<?php } ?>