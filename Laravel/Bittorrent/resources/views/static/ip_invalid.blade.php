<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>
    <body>
        @include('common.ip_invalid')

        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="UserIpCheckModal" aria-hidden="true" id="UserIpCheckModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Die Webseite darf aus rechtlichen.</p>
                        <p>Grunden nur in der Bundesrepublih.</p>
                        <p>Deutschland aufgerufen werden.</p>

                        <p>Befinden Sie sich in der Bundesrepublik Deutschland?</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-primary" id="ok" data-dismiss="modal">JA</button>
                        <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal" click="cancelHandler()">Nein</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function(){
            const allowedTimes = {{ $allowedTimes }}
            if (allowedTimes < 3)
                $('#UserIpCheckModal').modal('show')
        });

        $("#ok").click(() => {
            window.axios.get('api/v1/ip').then((res) => {
                window.location.href="/"
            }).catch((err) => {
                console.log(err)
            })
        })

        $("#cancel").click(() => {
            
        })
    </script>
</html>
