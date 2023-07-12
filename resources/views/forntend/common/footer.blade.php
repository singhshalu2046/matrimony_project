<footer>
    <section class="main-footer">
        <div class="container">
            <div class="footer-link">
                <ul>
                    <li><a href="#">Home </a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Feedback / Queries</a></li>
                </ul>
            </div><!-- footer-link-->
            <div class="ftr-social">
                <span>Follow Us</span>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div><!-- ftr-social-->
            <div class="ftr-loc">
                <span>OFFICE LOCATIONS :</span>
                <ul>
                    <li><a href="#">Mumbai</a></li>
                    <li><a href="#">Delhi</a></li>
                    <li><a href="#">Banglore</a></li>
                    <li><a href="#">Hyderabad</a></li>
                    <li><a href="#">Ahmedabad</a></li>
                    <li><a href="#">Chennai</a></li>
                    <li><a href="#">Jaipur</a></li>
                    <li><a href="#">Lucknow</a></li>
                    <li><a href="#">Bhopal</a></li>
                    <li><a href="#">Agra...</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </div><!-- ftr-social-->
            <p class="copyright">All rights reserved © 2022 Aquila Matrimony </p>
        </div><!-- container-->
    </section>
</footer>

<script src="https://kit.fontawesome.com/69b12198c3.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ URL::asset('forntend/js/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('forntend/js/bootstrap.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var country = $('#country :selected').attr('data-id');
        var state = $('#state :selected').attr('data-id');
        var url = "{{ url('get-state-district')}}";

        // getStateDistrirct(country,state);
        $('#country').change(function(){
            var country = $('#country :selected').attr('data-id');
             debugger
             $('#state').empty();
             getStateDistrirct(country);
            
        })


        $('#state').change(function(){
            var country = $('#country :selected').attr('data-id');
            var state = $('#state :selected').attr('data-id');
             $('#district').empty();
             $('#state option[data-id=state]').attr('selected','selected');
             getStateDistrirct(country,state);
            
        })

        function getStateDistrirct(country,state=''){
            $.get(url,{"country_id": country,"state_id": state}, function(data){
                $('#state').empty();
                $('#state').append(data.state);
                var state = $('#state :selected').val();
                $('#district').append(data.district);
            })
        }



        $.ajax({
            url: '{{url("getsubcast")}}',
            data: "cast=" + $("#cast").val(),
            type: "GET",
            success: function(html) {
                $("#subcast").html(html);
            }
        });
    });

    $('#cast').change(function(e) {
        $.ajax({
            url: '{{url("getsubcast")}}',
            data: "cast=" + $("#cast").val(),
            type: "GET",
            success: function(html) {
                $("#subcast").html(html);
            }
        });
    });
</script>
<!-- <script>
    $(document).ready(function() {
        $('#cast').on('change', function() {
            var cast = this.value;
            $("#subcast").html('');
            $.ajax({
                url: "{{url('getsubcast')}}",
                type: "GET",
                data: {
                    cast: cast,
                    _token: '{{csrf_token()}}'
                },
             //   dataType: 'json',
                success: function(html) {
                    $('#subcast').html(html);

                }
            });
        });
        $('#religion').on('change', function() {
            var subcast = this.value;
            $("#cast").html('');
            $.ajax({
                url: "{{url('getcast')}}",
                type: "GET",
                data: {
                    subcast: subcast,
                    _token: '{{csrf_token()}}'
                },
              //  dataType: 'json',
                success: function(html) {
                    $('#city-dd').html(html);

                }
            });
        });
    });
</script> -->


<script>
    $(document).ready(function() {
        $(".active-btn").click(function() {
            $(".div-1").show();
            $(".div-2").hide();
            $(".div-3").hide();
        });

        $(".chats-btn").click(function() {
            $(".div-2").show();
            $(".div-1").hide();
            $(".div-3").hide();
        });

        $(".alerts-btn").click(function() {
            $(".div-3").show();
            $(".div-2").hide();
            $(".div-1").hide();
        });


    });
    $('.today-slider').owlCarousel({

        items: 6,

        loop: true,

        autoplay: true,

        autoplayTimeout: 3000,

        margin: 15,

        nav: true,

        dots: false,

        navText: ['<span class="fa fa-angle-left  fa-2x"></span>', '<span class="fas fa fa-angle-right fa-2x"></span>'],

        responsive: {

            0: {

                items: 2

            },

            768: {

                items: 2

            },

            1080: {

                items: 5

            }

        }



    })
    $('.new-match-slider').owlCarousel({

        items: 6,

        loop: true,

        autoplay: true,

        autoplayTimeout: 3000,

        margin: 15,

        nav: true,

        dots: false,

        navText: ['<span class="fa fa-angle-left  fa-2x"></span>', '<span class="fas fa fa-angle-right fa-2x"></span>'],

        responsive: {

            0: {

                items: 2

            },

            768: {

                items: 2

            },

            1080: {

                items: 4

            }

        }



    })
</script>

<script>
    $('.Premium-match-slider').owlCarousel({

        items: 6,

        loop: true,

        autoplay: true,

        autoplayTimeout: 3000,

        margin: 15,

        nav: true,

        dots: false,

        navText: ['<span class="fa fa-angle-left  fa-2x"></span>', '<span class="fas fa fa-angle-right fa-2x"></span>'],

        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 2
            },
            1080: {
                items: 4
            }
        }
    })
</script>