<footer id="footer">

    <div class="footer-bottom text-center">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="footer-logo">
                    <a class="navbar-brand dark">
                        <h3>The Hunger Eradication</h3>
                    </a>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi
                    ut
                    aliquip ex ea commodo consequat.</p>
                <address>
                    <p>&copy; 2022 Hunger Eradication || Development by Faheem Niyas 2211338 </p>
                </address>
            </div><!-- /.footer-bottom-content -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /#footer -->


<!-- JS -->
{{--<script src="{{asset('assets/js/jquery.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>--}}
<script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/marquee.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/moment.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/theia-sticky-sidebar.min.js')}}"
        type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/jquery.jplayer.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/jplayer.playlist.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/slick.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/carouFredSel.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/main.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script>(function () {
        var js = "window['__CF$cv$params']={r:'7ba8706b3acc4cb0',m:'gMfK8.PxEJEjNdjdRoNYDbWBYSKu3YPApnuMrc5M3bc-1681941823-0-ARIwQbcNW5lBPU7Of3erXIU/RqbrtDC4yFUbhzkXljoC',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='{{asset("cdn-cgi/challenge-platform/h/g/scripts/jsd/70d5f7ce/invisible.js")}}',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.nonce = '';
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }

        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function () {
            };
            document.onreadystatechange = function (e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();
</script>
<script type="text/javascript">

    $(document).ready(function () {
        $('[data-toggle=offcanvas]').click(function () {
            $(this).toggleClass('visible-xs text-center');
            $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
            $('.row-offcanvas').toggleClass('active');
            $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
            $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
            $('#btnShow').toggle();
        });
    });

    $(document).on('submit', '.form_submission', function (e) {
        e.preventDefault();
        let this_ = $(this);
        let action = this_.attr('action');
        $.post(action, this_.serialize(), function (res) {
            location.reload();
        });
    });

    $(document).on('keyup', 'textarea[name="content"]', function () {
        getLocation();
    });

    let longitude = $('input[name="longitude"]');
    let latitude = $('input[name="latitude" ]');
    let _token = $('meta[name="csrf-token"]').attr('content');

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);

        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        latitude.val(position.coords.latitude);
        longitude.val(position.coords.longitude);
    }

    $(document).on('click', '.checkbox_selection', function () {
        let _this = $(this);
        _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', 'disabled');
        _this.attr('disabled', false);
        let action = "{{route('suggestion.box')}}";
        let post_id = _this.attr('data-post-id');
        let user_id = "{{Auth::user()->id}}";
        if (_this.is(':checked')) {
            _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', 'disabled');
            _this.attr('disabled', false);
            $.post(action, {_token: _token, item: _this.val(), post_id: post_id, user_id: user_id});
        } else {
            _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', false);
        }
    });

    $(document).on('click', '.delete-btn', function () {
        let _this = $(this);
        let model = _this.attr('data-model');
        let id = _this.attr('data-id');
        let action = "{{route('delete')}}";
        $.post(action, {_token: _token, id: id, model: model}, function () {
            location.reload()
        })
    })

    $(document).on('click', '.dropdown_checkbox', function () {
        let _this = $(this);
        console.log(_this.attr('data-toggle'));
        let x = _this.closest(".tr-post").find(".checkbox-open");
        if (_this.attr('data-toggle') == 1) {
            x.css('display', 'block');
            _this.attr('data-toggle', 0);
        } else {
            x.css('display', 'none');
            _this.attr('data-toggle', 1);
        }
    })
</script>

</body>

<!-- Mirrored from demo.themeregion.com/newshub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 22:04:14 GMT -->
</html>

