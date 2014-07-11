@extends('layout')

@section('content')

<div class="container">

    <div class="row">
        <div class="mainbar col-md-8">
            <h1 class="page-title">Media</h1>
            <!--
            <div class="upcoming-shows-container">
                <div class="shows-header">
                    <div class="venue"><div class="content">Venue</div></div>
                    <div class="location"><div class="content">Location</div></div>
                    <div class="date"><div class="content">Date</div></div>
                    <div class="time"><div class="content">Time</div></div>
                </div>
                <div class="show">
                    <div class="venue"><div class="content">Gateway Fields</div></div>
                    <div class="location"><div class="content">Kamloops, British Columbia</div></div>
                    <div class="date"><div class="content">August 52nd, 2045</div></div>
                    <div class="time"><div class="content">27:00pm</div></div>
                </div>
                <div class="show">
                    <div class="venue"><div class="content">Gateway Fields</div></div>
                    <div class="location"><div class="content">Kamloops, British Columbia</div></div>
                    <div class="date"><div class="content">August 52nd, 2045</div></div>
                    <div class="time"><div class="content">27:00pm</div></div>
                </div>
                <div class="show">
                    <div class="venue"><div class="content">Gateway Fields</div></div>
                    <div class="location"><div class="content">Kamloops, British Columbia</div></div>
                    <div class="date"><div class="content">August 52nd, 2045</div></div>
                    <div class="time"><div class="content">27:00pm</div></div>
                </div>
                <div class="show">
                    <div class="venue"><div class="content">Gateway Fields</div></div>
                    <div class="location"><div class="content">Kamloops, British Columbia</div></div>
                    <div class="date"><div class="content">August 52nd, 2045</div></div>
                    <div class="time"><div class="content">27:00pm</div></div>
                </div>
                <div class="show last">
                    <div class="venue"><div class="content">Gateway Fields</div></div>
                    <div class="location"><div class="content">Kamloops, British Columbia</div></div>
                    <div class="date"><div class="content">August 52nd, 2045</div></div>
                    <div class="time"><div class="content">27:00pm</div></div>
                </div>
            </div>
            -->
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div id="jp_container_1" class="jp-audio">
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

        </div>

        <div class="sidebar col-md-4">
            <div class="past-shows-container">
                <h2>Past Shows</h2>

                <div class="show">
                    <h4>Space Amphitheatre</h4>

                    <div class="date">
                        July 31st 2014
                    </div>
                    <div class="time">
                        7:00pm
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="show">
                    <h4>Space Amphitheatre</h4>

                    <div class="date">
                        July 31st 2014
                    </div>
                    <div class="time">
                        7:00pm
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="show">
                    <h4>Space Amphitheatre</h4>

                    <div class="date">
                        July 31st 2014
                    </div>
                    <div class="time">
                        7:00pm
                    </div>
                    <div class="clear"></div>
                </div>
            </div>


        </div>

    </div>
</div>

@stop