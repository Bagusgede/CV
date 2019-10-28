<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div class="" style="width: 100%">
            <div class="uk-background-default" uk-sticky="sel-target: .navbar-sticky; cls-active: uk-navbar-sticky">
                <nav class="uk-container navbar-sticky" uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo" href="#">Logo</a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#scoll-about" uk-scroll="offset: 50">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#scoll-skill" uk-scroll="offset: 50">
                                    Skill
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="uk-container-expand">
            <div class="uk-height-large" uk-grid>
                <div class="uk-width-1-1 uk-background-cover uk-flex uk-flex-center uk-flex-middle" data-src="https://getuikit.com/docs/images/light.jpg" uk-img>
                    <h1>Hello, I'm Bayu</h1>
                </div>
            </div>
        </div>
        <div id="scoll-about" class="uk-container uk-padding">
            <div uk-grid>
                <div class="uk-width-1-3">
                    <img data-src="https://getuikit.com/docs/images/light.jpg" width="100%" alt="" uk-img>
                </div>
                <div class="uk-width-2-3">
                    <h2>I'm a Web Designer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p uk-margin>
                        <button class="uk-button uk-button-primary">Hire Me</button>
                        <button class="uk-button uk-button-default uk-margin-left">Contact</button>
                    </p>
                </div>
            </div>
        </div>
        <div id="scoll-skill" class="uk-container uk-padding">
            <h2 class="uk-margin-large uk-text-center">My Skill</h2>
            <div uk-grid>
                <div class="uk-width-1-2">
                    <h5 class="uk-margin-remove-top">HTML <span class="uk-text-italic">80/100</span></h5>
                    <progress class="uk-progress" value="80" max="100"></progress>

                    <h5 class="uk-margin-remove-top">CSS <span class="uk-text-italic">75/100</span></h5>
                    <progress class="uk-progress" value="75" max="100"></progress>

                    <h5 class="uk-margin-remove-top">PHP <span class="uk-text-italic">90/100</span></h5>
                    <progress class="uk-progress" value="90" max="100"></progress>
                </div>
                <div class="uk-width-1-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <footer>
            <div class="uk-container uk-padding">
                <p class="uk-text-center">&copy; 2019. All right reserved.</p>
            </div>
        </footer>
    </body>
</html>