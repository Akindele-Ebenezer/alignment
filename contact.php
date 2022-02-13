<?php 
    $page_title = "Message Us";
    $title = $page_title;
    $content = " 
                <form action=\"\">
                    <div class=\"form\">
                        <div class=\"form-info-wrapper\">
                            <h1>Lets get in touch</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, sint.</p>
                            <div class=\"form-body-wrapper\">
                                <div class=\"contact\">
                                    <div><img src=\"\" alt=\"\">  IMG</div>
                                    <div>Address</div>
                                </div> 
                                <div class=\"contact\">
                                    <div><img src=\"\" alt=\"\">  IMG</div>
                                    <div>Phone</div>
                                </div> 
                                <div class=\"contact\">
                                    <div><img src=\"\" alt=\"\">  IMG</div>
                                    <div>Email</div>
                                </div> 
                                <div class=\"contact\">
                                    <div><img src=\"\" alt=\"\">  IMG</div>
                                    <div>Website</div>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <h1>Get in touch</h1>
                            <div class=\"input-wrapper\">
                                <div>
                                    <label for=\"full_name\">Full Name</label><br>
                                    <input type=\"text\" placeholder=\"Name...\">
                                </div>

                                <div>
                                    <label for=\"email\">Email</label> <br>
                                    <input type=\"email\" placeholder=\"Email...\">
                                </div>

                                <div>
                                    <label for=\"subject\">Subject</label><br>
                                    <input type=\"text\" placeholder=\"Subject...\">
                                </div>

                                <div>
                                    <label for=\"phone_no\">Phone No.</label><br>
                                    <input type=\"number\" placeholder=\"Phone No.\">
                                </div>
                            </div>

                            <textarea name=\"message\" placeholder=\"Write your Message\"></textarea>
                            <br>
                            <input type=\"button\" value=\"Send Message\">
                        </div>
                    </div>
                </form>
    ";
                include "temp.php";
?>

 

