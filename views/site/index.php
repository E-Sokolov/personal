<?php

/** @var yii\web\View $this */

$this->title = 'Ye. Sokolov - Personal Site';
?>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <img class="masthead-brand" height="80px" src="img/logo1.png" />
<!--                    <h3 class="masthead-brand">Coming Soon</h3>-->
                    <nav class="nav nav-masthead">
                        <a class="nav-link nav-social" href="https://www.facebook.com/eisokolov" target="_blank" title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a class="nav-link nav-social" href="https://instagram.com/sokolov.e.i" target="_blank" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a class="nav-link nav-social" href="https://vk.com/sokolov_e_i" target="_blank" title="VK"><i class="fab fa-vk" aria-hidden="true"></i></a>
                        <a class="nav-link nav-social" href="tg://resolve?domain=sokolov_e_i" target="_blank" title="Telegram"><i class="fab fa-telegram" aria-hidden="true"></i></a>
                    </nav>
                </div>
            </div>
            <div class="inner cover">
                <h1 class="cover-heading">Coming Soon</h1>
                <p class="lead cover-copy">Site in development now</p>
                <p class="lead"><button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#subscribeModal">Contact</button></p>
            </div>
            <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="subscribeModalLabel">Contact Me:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <form method="post" action="">

                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">Your Email</label>
                                    <input type="text" class="form-control" name="email"  id="recipient-name" placeholder="your-name@example.com">
                                    <label for="theme" class="form-control-label">Theme of letter</label>
                                    <input type="text" name="theme" class="form-control" id="theme" placeholder="Letter Theme">
                                    <label for="message" class="form-control-label">Message</label>
                                    <textarea name="message"  class="form-control" id="message" placeholder="Message ..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default">Send</button>
                                </div>
                           </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
