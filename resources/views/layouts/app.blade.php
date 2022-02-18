<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src=require_once __DIR__ . ('/js/fullcalendar/core/main.js')></script>
<script src=require_once __DIR__ . ('/js/fullcalendar/daygrid/main.js')></script>
<script src=require_once __DIR__ . ('/js/fullcalendar/interaction/main.js')></script>
<script src=require_once __DIR__ . ('/js/fullcalendar/timegrid/main.js')></script>
<script src=require_once __DIR__ . ('/js/fullcalendar/list/main.js')></script>

<script src=require_once __DIR__ . ("/js/ajax-setup.js")></script>
<!-- <script src='/js/fullcalendar.js'></script> -->
<script src=require_once __DIR__ . ('/js/event-control.js')></script>

<link href=require_once __DIR__ . ('/css/fullcalendar/core/main.css') type="text/css" rel='stylesheet' />
<link href=require_once __DIR__ . ('/css/fullcalendar/daygrid/main.css') type="text/css" rel='stylesheet' />
<link href=require_once __DIR__ . ('/css/fullcalendar/timegrid/main.css') type="text/css" rel='stylesheet' />
<link href=require_once __DIR__ . ('/css/fullcalendar/list/main.css') type="text/css" rel='stylesheet' />
<style>
        @media screen and (max-width: 767px){
            .fc-toolbar h2 {
                font-size: 1.5em;
                margin: 0;
            }
            .fc-button{
                font-size: 1em;
            }

            .fc-button-group {
                display: block;
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .fc-toolbar > * > :not(:first-child) {
                margin-left: 0;
                width: 100%;
            }

            .fc-ltr .fc-axis {
                line-height: 21px;
            }
        }

        @media screen and (max-width: 500px){
            .fc-toolbar h2 {
                font-size: 1.25em;
                margin: 0;
            }
            .fc-button{
                font-size: 1em;
            }

            .fc table{
                font-size: 0.5em;
            }
        }
</style>