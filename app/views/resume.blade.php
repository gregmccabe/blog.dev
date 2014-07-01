@extends ('layouts.masterResume')

@section ('content')

<!-- This is my Portfolio! -->

<div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h1>Greg S. McCabe</h1>
                    <h3>Web Developer | gsmccabe1@gmail.com</h3>
                </div><!--/.col-lg-12 -->
            </div><!--/.row -->
        </div><!--/.container -->
    </div><!--/.#headerwrap -->


    <section id="about" name="about"></section>
    <div id="intro">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-lg-offset-1">
                    <h5>ABOUT</h5>
                </div>
                <div class="col-lg-6">
                    <p>
                        My name is Greg McCabe, Web Developer/Programmer
                    </p>
                    <p>
                        I am passionate about learning new technologies and developing applications to improve lives and expand knowledge.
                    </p>
                    <p>
                        I believe there is always something to improve upon or learn. The work we do in our lives should not only contribute to our personal growth, but also to the growth of those around us.
                    </p>
                    <p>
                        I adapt extremely well to all environments and love to be challenged. I am a visual learner and work best in a team environment.
                    </p>
                    <p>
                        If you are looking for your next great developer, send me an email at <a href="mailto:gsmccabe1@gmail.com">gsmccabe1@gmail.com</a>.
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><a href="#"><i class="icon-file"></i></a> <sm>DOWNLOAD PDF</sm></p>
                </div>

            </div><!--/.row -->
        </div><!--/.container -->
    </div><!--/ #intro -->


    <section id="resume" name="resume"></section>
    <!--EDUCATION DESCRIPTION -->
    <div class="container desc">
        <div class="row">

                <div class="col-lg-2 col-lg-offset-1">
                    <h5>EDUCATION</h5>
                </div>
                <div class="col-lg-6">
                    <p><t><a href="http://www.codeup.com/">Codeup</a></t><br/>
                        <i>Codeup is an intensive, 12-week bootcamp that turns non-techies into computer programmers.</i>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><sm>GRADUATING IN August 2014</sm><br/>
                    <imp><sm>IN PROGRESS</sm></imp>
                    </p>
                </div>

                <div class="col-lg-6 col-lg-offset-3">
                    <p><t><a href="http://www.uiw.edu/">University of the Incarnate Word</a></t><br/>
                        BBA with a concentration in Management.<br/>
                        <i>4 Year Course</i>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><sm>December 2004</sm></p>
                </div>

        </div><!--/.row -->
        <br>
        <hr>
    </div><!--/.container -->


    <!--WORK DESCRIPTION -->
        <div class="container desc">
        <div class="row">

                <div class="col-lg-2 col-lg-offset-1">
                    <h5>WORK</h5>
                </div>
                <div class="col-lg-6">
                    <p><t>Field Manager</t><br/>
                        Mastec Advanced Technologies.<br/>
                    </p>
                    <p><more>Monitor and manage Technician Productivity within the assigned market to       ensure compliance with MasTec and DirecTV policies and procedures.<br>
                            Communicate daily with the Customer Care Manager to ensure proper management of installation and service call calendars.<br>
                            Monitor daily technician productivity data and utilize to schedule employees, manage resources, and reward/counsel employees for productivity.<br>
                            Work closely with Sub-partner principals and supervisors to ensure compliance with all MasTec and DirecTV policies and procedures.<br>
                            Responsible for supervisory functions on all shifts; manage the counseling process by monitoring employee productivity, and other performance markers
                            Participate in employee evaluations making recommendations for improvement and implement training initiatives for staff which includes ensuring training for promotional opportunities.<br>
                            Perform Quality Inspections on a consistent basis and within the guidelines as directed by Service Line Management.<br> Train, and/or up train employees on the standards of installation and service.<br> Bring jobs up to specifications, if needed.<br>
                            Install and service of standard, KA/KU, And KA/KU Swim satellite systems</more></p>
                </div>
                <div class="col-lg-3">
                    <p><sm>AUGUST 2012 - CURRENT</sm></p>
                </div>

                <div class="col-lg-6 col-lg-offset-3">
                    <p><t>Territory Manager</t><br/>
                        Medical Device Sales <br/>
                    </p>
                    <p><more>Over 5 years of Spine and Craniomaxillofacial experience.<br>
                        Sold a complete range of titanium implants, spinal fusion products, instrumentation and biologics for Craniomaxillofacial and Spine procedure</more></p>
                </div>
                <div class="col-lg-3">
                    <p><sm>JUNE 2006 - December 2010</sm></p>
                </div>
        </div><!--/.row -->
        <br>
        <hr>
    </div><!--/.container -->

        <br>

    </div>


    <!--SKILLS DESCRIPTION -->
    <div id="skillswrap">
        <div class="container">
            <div class="row">
                    <div class="col-lg-2 col-lg-offset-1">
                        <h5>SKILLS</h5>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="javascript" height="130" width="130"></canvas>
                        <p>PHP</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 70,
                                        color:"#1abc9c"
                                    },
                                    {
                                        value : 30,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="bootstrap" height="130" width="130"></canvas>
                        <p>Bootstrap</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 90,
                                        color:"#1abc9c"
                                    },
                                    {
                                        value : 10,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="wordpress" height="130" width="130"></canvas>
                        <p>Javascript</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 65,
                                        color:"#1abc9c"
                                    },
                                    {
                                        value : 35,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>

                    <div class="col-lg-3 col-lg-offset-3 centered">
                        <canvas id="html" height="130" width="130"></canvas>
                        <p>HTML/CSS</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 80,
                                        color:"#1abc9c"
                                    },
                                    {
                                        value : 20,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="photoshop" height="130" width="130"></canvas>
                        <p>Laravel</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 70,
                                        color:"#1abc9c"
                                    },
                                    {
                                        value : 30,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="illustrator" height="130" width="130"></canvas>
                        <p>Jquery</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 50,
                                        color:"#1abc9c"
                                    },
                                    {
                                        value : 50,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("illustrator").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>

            </div><!--/.row -->
            <br>
        </div><!--/.container -->
    </div><!--/ #skillswrap -->


    <section id="contact" name="contact"></section>
    <!--FOOTER DESCRIPTION -->
    <div id="footwrap">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-lg-offset-1">
                    <h5>CONTACT</h5>
                </div>
                <div class="col-lg-6">
                    <p><t>Email</t><br/>
                        gsmccabe1@gmail.com <br/>
                    </p>
                    <p><t>Address</t><br/>
                        11706 Adriana Maria <br/>
                        San Antonio, TX 78253 <br/>
                    </p>
                    <p><t>Phone</t><br/>
                        210-284-2727 <br/>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><sm>SOCIAL LINKS</sm></p>
                    <p>

                        <a href="https://twitter.com/Greg_McCabe"><i class="icon-twitter"></i></a>
                        <a href="https://www.facebook.com/RedStar.Hobby"><i class="icon-facebook"></i></a>
                        <a href="https://www.linkedin.com/pub/greg-mccabe/19/9b1/739"><i class="icon-linkedin"></i></a>


                    </p>
                </div>
            </div><!--/.row -->
        </div><!--/.container -->
    </div><!--/ #footer -->
    <div id="c">
        <div class="container">
        </div>
    </div>
@stop